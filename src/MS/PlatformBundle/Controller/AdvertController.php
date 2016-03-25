<?php

// src/MS/PlatformBundle/Controller/AdvertController.php

namespace MS\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('MSPlatformBundle:Advert:index.html.twig', array('nom' => 'winzou', 'advert_id' => 1));
		return new Response($content);
    }

    public function viewAction($id)
    {
        return new Response("Affichage de l'annonce d'id : ".$id);
    }

    public function viewSlugAction($slug, $year, $_format)
    {
        return new Response("On pourrait afficher l'annonce correspondant au

            slug '".$slug."', créée en ".$year." et au format ".$_format.".");
    }

}