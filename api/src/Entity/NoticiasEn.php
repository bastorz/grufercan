<?php

namespace App\Entity;

use App\Repository\NoticiasEnRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NoticiasEnRepository::class)
 */
class NoticiasEn
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $subtitle;

    /**
     * @ORM\ManyToMany(targetEntity=Noticias::class, inversedBy="noticiasEn")
     */
    private $id_noticia;

    public function __construct()
    {
        $this->id_noticia = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(string $subtitle): self
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * @return Collection|Noticias[]
     */
    public function getIdNoticia(): Collection
    {
        return $this->id_noticia;
    }

    public function addIdNoticium(Noticias $idNoticium): self
    {
        if (!$this->id_noticia->contains($idNoticium)) {
            $this->id_noticia[] = $idNoticium;
        }

        return $this;
    }

    public function removeIdNoticium(Noticias $idNoticium): self
    {
        $this->id_noticia->removeElement($idNoticium);

        return $this;
    }
}
