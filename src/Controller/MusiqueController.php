<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MusiqueController extends AbstractController{
    #[Route('/musiques/{id?}/{slug?}')]

    public function musique($id, $slug){
        $artistes = [
            'artistes' => [
                "safarel",
                "Debordo",
                "Gadji Celi"
            ]
        ];

        return $this->render("/musique/musique.html.twig", $artistes);
    }
}
