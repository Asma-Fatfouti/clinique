<?php

namespace App\Entity;

use App\Repository\MedecinsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MedecinsRepository::class)]
class Medecins
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_med = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;


    #[ORM\ManyToOne(inversedBy: 'medecins')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Services $serv = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMed(): ?string
    {
        return $this->nom_med;
    }

    public function setNomMed(string $nom_med): static
    {
        $this->nom_med = $nom_med;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getServ(): ?Services
    {
        return $this->serv;
    }

    public function setServ(?Services $serv): static
    {
        $this->serv = $serv;

        return $this;
    }
}
