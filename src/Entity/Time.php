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
    
    /**
     *
     * @var string
     * @ORM\Column(type="string")
     */
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
    
    /**
     * @var Campeonato
     * 
     * @ORM\ManyToMany(targetEntity="App\Entity\Campeonato", mappedBy="times")
     */
    private $campeonatos;
    
    
    /**
     * 
     * @var Partida
     * 
     * @ORM\OneToMany(targetEntity="App\Entity\Partida", mappedBy="time_casa")
     */
    private $partidas_casa;

    
    /**
     *
     * @var Partida
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Partida", mappedBy="time_visitante")
     */
    private $partidas_visitante;
    
    
    

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
    /**
     * @return Campeonato
     */
    public function getCampeonatos()
    {
        return $this->campeonatos;
    }

    /**
     * @param Campeonato $campeonatos
     * @return Time
     */
    public function setCampeonatos($campeonatos)
    {
        $this->campeonatos = $campeonatos;
    }
    /**
     * @return Partida
     */
    public function getPartidaCasa()
    {
        return $this->partidas_casa;
    }

    /**
     * @return Partida
     */
    public function getPartidaVisitante()
    {
        return $this->partidas_visitante;
    }

    /**
     * @param $partida_casa
     */
    public function setPartidaCasa($partida_casa)
    {
        $this->partidas_casa = $partida_casa;
    }

    /**
     * @param $partida_visitante
     */
    public function setPartidaVisitante($partida_visitante)
    {
        $this->partidas_visitante = $partida_visitante;
    }



}
