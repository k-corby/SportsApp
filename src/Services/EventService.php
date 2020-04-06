<?php

// src/Repository/ProductRepository.php

namespace App\Services;

use App\Entity\Event;
use App\Repository\EventRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Pagination\Paginator;

class EventService extends ServiceEntityRepository
{
    private $eventRepository;

    public function __construct(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function addEvent(Event $model)
    {
        return $this->eventRepository->addEvent($model);
    }

    public function getAllEvents($page)
    {
        return $this->eventRepository->getAllEvents($page);
    }

    public function getEventById($id)
    {
        return $this->eventRepository->getEventById($id);
    }
}
