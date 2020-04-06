<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="News")
 * @ORM\Entity(repositoryClass="App\Services\NewsService")
 */
class News
{
    /**
     * @ORM\Id
     * @ORM\Column(name="Id", type="integer")
     * @ORM\GeneratedValue
     */
    protected $Id;
    /**
     * @ORM\Column(name="Title", type="string")
     */
    protected $Title;
    /**
     * @ORM\Column(name="Description", type="text")
     */
    protected $Description;
    /**
     * @ORM\Column(name="Date", type="date")
     */
    protected $Date;
    /**
     * @ORM\Column(name="Image", type="string", nullable=true)
     */
    protected $Image;

    public function getId()
    {
        return $this->Id;
    }

    public function getTitle()
    {
        return $this->Title;
    }

    public function setTitle($Title)
    {
        $this->Title = $Title;
    }

    public function getDescription()
    {
        return $this->Description;
    }

    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

    public function getDate()
    {
        return $this->Date;
    }

    public function setDate($Date)
    {
        $this->Date = $Date;
    }

    public function getImage()
    {
        return $this->Image;
    }

    public function setImage($Image)
    {
        $this->Image = $Image;
    }
}
