<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class monProjetController extends AbstractController
{
    /**
     * @Route("/home",name="persos")
     *
     */
    public function home()
    {
        return $this->render('main/home.html.twig',["pseudo" =>"toto",
        "age" =>25 , "carc"=>["force"=>3,"agi"=>2,"intel"=>3]]);
    }

    /**
     * @Route("/accueil",name="accueil")
     */
    public function accueil()
    {
        return $this->render('main/main/index.html.twig');
    }
}