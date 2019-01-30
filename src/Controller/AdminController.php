<?php

namespace App\Controller;

use App\Entity\Autres;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(SessionInterface $session)
    {
        
        $session= $this->getDoctrine()->getRepository(Autres::class)->findAll();

        return $this->render('admin/index.html.twig', [
            'autres' => $session,
        ]);
        
    }
}
