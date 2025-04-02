<?php

namespace App\Entity;

use App\Repository\ListaObecnosciRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ListaObecnosciRepository::class)]
class ListaObecnosci
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Imie = null;

    #[ORM\Column(length: 255)]
    private ?string $Nazwisko = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Email = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImie(): ?string
    {
        return $this->Imie;
    }

    public function setImie(string $Imie): static
    {
        $this->Imie = $Imie;

        return $this;
    }

    public function getNazwisko(): ?string
    {
        return $this->Nazwisko;
    }

    public function setNazwisko(string $Nazwisko): static
    {
        $this->Nazwisko = $Nazwisko;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(?string $Email): static
    {
        $this->Email = $Email;

        return $this;
    }
}
