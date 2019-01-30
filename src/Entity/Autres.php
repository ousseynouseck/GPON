<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AutresRepository")
 */
class Autres
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $bmd;

    /**
     * @ORM\Column(type="integer")
     */
    private $bma;

    /**
     * @ORM\Column(type="integer")
     */
    private $longueurtirage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $eql;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $zoneblocage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $actions;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numerocoupleur;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $commentaires;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Blocage")
     * @ORM\JoinColumn(nullable=false)
     */
    private $blocages;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Central")
     * @ORM\JoinColumn(nullable=false)
     */
    private $centrales;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Etiquette")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etiquettes;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\GaineGalvar")
     * @ORM\JoinColumn(nullable=false)
     */
    private $gainegalvars;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\GaineGrise")
     * @ORM\JoinColumn(nullable=false)
     */
    private $gainegrise;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\GaineVerte")
     * @ORM\JoinColumn(nullable=false)
     */
    private $gainevertes;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ncha")
     * @ORM\JoinColumn(nullable=false)
     */
    private $nchas;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Nchd")
     * @ORM\JoinColumn(nullable=false)
     */
    private $nchads;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pochage")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pochages;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Statut")
     * @ORM\JoinColumn(nullable=false)
     */
    private $statuts;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TypeBoite")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeboites;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TypeCable")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typecables;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TypeTirage")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typetirages;

    /**
     * @ORM\Column(type="date")
     */
    private $CreatedAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CapaciteCable")
     * @ORM\JoinColumn(nullable=false)
     */
    private $capacitecables;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Support")
     */
    private $port;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Nomsr")
     */
    private $items;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    private $userid;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="autres")
     */
    private $user;

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBmd(): ?int
    {
        return $this->bmd;
    }

    public function setBmd(int $bmd): self
    {
        $this->bmd = $bmd;

        return $this;
    }

    public function getBma(): ?int
    {
        return $this->bma;
    }

    public function setBma(int $bma): self
    {
        $this->bma = $bma;

        return $this;
    }

    public function getLongueurtirage(): ?int
    {
        return $this->longueurtirage;
    }

    public function setLongueurtirage(int $longueurtirage): self
    {
        $this->longueurtirage = $longueurtirage;

        return $this;
    }

    public function getEql(): ?string
    {
        return $this->eql;
    }

    public function setEql(?string $eql): self
    {
        $this->eql = $eql;

        return $this;
    }

    public function getZoneblocage(): ?string
    {
        return $this->zoneblocage;
    }

    public function setZoneblocage(string $zoneblocage): self
    {
        $this->zoneblocage = $zoneblocage;

        return $this;
    }

    public function getActions(): ?string
    {
        return $this->actions;
    }

    public function setActions(?string $actions): self
    {
        $this->actions = $actions;

        return $this;
    }

    public function getNumerocoupleur(): ?string
    {
        return $this->numerocoupleur;
    }

    public function setNumerocoupleur(?string $numerocoupleur): self
    {
        $this->numerocoupleur = $numerocoupleur;

        return $this;
    }

    public function getCommentaires(): ?string
    {
        return $this->commentaires;
    }

    public function setCommentaires(?string $commentaires): self
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    public function getBlocages(): ?Blocage
    {
        return $this->blocages;
    }

    public function setBlocages(?Blocage $blocages): self
    {
        $this->blocages = $blocages;

        return $this;
    }

    public function getCentrales(): ?Central
    {
        return $this->centrales;
    }

    public function setCentrales(?Central $centrales): self
    {
        $this->centrales = $centrales;

        return $this;
    }

    public function getEtiquettes(): ?Etiquette
    {
        return $this->etiquettes;
    }

    public function setEtiquettes(?Etiquette $etiquettes): self
    {
        $this->etiquettes = $etiquettes;

        return $this;
    }

    public function getGainegalvars(): ?GaineGalvar
    {
        return $this->gainegalvars;
    }

    public function setGainegalvars(?GaineGalvar $gainegalvars): self
    {
        $this->gainegalvars = $gainegalvars;

        return $this;
    }

    public function getGainegrise(): ?GaineGrise
    {
        return $this->gainegrise;
    }

    public function setGainegrise(?GaineGrise $gainegrise): self
    {
        $this->gainegrise = $gainegrise;

        return $this;
    }

    public function getGainevertes(): ?GaineVerte
    {
        return $this->gainevertes;
    }

    public function setGainevertes(?GaineVerte $gainevertes): self
    {
        $this->gainevertes = $gainevertes;

        return $this;
    }

    public function getNchas(): ?Ncha
    {
        return $this->nchas;
    }

    public function setNchas(?Ncha $nchas): self
    {
        $this->nchas = $nchas;

        return $this;
    }

    public function getNchads(): ?Nchd
    {
        return $this->nchads;
    }

    public function setNchads(?Nchd $nchads): self
    {
        $this->nchads = $nchads;

        return $this;
    }

    public function getPochages(): ?Pochage
    {
        return $this->pochages;
    }

    public function setPochages(?Pochage $pochages): self
    {
        $this->pochages = $pochages;

        return $this;
    }

    public function getStatuts(): ?Statut
    {
        return $this->statuts;
    }

    public function setStatuts(?Statut $statuts): self
    {
        $this->statuts = $statuts;

        return $this;
    }

    public function getTypeboites(): ?TypeBoite
    {
        return $this->typeboites;
    }

    public function setTypeboites(?TypeBoite $typeboites): self
    {
        $this->typeboites = $typeboites;

        return $this;
    }

    public function getTypecables(): ?TypeCable
    {
        return $this->typecables;
    }

    public function setTypecables(?TypeCable $typecables): self
    {
        $this->typecables = $typecables;

        return $this;
    }

    public function getTypetirages(): ?TypeTirage
    {
        return $this->typetirages;
    }

    public function setTypetirages(?TypeTirage $typetirages): self
    {
        $this->typetirages = $typetirages;

        return $this;
    }

    public function getCreatedAt()
      {
        return $this->CreatedAt;
    }

    public function setCreatedAt($CreatedAt): self
    {
        $this->CreatedAt = $CreatedAt;

        return $this;
    }

    public function getCapacitecables(): ?CapaciteCable
    {
        return $this->capacitecables;
    }

    public function setCapacitecables(?CapaciteCable $capacitecables): self
    {
        $this->capacitecables = $capacitecables;

        return $this;
    }

    public function getPort(): ?Support
    {
        return $this->port;
    }

    public function setPort(?Support $port): self
    {
        $this->port = $port;

        return $this;
    }

    public function getItems(): ?Nomsr
    {
        return $this->items;
    }

    public function setItems(?Nomsr $items): self
    {
        $this->items = $items;

        return $this;
    }

    public function getUserid(): ?User
    {
        return $this->userid;
    }

    public function setUserid(?User $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

 
}
