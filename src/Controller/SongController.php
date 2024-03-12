<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{   
    #[Route('/api/songs/{id<\d+>}',methods: ['GET'],name: 'api_songs_get_one')]

    public function getSong(int $id, LoggerInterface $logger):Response
    {
        $songs = [
            1 => ['name' => 'Désolé', 'url' => '/audio/Désolé.mp3'],
            2 => ['name' => 'skyfall', 'url' => '/audio/Adele - Skyfall (Official Lyric Video).mp3'],
            3 => ['name' => 'Mike Posner - Cooler Than Me', 'url' => '/audio/Mike Posner - Cooler Than Me.mp3'],
            4 => ['name' => 'Aerosmith - Dream On (Audio)', 'url' => '/audio/Aerosmith - Dream On (Audio).mp3'],
            5 => ['name' => 'Formidable', 'url' => '/audio/Formidable.mp3'],
           
            
        ];

        
        return $this->json($songs[$id]);
    }

}