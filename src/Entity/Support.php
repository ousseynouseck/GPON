<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SupportRepository")
 */
class Support
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
    private $nomsupport;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomsupport(): ?string
    {
        return $this->nomsupport;
    }

    public function setNomsupport(string $nomsupport): self
    {
        $this->nomsupport = $nomsupport;

        return $this;
    }
}
