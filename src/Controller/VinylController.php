<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;
class VinylController  extends AbstractController
{
    #[Route("/", name :'app_homepage')]
    public function homepage() : Response
    {
        $tracks = [
            ['song' => 'desolé', 'artist' => 'sexion dassute'],
            ['song' => 'skyfall', 'artist' => 'adele'],
            ['song' => 'cooler than me', 'artist' => 'mike posner'],
            ['song' => 'aerosmith', 'artist' => 'dream on'],
            ['song' => 'formidable', 'artist' => 'stromae'],
            
        ];
    return $this->render('vinyl/homepage.html.twig',[
        'title'=> 'PB & Jams',
        'tracks'=>$tracks,
    ]);
    }
    #[Route('/browse/{slug}',name : 'app_browse')]

    public function browse($slug = null): Response
    {
        $genre  = $slug ? 'Genre: '.u(str_replace('-', ' ', $slug))->title(true):null;

        return $this->render('vinyl/browse.html.twig' , ['genre'=> $genre,
    ]);

    }
}