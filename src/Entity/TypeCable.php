<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TypeCableRepository")
 */
class TypeCable
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
    private $nomtypec;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomtypec(): ?string
    {
        return $this->nomtypec;
    }

    public function setNomtypec(string $nomtypec): self
    {
        $this->nomtypec = $nomtypec;

        return $this;
    }
}
