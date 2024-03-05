<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route ("/{locale}", 
    *   defaults={
    *       "locale": "fr",
    *   },
    *   requirements={
    *       "locale": "en|fr",
    *   },
     * name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }


    /**
     * @Route ("/about", 
    *   defaults={
    *       "locale": "fr",
    *   },
    *   requirements={
    *       "locale": "en|fr",
    *   },
     * name="about")
     */
    public function aboutAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/about.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route ("/dons", 
    *   defaults={
    *       "locale": "fr",
    *   },
    *   requirements={
    *       "locale": "en|fr",
    *   },
     * name="dons")
     */
    public function donsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/dons.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route ("/beneficiaires", 
    *   defaults={
    *       "locale": "fr",
    *   },
    *   requirements={
    *       "locale": "en|fr",
    *   },
     * name="beneficiaires")
     */
    public function beneficiairesAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/beneficiaires.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route ("/contact", 
    *   defaults={
    *       "locale": "fr",
    *   },
    *   requirements={
    *       "locale": "en|fr",
    *   },
     * name="contact")
     */
    public function contactAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/contact.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route ("/formations", 
    *   defaults={
    *       "locale": "fr",
    *   },
    *   requirements={
    *       "locale": "en|fr",
    *   },
     * name="formations")
     */
    public function formationsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/formations.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route ("/marketingsocial", 
    *   defaults={
    *       "locale": "fr",
    *   },
    *   requirements={
    *       "locale": "en|fr",
    *   },
     * name="marketingsocial")
     */
    public function marketingsocialAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/marketingsocial.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route ("/solardjangui", 
    *   defaults={
    *       "locale": "fr",
    *   },
    *   requirements={
    *       "locale": "en|fr",
    *   },
     * name="solardjangui")
     */
    public function solardjanguiAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/solardjangui.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

}
