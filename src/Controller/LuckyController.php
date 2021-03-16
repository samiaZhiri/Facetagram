<?php
// src/Controller/LuckyController.php
namespace App\Controller;

#use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class LuckyController extends AbstractController

{
/**
* @Route("/lucky/number")
*/
    public function number()
    {
        $monnumber = random_int(0, 100);

        return $this->render('lucky/number.html.twig', ['number' => $monnumber,]);
    }

/**
* @Route("/parent")
*/
public function mere()
    {
        

        return $this->render('parent.html.twig');#je veux la route /parent
    }


/**
* @Route("/produit")
*/
public function produit()
    {
        

        return $this->render('produit.html.twig');#j'affiche le contenu de produit 
    }
}

