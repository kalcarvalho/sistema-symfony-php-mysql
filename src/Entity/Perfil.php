<?php

namespace App\Entity;

use App\Repository\PerfilRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PerfilRepository::class)
 */
class Perfil {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", unique=true)
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descricao;

    /**
     * @ORM\ManyToMany(targetEntity=Usuario::class, mappedBy="perfil")
     */
    private $usuarios;

    public function __construct() {
        $this->usuarios = new ArrayCollection();
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getDescricao(): ?string {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * @return Collection|Usuario[]
     */
    public function getUsuarios(): Collection {
        return $this->usuarios;
    }

    public function addUsuario(Usuario $usuario): self {
        if (!$this->usuarios->contains($usuario)) {
            $this->usuarios[] = $usuario;
            $usuario->addPerfil($this);
        }

        return $this;
    }

    public function removeUsuario(Usuario $usuario): self {
        if ($this->usuarios->removeElement($usuario)) {
            $usuario->removePerfil($this);
        }

        return $this;
    }
}
