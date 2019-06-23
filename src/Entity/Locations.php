<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LocationsRepository")
 */
class Locations
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
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $x_coordinates;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $y_coordinates;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getXCoordinates(): ?int
    {
        return $this->x_coordinates;
    }

    public function setXCoordinates(?int $x_coordinates): self
    {
        $this->x_coordinates = $x_coordinates;

        return $this;
    }

    public function getYCoordinates(): ?int
    {
        return $this->y_coordinates;
    }

    public function setYCoordinates(?int $y_coordinates): self
    {
        $this->y_coordinates = $y_coordinates;

        return $this;
    }
}
