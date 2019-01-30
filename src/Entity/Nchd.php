<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NchdRepository")
 */
class Nchd
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
    private $nomchd;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomchd(): ?string
    {
        return $this->nomchd;
    }

    public function setNomchd(string $nomchd): self
    {
        $this->nomchd = $nomchd;

        return $this;
    }
}
