<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NchaRepository")
 */
class Ncha
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
    private $nomcha;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomcha(): ?string
    {
        return $this->nomcha;
    }

    public function setNomcha(string $nomcha): self
    {
        $this->nomcha = $nomcha;

        return $this;
    }
}
