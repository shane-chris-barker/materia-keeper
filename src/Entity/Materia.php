<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MateriaRepository")
 */
class Materia
{

    const MATERIA_TYPES = [
        'command'       => 'Command',
        'independant'   => 'Independant',
        'magic'         => 'Magic',
        'summon'        => 'Summon',
        'support'       => 'Support'
    ];
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
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\ManyToMany(targetEntity = "Locations")
    */
    private $materiaLocations;

    /**
     * @ORM\ManyToMany(targetEntity = "Abilities")
     * @ORM\OrderBy({"required_materia_level" = "ASC"})
    */
    private $materiaAbilities;

    public function __construct()
    {
        $this->materiaLocations = new ArrayCollection();
        $this->materiaAbilities = new ArrayCollection();
    }

    public function getMateriaLocations()
    {
        return $this->materiaLocations;
    }

    public function getMateriaAbilities()
    {
        return $this->materiaAbilities;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getMateriaTypes() : array
    {
        return self::MATERIA_TYPES;
    }
}
