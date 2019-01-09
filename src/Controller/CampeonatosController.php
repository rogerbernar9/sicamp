<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Campeonato;

class CampeonatosController extends AbstractController
{
    
    protected $em;
    
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
        
    }
    
    /**
     * @Route("/campeonatos", name="campeonatos")
     * @Template("campeonatos/index.html.twig")
     */
    public function index()
    {
        $campeonatos = $this->em->getRepository(Campeonato::class)->getAllCampeonatos();

        return [
            'campeonatos' => $campeonatos
        ];
    }
}
