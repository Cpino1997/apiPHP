<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\BestiaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BestiaRepository::class)]
#[ApiResource]
class Bestia
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 25)]
    private ?string $nombre = null;

    #[ORM\Column]
    private ?int $ataque = null;

    #[ORM\Column]
    private ?int $defensa = null;

    #[ORM\Column]
    private ?int $vida = null;

    #[ORM\Column(length: 25)]
    private ?string $tipo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getAtaque(): ?int
    {
        return $this->ataque;
    }

    public function setAtaque(int $ataque): self
    {
        $this->ataque = $ataque;

        return $this;
    }

    public function getDefensa(): ?int
    {
        return $this->defensa;
    }

    public function setDefensa(int $defensa): self
    {
        $this->defensa = $defensa;

        return $this;
    }

    public function getVida(): ?int
    {
        return $this->vida;
    }

    public function setVida(int $vida): self
    {
        $this->vida = $vida;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }
}
