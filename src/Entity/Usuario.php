<?php

namespace App\Entity;

use App\Repository\UsuarioRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsuarioRepository::class)
 */
class Usuario {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $codigo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $senha;


    /**
     * @ORM\Column(type="integer")
     */
    private $ativo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datacadastro;

    /**
     * @ORM\ManyToMany(targetEntity=Perfil::class, inversedBy="usuarios")
     */
    private $perfil;

    public function __construct()
    {
        $this->perfil = new ArrayCollection();
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getCodigo(): ?int {
        return $this->codigo;
    }

    public function setCodigo(int $codigo): self {
        $this->codigo = $codigo;

        return $this;
    }

    public function getNome(): ?string {
        return $this->nome;
    }

    public function setNome(string $nome): self {
        $this->nome = $nome;

        return $this;
    }

    public function getLogin(): ?string {
        return $this->login;
    }

    public function setLogin(string $login): self {
        $this->login = $login;

        return $this;
    }

    public function getSenha(): ?string {
        return $this->senha;
    }

    public function setSenha(string $senha): self {
        $this->senha = $senha;

        return $this;
    }



    public function getAtivo(): ?int {
        return $this->ativo;
    }

    public function setAtivo(int $ativo): self {
        $this->ativo = $ativo;

        return $this;
    }

    public function getDatacadastro(): ?\DateTimeInterface {
        return $this->datacadastro;
    }

    public function setDatacadastro(\DateTimeInterface $datacadastro): self {
        $this->datacadastro = $datacadastro;

        return $this;
    }

    /**
     * @return Collection|Perfil[]
     */
    public function getPerfil(): Collection
    {
        return $this->perfil;
    }

    public function addPerfil(Perfil $perfil): self
    {
        if (!$this->perfil->contains($perfil)) {
            $this->perfil[] = $perfil;
        }

        return $this;
    }

    public function removePerfil(Perfil $perfil): self
    {
        $this->perfil->removeElement($perfil);

        return $this;
    }
}
