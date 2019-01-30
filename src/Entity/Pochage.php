<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PochageRepository")
 */
class Pochage
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
    private $nompochage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNompochage(): ?string
    {
        return $this->nompochage;
    }

    public function setNompochage(string $nompochage): self
    {
        $this->nompochage = $nompochage;

        return $this;
    }
}
