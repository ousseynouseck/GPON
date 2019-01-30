<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GaineGriseRepository")
 */
class GaineGrise
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
    private $nomgg;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomgg(): ?string
    {
        return $this->nomgg;
    }

    public function setNomgg(string $nomgg): self
    {
        $this->nomgg = $nomgg;

        return $this;
    }
}
