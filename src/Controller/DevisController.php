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
    public function index(Request $request, \Swift_Mailer $mailer)
    {
        $devis = new Enterprise();

        $form = $this->createForm(RequestDevisType::class, $devis);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($devis);

            $manager->flush();


            // send a mail to administrator 
            $message = new \Swift_Message('Hello Email');
            $message
                ->setFrom('hello@remi-ponche.fr')
                ->setTo('ponche62880@gmail.com')
                ->setBody(
                    $this->renderView(
                        'mail/confirmDevis.html.twig',
                        [
                            'info' => $devis,
                        ]
                    ),
                    'text/html'
                );

            $mailer->send($message);



            // render the template succes 

            return $this->render('devis/success.html.twig');
        }


        return $this->render('devis/index.html.twig', [
            'demandeDevis' => $form->createView(),
        ]);
    }
}
