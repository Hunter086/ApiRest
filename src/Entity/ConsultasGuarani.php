<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ConsultasGuaraniRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * 
 * @ORM\Entity(repositoryClass=ConsultasGuaraniRepository::class)
 */
class ConsultasGuarani
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $tipodeconsulta;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $usuario;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $ip;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipodeconsulta(): ?string
    {
        return $this->tipodeconsulta;
    }

    public function setTipodeconsulta(string $tipodeconsulta): self
    {
        $this->tipodeconsulta = $tipodeconsulta;

        return $this;
    }

    public function getUsuario(): ?string
    {
        return $this->usuario;
    }

    public function setUsuario(string $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }
}
