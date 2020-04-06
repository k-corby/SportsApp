<?php

namespace App\Controller;

use App\Entity\Address;
use App\Entity\AddressType;
use App\Entity\Organisation;
use App\Entity\User;
use App\Forms\RegisterOrganisationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class OrganisationController extends AbstractController
{
    public function add(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        // $organisation = new Organisation();
        $user = new User();
        $address = new Address();
        $organisation = new Organisation();
        $addressType = $this->getDoctrine()->getRepository(AddressType::class)->find(1);
        //\Doctrine\Common\Util\Debug::dump($addressType);
        $address->setUser($user);
        $address->setAddressType($addressType);

        $user->getAddress()->add($address);
        $user->getOrganisation()->add($organisation);
        //$organisation->getUser()->add($user);
        $form = $this->createForm(RegisterOrganisationType::class, $user);
        $form->handleRequest($request);
        $model = null;
        //$model = $form->getData();
        //\Doctrine\Common\Util\Debug::dump($model);
        if ($form->isSubmitted() && $form->isValid()) {
            $user->setRoles(['ROLE_USER']);
            $user->setPassword($passwordEncoder->encodePassword($user, $user->getPassword()));
            $model = $form->getData();
            \Doctrine\Common\Util\Debug::dump($model);
        }

        return $this->render('Organisation/Add.html.twig', [
            'form' => $form->createView(),
            'model' => $model,
        ]);
    }
}
