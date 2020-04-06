<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="Organisation")
 */
class Organisation
{
    /**
     * @ORM\Id
     * @ORM\Column(name="Id", type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @Assert\NotBlank(message="Enter a name")
     * @ORM\Column(name="Name", type="string")
     */
    protected $name;

    /**
     * @ORM\Column(name="Url", type="string")
     */
    protected $url;

    /**
     * @ORM\Column(name="Description", type="text")
     */
    protected $description;

    /**
     * @ORM\Column(name="TradingTime", type="string")
     */
    protected $tradingTime;

    /**
     * One Organisation has One Account.
     *
     * @ORM\OneToOne(targetEntity="User", inversedBy="organisation")
     * @ORM\JoinColumn(name="UserId", referencedColumnName="Id")
     */
    private $user;

    public function __construct()
    {
        $this->user = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getTradingTime()
    {
        return $this->tradingTime;
    }

    public function setTradingTime($tradingTime)
    {
        $this->tradingTime = $tradingTime;
    }

    /* public function setUser(User $user): User
     {
         $this->user = $user;
         return $user;
     }*/

    public function getUser(): Collection
    {
        return $this->user;
    }
}
