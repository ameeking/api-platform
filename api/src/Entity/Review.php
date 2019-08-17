<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ReviewRepository")
 */
class Review
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $author;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Whisky", inversedBy="reviews")
     * @ORM\JoinColumn(nullable=false)
     */
    private $whisky;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $taste;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nose;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getWhisky(): ?Whisky
    {
        return $this->whisky;
    }

    public function setWhisky(?Whisky $whisky): self
    {
        $this->whisky = $whisky;

        return $this;
    }

    public function getTaste(): ?string
    {
        return $this->taste;
    }

    public function setTaste(?string $taste): self
    {
        $this->taste = $taste;

        return $this;
    }

    public function getNose(): ?string
    {
        return $this->nose;
    }

    public function setNose(?string $nose): self
    {
        $this->nose = $nose;

        return $this;
    }
}
