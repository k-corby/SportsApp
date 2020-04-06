<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Address")
 */
class Address
{
    /**
     * @ORM\Id
     * @ORM\Column(name="Id", type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(name="Number", type="string")
     */
    protected $number;

    /**
     * @ORM\Column(name="StreetName", type="string")
     */
    protected $streetName;

    /**
     * @ORM\Column(name="Suburb", type="string")
     */
    protected $suburb;

    /**
     * @ORM\Column(name="Postcode", type="integer")
     */
    protected $postcode;

    /**
     * @ORM\Column(name="State", type="string")
     */
    protected $state;

    /**
     * Many Addresses has one Accounts.
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="address")
     * @ORM\JoinColumn(name="UserId", referencedColumnName="Id")
     */
    public $user;

    /**
     * Many Addresses has one AddressType.
     *
     * @ORM\ManyToOne(targetEntity="AddressType", inversedBy="address", cascade={"persist"})
     * @ORM\JoinColumn(name="AddressTypeId", referencedColumnName="Id")
     */
    public $addressType;


    public function __construct()
    {
        $this->addressType = new ArrayCollection();
        $this->user = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getStreetName()
    {
        return $this->streetName;
    }

    public function setStreetName($streetNumber)
    {
        $this->streetName = $streetNumber;
    }

    public function getSuburb()
    {
        return $this->suburb;
    }

    public function setSuburb($suburb)
    {
        $this->suburb = $suburb;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getPostcode()
    {
        return $this->postcode;
    }

    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getAddressType(): AddressType
    {
        return $this->addressType;
    }

    public function setAddressType(AddressType $addressType): self
    {
        $this->addressType = $addressType;

        return $this;
    }

    /*public function getAddressTypes(): Collection
    {
        return $this->addressType;
    }*/
}
