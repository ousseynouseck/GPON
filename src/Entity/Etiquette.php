<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EtiquetteRepository")
 */
class Etiquette
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
    private $nometq;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNometq(): ?string
    {
        return $this->nometq;
    }

    public function setNometq(string $nometq): self
    {
        $this->nometq = $nometq;

        return $this;
    }
}
