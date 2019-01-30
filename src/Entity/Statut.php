<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StatutRepository")
 */
class Statut
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
    private $nomstatut;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomstatut(): ?string
    {
        return $this->nomstatut;
    }

    public function setNomstatut(string $nomstatut): self
    {
        $this->nomstatut = $nomstatut;

        return $this;
    }
}
