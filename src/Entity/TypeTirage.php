<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TypeTirageRepository")
 */
class TypeTirage
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
    private $nomtypt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomtypt(): ?string
    {
        return $this->nomtypt;
    }

    public function setNomtypt(string $nomtypt): self
    {
        $this->nomtypt = $nomtypt;

        return $this;
    }
}
