<?php

namespace App\Controller;

use App\Entity\Event;
use App\Forms\Models\EventModel;
use App\Services\EventService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class EventController extends AbstractController
{
    /**
     * @Route("/events", name="findAllEvents", methods={"GET"})
     *
     * @param SerializerInterface $serializer
     * @param EventService $eventService
     * @return JsonResponse
     */
    public function events(SerializerInterface $serializer, EventService $eventService): JsonResponse
    {
        $event = $this->getDoctrine()->getRepository(Event::class)->findAll();
        $data = $serializer->serialize($event, JsonEncoder::FORMAT);

        return new JsonResponse($data, Response::HTTP_OK, [], true);
    }

    /**
     * @Security("is_granted('ROLE_MANAGER')")
     */
    public function add(Request $request, EventService $eventService): Response
    {
        $event = new Event();
        $form = $this->createForm(EventModel::class, $event);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $model = $form->getData();
            $id = $eventService->addEvent($model);
            echo $id;
        }

        return $this->render('Event/Add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @param $page
     *
     * @return Response
     */
    public function all(EventService $eventService, $page)
    {
        $model = $eventService->getAllEvents($page);

        return $this->render('Event/All.html.twig', ['Model' => $model]);
    }

    /**
     * @param $id
     *
     * @return Response
     */
    public function show(EventService $eventService, $id)
    {
        $model = $eventService->getEventById($id);

        return $this->render('Event/Show.html.twig', ['Model' => $model]);
    }

    /**
     * @Security("is_granted('ROLE_MANAGER')", statusCode=404)
     *
     * @param $id
     *
     * @return RedirectResponse
     */
    public function delete(EventService $eventService, $id)
    {
        return $this->redirectToRoute('index');
    }
}
