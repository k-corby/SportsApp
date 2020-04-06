<?php

namespace App\Repository;

use App\Entity\Event;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

class EventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Event::class);
    }

    public function addEvent(Event $event)
    {
        $this->getEntityManager()->persist($event);
        $this->getEntityManager()->flush();
        return $event->getId();
    }

    public function getAllEvents($page)
    {
        $page = $page ?? 1;
        $pageSize = 6;
        $eventRepository = $this->getEntityManager()->getRepository(Event::class);
        $query = $eventRepository->createQueryBuilder('e')->getQuery();
        $event = new Paginator($query);
        $total = count($event);
        $pagesCount = ceil($total / $pageSize);
        $event->getQuery()->setFirstResult($pageSize * ($page - 1))->setMaxResults($pageSize);

        return ['Event' => $event, 'Count' => $pagesCount, 'Total' => $total];
    }

    public function getEventById($id)
    {
        return $this->getEntityManager()->getRepository(Event::class)->find($id);
    }
}
