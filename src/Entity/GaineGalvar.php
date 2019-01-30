<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GaineGalvarRepository")
 */
class GaineGalvar
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
    private $nomggv;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomggv(): ?string
    {
        return $this->nomggv;
    }

    public function setNomggv(string $nomggv): self
    {
        $this->nomggv = $nomggv;

        return $this;
    }
}
