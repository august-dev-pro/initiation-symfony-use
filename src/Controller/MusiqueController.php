<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class MusiqueController{
    #[Route('/musiques/{id?}/{slug?}')]

    public function musique($id, $slug){
        if ($id && $slug) {
            die("voici la muqique avec l'id $id et le slug $slug");
        }else {
            die("toutes les musiques");
        }
    }
}
