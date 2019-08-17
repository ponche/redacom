<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request; 
use App\Entity\Enterprise; 
use App\Form\RequestDevisType; 

class DevisController extends AbstractController
{
    /**
     * @Route("/devis", name="devis")
     */
    public function index(Request $request)
    {
        $devis = new Enterprise(); 

        $form = $this->createForm(RequestDevisType::class, $devis); 

        
        return $this->render('devis/index.html.twig', [
            'controller_name' => 'DevisController',
            'demandeDevis' => $form->createView(), 
        ]);
    }
}
