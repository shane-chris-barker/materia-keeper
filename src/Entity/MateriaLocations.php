<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MateriaLocationsRepository")
 */
class MateriaLocations
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $materia_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $location_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMateriaId(): ?int
    {
        return $this->materia_id;
    }

    public function setMateriaId(int $materia_id): self
    {
        $this->materia_id = $materia_id;

        return $this;
    }

    public function getLocationId(): ?int
    {
        return $this->location_id;
    }

    public function setLocationId(int $location_id): self
    {
        $this->location_id = $location_id;

        return $this;
    }
}
