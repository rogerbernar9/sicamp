<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CampeonatoRepository")
 */
class Campeonato
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
     * @var Organizacao
     * @ORM\ManyToOne(targetEntity="App\Entity\Organizacao", inversedBy="campeonatos")
     */
    private $organizacao;
    
    /**
     * 
     * @var Time
     * 
     * @ORM\ManyToMany(targetEntity="App\Entity\Time", inversedBy="campeonatos")
     * @ORM\JoinTable(name="campeonato_time")
     */
    private $times;
    
    /**
     * @var Partida
     * @ORM\OneToMany(targetEntity="App\Entity\Partida", mappedBy="campeonato")
     */
    private $partidas;
    

    

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
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    /**
     * @return \App\Entity\Organizacao
     */
    public function getOrganizacao()
    {
        return $this->organizacao;
    }

    /**
     * @param \App\Entity\Organizacao $organizacao
     */
    public function setOrganizacao($organizacao)
    {
        $this->organizacao = $organizacao;
    }
    /**
     * @return Time
     */
    public function getTimes()
    {
        return $this->times;
    }

    /**
     * @param Time $times
     * @return Campeonato
     */
    public function setTimes($times)
    {
        $this->times = $times;
    }
    /**
     * @return \App\Entity\Partida $partidas
     */
    public function getPartidas()
    {
        return $this->partidas;
    }

    /**
     * @param Partida $partidas
     * 
     */
    public function setPartidas($partidas)
    {
        $this->partidas = $partidas;
    }


}
