<?php

namespace App\Models;

use App\Entity\Address;
use App\Entity\AddressType;
use App\Entity\User;
use Doctrine\ORM\EntityManager;

class RegisterModel
{
    public function __construct(EntityManager $entityManager)
    {
        $user = new User();
        $address = new Address();
        $addressType = $this->getDoctrine()->getRepository(AddressType::class)->find(1);
        //\Doctrine\Common\Util\Debug::dump($addressType);
        $address->setAccount($user);
        $address->setAddressType($addressType);
        $user->getAddress()->add($address);
        $user->setRoles(['ROLE_USER']);
    }
}
