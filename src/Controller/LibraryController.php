<?php

namespace App\Controller;

use App\Entity\Game;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LibraryController extends AbstractController
{
    #[Route('/library', name: 'library_index')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $session = $request->getSession();
        $libraryIds = $session->get('library', []);
        
        $games = [];
        foreach ($libraryIds as $gameId) {
            $game = $em->getRepository(Game::class)->find($gameId);
            if ($game) {
                $games[] = $game;
            }
        }
        
        return $this->render('library/library.html.twig', [
            'games' => $games,
        ]);
    }
}
