<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MateriaAbilitiesRepository")
 */
class MateriaAbilities
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
    private $abilities_id;

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

    public function getAbilitiesId(): ?int
    {
        return $this->abilities_id;
    }

    public function setAbilitiesId(int $abilities_id): self
    {
        $this->abilities_id = $abilities_id;

        return $this;
    }
}
