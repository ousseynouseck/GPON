<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TypeBoiteRepository")
 */
class TypeBoite
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
    private $nomtypeb;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomtypeb(): ?string
    {
        return $this->nomtypeb;
    }

    public function setNomtypeb(string $nomtypeb): self
    {
        $this->nomtypeb = $nomtypeb;

        return $this;
    }
}
