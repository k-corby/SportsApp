<?php

// src/Repository/ProductRepository.php

namespace App\Services;

use App\Repository\UserRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

class UserService extends ServiceEntityRepository
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUser()
    {
        return $this->userRepository->getAllUser();
    }

    public function addUser($model)
    {
        $this->userRepository->addUser($model);
    }

    public function getUser($id)
    {
        return $this->userRepository->getUser($id);
    }
}
