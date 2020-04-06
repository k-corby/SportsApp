<?php

namespace App\Forms\Models;

use Symfony\Component\Validator\Constraints as Assert;

class AccountRequest
{
    /**
     * @Assert\NotBlank(message="Get creative and think of a name!")
     * @Assert\Length(min="10", max="100")
     *
     * @var string
     */
    public $firstName;
    /**
     * @Assert\NotBlank()
     * @Assert\Length(min="10", max="100")
     *
     * @var string
     */
    public $lastName;
    /**
     * @Assert\NotBlank()
     * @Assert\Length(min="10", max="100")
     *
     * @var string
     */
    public $phoneNumber;
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


}
