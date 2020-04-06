<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="AddressType")
 */
class AddressType
{
    /**
     * @ORM\Id
     * @ORM\Column(name="Id", type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @ORM\Column(name="Type", type="string")
     */
    protected $type;
    /**
     * @ORM\OneToMany(targetEntity="Address", mappedBy="addressType", cascade={"persist"})
     */
    private $address;

    public function __construct()
    {
        $this->address = new ArrayCollection();
    }

    public function getAddress(): Collection
    {
        return $this->address;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}
