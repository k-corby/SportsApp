<?php

namespace App\Repository;

use App\Entity\Address;
use App\Entity\AddressType;
use App\Entity\Roles;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\Expr\Join;

class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function getAllUser()
    {
        return $this->getEntityManager()->getRepository(User::class)->findAll();
    }

    public function getUser($id)
    {
        /*$userRepository = $this->getEntityManager()->createQueryBuilder();
        $userRepository->select(['user', 'address', 'role'])
            ->from(User::class, 'user')
            ->innerJoin(
                Address::class, 'address',
                Join::WITH,
                'user.id = address.user'
            )
            ->innerJoin(
                Roles::class, 'role',
                JOIN::WITH,
                'user.role = role.id'
            )
            ->where(
                'user.id = '.$id
            );
        \Doctrine\Common\Util\Debug::dump($userRepository->getQuery()->getResult());
        return $userRepository->getQuery()->getResult();*/

        return $this->getEntityManager()->getRepository(User::class)->find($id);
    }

    public function addUser(User $user)
    {
        $role = $this->getEntityManager()->find(Roles::class, 1);
        $addressType = $this->getEntityManager()->find(AddressType::class, 1);
        //$account->set
        //var_dump($account);
        //$addressType = new AddressType();
        //$test = $account->getAddress();
        //$addressType = $this->getEntityManager()->find(AddressType::class, 1);
        //\Doctrine\Common\Util\Debug::dump($addressType);
        //$account->Address->add($addressType);
        //$address->setAddressType($addressType);

        $user->setRoleType($role);
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();

        echo $user->getId();
    }

    public function getUserEmail($email)
    {
    }
}
