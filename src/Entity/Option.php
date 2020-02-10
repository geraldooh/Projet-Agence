<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OptionRepository")
 */
class Option
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
    private $nom;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Biens", mappedBy="options")
     */
    private $biens;

    public function __construct()
    {
        $this->biens = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection|biens[]
     */
    public function getBiens(): Collection
    {
        return $this->biens;
    }

    public function addBien(biens $bien): self
    {
        if (!$this->biens->contains($bien)) {
            $this->biens[] = $bien;
        }

        return $this;
    }

    public function removeBien(biens $bien): self
    {
        if ($this->biens->contains($bien)) {
            $this->biens->removeElement($bien);
        }

        return $this;
    }
}
