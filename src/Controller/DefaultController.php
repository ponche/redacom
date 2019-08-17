<?php

namespace App\Controller; 

use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\Routing\Annotation\Route; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; 

class DefaultController extends AbstractController 
{
    
    public function index()
    {
        return $this->render('base.html.twig'); 
    }

    /**
     * @Route("/services")
     */
    public function services()
    {
        return $this->render('main/service.html.twig'); 
    }
    
    /**
     * @Route("/agence")
     */
    public function agence()
    {
        return $this->render('main/agence.html.twig'); 
    }

    

    /** 
     * @Route("/article")
     */
    public function article()
    {
        return $this-render('main/article.html.twig'); 
    }
}