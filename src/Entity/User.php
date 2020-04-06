<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Table(name="User")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(name="Id", type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @ORM\Column(name="Email", type="string")
     */
    protected $email;
    /**
     * @ORM\Column(name="FirstName", type="string")
     */
    protected $firstName;

    /**
     * @ORM\Column(name="LastName", type="string")
     */
    protected $lastName;
    /**
     * @ORM\Column(name="PhoneNumber", type="string")
     */
    protected $phoneNumber;
    /**
     * @ORM\Column(name="Password", type="string")
     */
    protected $password;
    /**
     * @ORM\Column(name="Roles", type="json")
     */
    private $roles = [];
    /**
     * Many Account has one AccountType.
     *
     * @ORM\ManyToOne(targetEntity="Roles", inversedBy="user")
     * @ORM\JoinColumn(name="RoleId", referencedColumnName="Id")
     */
    private $role;
    /**
     * @ORM\OneToMany(targetEntity="Address", mappedBy="user", cascade={"persist"})
     */
    private $address;
    /**
     * @ORM\OneToMany(targetEntity="Child", mappedBy="user", cascade={"persist"})
     */
    private $child;

    /**
     * @ORM\OneToOne(targetEntity="Organisation", mappedBy="user", cascade={"persist"})
     */
    private $organisation;

    public function __construct()
    {
        $this->role = new ArrayCollection();
        $this->address = new ArrayCollection();
        $this->child = new ArrayCollection();
        $this->organisation = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getRole(): Roles
    {
        return $this->role;
    }

    public function setRoleType(Roles $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getAddress(): Collection
    {
        return $this->address;
    }

    public function getOrganisation(): Collection
    {
        return $this->organisation;
    }

    public function getChild(): Collection
    {
        return $this->child;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        //$roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = 'ROLE_USER';

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * {@inheritdoc}
     */
    public function serialize()
    {
        // TODO: Implement serialize() method.
    }

    /**
     * {@inheritdoc}
     */
    public function unserialize($serialized)
    {
        // TODO: Implement unserialize() method.
    }
}
