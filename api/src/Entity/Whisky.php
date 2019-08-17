<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\WhiskyRepository")
 */
class Whisky
{
    /**
     * @var int The id of this whisky.
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string The name of this whisky.
     *
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @var string The country of this whisky.
     *
     * @ORM\Column(type="string", length=255)
     */
    private $country;

    /**
     * @var string The region of this whisky.
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $region;

    /**
     * @var integer The abv of this whisky.
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $abv;

    /**
     * @var integer The age of this whisky.
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $age;

    /**
     * @var string The distillery of this whisky.
     *
     * @ORM\Column(type="string", length=255)
     */
    private $distillery;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Review", mappedBy="whisky", orphanRemoval=true)
     */
    private $reviews;

    public function __construct()
    {
        $this->reviews = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getAbv(): ?int
    {
        return $this->abv;
    }

    public function setAbv(?int $abv): self
    {
        $this->abv = $abv;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getDistillery(): ?string
    {
        return $this->distillery;
    }

    public function setDistillery(string $distillery): self
    {
        $this->distillery = $distillery;

        return $this;
    }

    /**
     * @return Collection|Review[]
     */
    public function getReviews(): Collection
    {
        return $this->reviews;
    }

    public function addReview(Review $review): self
    {
        if (!$this->reviews->contains($review)) {
            $this->reviews[] = $review;
            $review->setWhisky($this);
        }

        return $this;
    }

    public function removeReview(Review $review): self
    {
        if ($this->reviews->contains($review)) {
            $this->reviews->removeElement($review);
            // set the owning side to null (unless already changed)
            if ($review->getWhisky() === $this) {
                $review->setWhisky(null);
            }
        }

        return $this;
    }
}
