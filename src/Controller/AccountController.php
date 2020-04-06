<?php

namespace App\Controller;

use App\Entity\Address;
use App\Entity\AddressType;
use App\Entity\User;
use App\Forms\LoginType;
use App\Forms\Models\AccountRequest;
use App\Forms\RegisterUserType;
use App\Services\UserService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AccountController extends AbstractController
{
    /**
     * @Route("/account", name="app_account")
     * @IsGranted("ROLE_USER")
     * @param UserService $userService
     * @return Response
     */
    public function index(UserService $userService): Response
    {
        $user1 = $userService->getUser(8);
        $user = $this->getUser();
        //\Doctrine\Common\Util\Debug::dump($user);

        return $this->render('Account/Index.html.twig', [
            'model' => $user,
            'userModel' => $user1,
        ]);
    }

    public function register(Request $request, UserService $userService, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        //$this->denyAccessUnlessGranted('ROLE_ADMIN');
        // = new RegisterModel($this->getDoctrine());
        $user = new User();
        $address = new Address();
        $addressType = $this->getDoctrine()->getRepository(AddressType::class)->find(1);
        //\Doctrine\Common\Util\Debug::dump($addressType);
        $address->setUser($user);
        $address->setAddressType($addressType);
        $user->getAddress()->add($address);

        $form = $this->createForm(RegisterUserType::class, $user);
        $form->handleRequest($request);
        $model = null;
        if ($form->isSubmitted() && $form->isValid()) {
            $user->setRoles(['ROLE_USER']);
            $user->setPassword($passwordEncoder->encodePassword($user, $user->getPassword()));
            $model = $form->getData();
            //\Doctrine\Common\Util\Debug::dump();
            //$userService->addUser($model);
            //echo 'submitted and valid';
        }

        return $this->render('Account/Register.html.twig', [
            'form' => $form->createView(),
            'model' => $model,
        ]);
    }

    public function update()
    {
        return $this->render('Account/Update.html.twig');
    }

    /**
     * @return Response
     * @Route("/account/login", name="app_account_login")
     */
    public function login(Request $request)//: Response
    {
        $form = $this->createForm(LoginType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            var_dump($form->getData());
        }

        return $this->render('Account/Login.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function registerChild()
    {
        //$child = new Child
        return $this->render('Account/RegisterChild.html.twig');
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     */
    public function registerAcc(Request $request): Response
    {
        $accountRequest = new AccountRequest();
        $form = $this->createForm(RegisterType2::class, $accountRequest);
        $form->handleRequest($request);

        return $this->render('Account/Add2.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @return Response
     * @Security("is_granted('ROLE_USER')", statusCode=404)
     * @Route("/account/all", name="app_account_all")
     */
    public function all(UserService $userService)
    {
        $model = $userService->getAllUser();
        //\Doctrine\Common\Util\Debug::dump($model[0]);

        return $this->render('Account/All.html.twig', ['Model' => $model]);
    }
}
