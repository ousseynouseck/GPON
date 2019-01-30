<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BlocageRepository")
 */
class Blocage
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
    private $nomblocage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomblocage(): ?string
    {
        return $this->nomblocage;
    }

    public function setNomblocage(string $nomblocage): self
    {
        $this->nomblocage = $nomblocage;

        return $this;
    }
}
