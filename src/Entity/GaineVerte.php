<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GaineVerteRepository")
 */
class GaineVerte
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
    private $nomgv;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomgv(): ?string
    {
        return $this->nomgv;
    }

    public function setNomgv(string $nomgv): self
    {
        $this->nomgv = $nomgv;

        return $this;
    }
}
