<?php

namespace App\Entity;

use App\Repository\PrezentyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PrezentyRepository::class)]
class Prezenty
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nazwa = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Link = null;

    #[ORM\Column]
    private ?bool $zarezerwowany = null;

    #[ORM\Column(length: 255)]
    private ?string $rezerwujacy = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNazwa(): ?string
    {
        return $this->Nazwa;
    }

    public function setNazwa(string $Nazwa): static
    {
        $this->Nazwa = $Nazwa;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->Link;
    }

    public function setLink(?string $Link): static
    {
        $this->Link = $Link;

        return $this;
    }

    public function isZarezerwowany(): ?bool
    {
        return $this->zarezerwowany;
    }

    public function setZarezerwowany(bool $zarezerwowany): static
    {
        $this->zarezerwowany = $zarezerwowany;

        return $this;
    }

    public function getRezerwujacy(): ?string
    {
        return $this->rezerwujacy;
    }

    public function setRezerwujacy(string $rezerwujacy): static
    {
        $this->rezerwujacy = $rezerwujacy;

        return $this;
    }
}
