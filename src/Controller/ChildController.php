<?php

namespace App\Controller;

use App\Entity\Child;
use App\Forms\AddChildType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChildController extends AbstractController
{
    /**
     * @Route("/child/add", name="app_child_add")
     */
    public function add(Request $request): Response
    {
        $child = new Child();
        $child->setUser($this->getUser());
        $form = $this->createForm(AddChildType::class, $child);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $model = $form->getData();
            $childRepository = $this->getDoctrine()->getManager();
            $childRepository->persist($model);
            $childRepository->flush();
            \Doctrine\Common\Util\Debug::dump($model);
        }

        return $this->render('Child/Add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
