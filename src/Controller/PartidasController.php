<?php

namespace App\Controller;

use App\Entity\Time;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\Entity\Partida;
use Symfony\Component\VarDumper\VarDumper;


class PartidasController extends AbstractController
{
    
    protected $em;
    
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
        
    }
    
    /**
     * @Route("/partidas", name="partidas")
     * @Template("partidas/index.html.twig")
     */
    public function index()
    {
        $partidas = $this->em->getRepository(Partida::class)->getPartidasPorData();
        
        //VarDumper::dump($partidas);
        //exit;
        
        
        return $this->render('partidas/index.html.twig', [
            'controller_name' => 'PartidasController',
        ]);
    }
    
    /**
     * 
     * @param Time $time
     * @Route("/partidas/listar-por-time/{id}", name="listar_partidas")
     * @Template("partidas/listar-por-time.html.twig")
     * @return array
     */
    public function partidasPorTimes(Time $time)
    {
        $partidas = $this->em->getRepository(Partida::class)->getPartidasPorTime($time);
        //VarDumper::dump($partidas);
        return [
            'partidas' => $partidas,
            'time' => $time
        ];
    }
}
