<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NomsrRepository")
 */
class Nomsr
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
    private $noms;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Central")
     * @ORM\JoinColumn(nullable=false)
     */
    private $items;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNoms(): ?string
    {
        return $this->noms;
    }

    public function setNoms(string $noms): self
    {
        $this->noms = $noms;

        return $this;
    }

    public function getItems(): ?Central
    {
        return $this->items;
    }

    public function setItems(?Central $items): self
    {
        $this->items = $items;

        return $this;
    }
}
