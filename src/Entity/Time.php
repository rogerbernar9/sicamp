<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TimeRepository")
 */
class Time
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    

    private $nome;
    
    /**
     *
     * @var string
     * @ORM\Column(type="string", name="brasao")
     */
    private $escudo;
    
    
    /**
     *
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $ativo = 1;
    
    
    

    public function getId() 
    {
        return $this->id;
    }
    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return string
     */
    public function getEscudo()
    {
        return $this->escudo;
    }

    /**
     * @return boolean
     */
    public function isAtivo()
    {
        return $this->ativo;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param string $escudo
     */
    public function setEscudo($escudo)
    {
        $this->escudo = $escudo;
    }

    /**
     * @param boolean $ativo
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    }

}
