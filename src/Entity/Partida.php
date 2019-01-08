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

}
