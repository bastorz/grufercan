<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\NoticiasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=NoticiasRepository::class)
 */
class Noticias
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    // /**
    //  * @ORM\Column(type="string", length=255)
    //  */
    // private $title;

    // /**
    //  * @ORM\Column(type="text")
    //  */
    // private $subtitle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imgUrl;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\ManyToMany(targetEntity=NoticiasEn::class, mappedBy="id_noticia")
     */
    private $noticiasEn;

    /**
     * @ORM\ManyToMany(targetEntity=NoticiasEs::class, mappedBy="id_noticia")
     */
    private $noticiasEs;

    public function __construct()
    {
        $this->noticiasEn = new ArrayCollection();
        $this->noticiasEs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    // public function getTitle(): ?string
    // {
    //     return $this->title;
    // }

    // public function setTitle(string $title): self
    // {
    //     $this->title = $title;

    //     return $this;
    // }

    // public function getSubtitle(): ?string
    // {
    //     return $this->subtitle;
    // }

    // public function setSubtitle(string $subtitle): self
    // {
    //     $this->subtitle = $subtitle;

    //     return $this;
    // }

    public function getImgUrl(): ?string
    {
        return $this->imgUrl;
    }

    public function setImgUrl(?string $imgUrl): self
    {
        $this->imgUrl = $imgUrl;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Collection|NoticiasEn[]
     */
    public function getNoticiasEn(): Collection
    {
        return $this->noticiasEn;
    }

    public function addNoticiasEn(NoticiasEn $noticiasEn): self
    {
        if (!$this->noticiasEn->contains($noticiasEn)) {
            $this->noticiasEn[] = $noticiasEn;
            $noticiasEn->addIdNoticium($this);
        }

        return $this;
    }

    public function removeNoticiasEn(NoticiasEn $noticiasEn): self
    {
        if ($this->noticiasEn->removeElement($noticiasEn)) {
            $noticiasEn->removeIdNoticium($this);
        }

        return $this;
    }

    /**
     * @return Collection|NoticiasEs[]
     */
    public function getNoticiasEs(): Collection
    {
        return $this->noticiasEs;
    }

    public function addNoticiasE(NoticiasEs $noticiasE): self
    {
        if (!$this->noticiasEs->contains($noticiasE)) {
            $this->noticiasEs[] = $noticiasE;
            $noticiasE->addIdNoticium($this);
        }

        return $this;
    }

    public function removeNoticiasE(NoticiasEs $noticiasE): self
    {
        if ($this->noticiasEs->removeElement($noticiasE)) {
            $noticiasE->removeIdNoticium($this);
        }

        return $this;
    }
}
