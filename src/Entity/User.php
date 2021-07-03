<?php

namespace App\Entity;

use Entity;

class User extends Entity {


    /**
     *  
     *  @var int $codigo;
     *  @var String $nome;
     *  @var String $login;
     *  @var String $senha;
     *  @var int $perfil;
     *  @var int $setor;
     *  @var int $authmethod;
     *  @var Timestamp $datacadastro;
     *  @var Timestamp $ultimoacesso;
     *  @var int $ativo;
     * 
     */

    protected $codigo;
    protected $nome;
    protected $login;
    protected $senha;
    protected $perfil;
    protected $setor;
    protected $authmethod;
    protected $datacadastro;
    protected $ultimoacesso;
    protected $ativo;
}
