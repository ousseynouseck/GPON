<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CapaciteCableRepository")
 */
class CapaciteCable
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
    private $nomcapacite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomcapacite(): ?string
    {
        return $this->nomcapacite;
    }

    public function setNomcapacite(string $nomcapacite): self
    {
        $this->nomcapacite = $nomcapacite;

        return $this;
    }
}
