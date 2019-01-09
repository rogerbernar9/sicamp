<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PartidaRepository")
 */
class Partida
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
     * @ORM\Column(type="text")
     */
    private $descricao;
    
    /**
     *
     * @var integer
     * @ORM\Column(type="string")
     */
    private $placar_visitante;

    /**
     *
     * @var integer
     * @ORM\Column(type="string")
     */
    private $placar_casa;

    /**
     * 
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    private $data_partida;

    
    /**
     *
     * @var Campeonato
     * @ORM\ManyToOne(targetEntity="App\Entity\Campeonato")
     */    
    private $campeonato;
    
    
    /**
     *
     * @var Time
     * @ORM\ManyToOne(targetEntity="App\Entity\Time", inversedBy="partidas_casa")
     */  
    private $time_casa;
    
    /**
     *
     * @var Time
     * @ORM\ManyToOne(targetEntity="App\Entity\Time", inversedBy="partidas_visitante")
     */
    private $time_visitante;
    
    
    public function getId()
    {
        return $this->id;
    }
    /**
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @return number
     */
    public function getPlacarVisitante()
    {
        return $this->placar_visitante;
    }

    /**
     * @return number
     */
    public function getPlacarCasa()
    {
        return $this->placar_casa;
    }

    /**
     * @return \DateTime
     */
    public function getDataPartida()
    {
        return $this->data_partida;
    }

    /**
     * @param string $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @param number $placar_visitante
     */
    public function setPlacarVisitante($placar_visitante)
    {
        $this->placar_visitante = $placar_visitante;
    }

    /**
     * @param number $placar_casa
     * @return Partida
     */
    public function setPlacarCasa($placar_casa)
    {
        $this->placar_casa = $placar_casa;
    }

    /**
     * @param \DateTime $data_partida
     */
    public function setDataPartida($data_partida)
    {
        $this->data_partida = $data_partida;
    }
    /**
     * @return \App\Entity\Campeonato
     */
    public function getCampeonato()
    {
        return $this->campeonato;
    }

    /**
     * @param \App\Entity\Campeonato $campeonato
     */
    public function setCampeonato($campeonato)
    {
        $this->campeonato = $campeonato;
    }
    /**
     * @return \App\Entity\Time
     */
    public function getTimeCasa()
    {
        return $this->time_casa;
    }

    /**
     * @return \App\Entity\Time
     */
    public function getTimeVisitante()
    {
        return $this->time_visitante;
    }

    /**
     * @param \App\Entity\Time $time_casa
     */
    public function setTimeCasa($time_casa)
    {
        $this->time_casa = $time_casa;
    }

    /**
     * @param \App\Entity\Time $time_visitante
     */
    public function setTimeVisitante($time_visitante)
    {
        $this->time_visitante = $time_visitante;
    }



}
