<?php

namespace App\Forms\Models;

use Symfony\Component\Validator\Constraints as Assert;

class LoginRequest
{
    /**
     * @Assert\NotBlank()
     * @Assert\Length(min="10", max="100")
     *
     * @var string
     */
    public $email;
    /**
     * @Assert\NotBlank()
     * @Assert\Length(min="10", max="100")
     *
     * @var string
     */
    public $password;

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $password;
    }
}
