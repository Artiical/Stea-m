<?php

namespace App\Controller;

use App\Entity\Game;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GameController extends AbstractController
{
    #[Route('/game/{id}', name: 'game_show', requirements: ['id' => '\d+'])]
    public function show(int $id, EntityManagerInterface $em): Response
    {
        $game = $em->getRepository(Game::class)->find($id);
        
        if (!$game) {
            throw $this->createNotFoundException('Ce jeu n\'existe pas');
        }

        // Récupérer des jeux similaires (même genre)
        $similarGames = $em->getRepository(Game::class)->createQueryBuilder('g')
            ->where('g.genre = :genre')
            ->andWhere('g.id != :currentId')
            ->setParameter('genre', $game->getGenre())
            ->setParameter('currentId', $game->getId())
            ->setMaxResults(4)
            ->getQuery()
            ->getResult();

        return $this->render('game/show.html.twig', [
            'game' => $game,
            'similarGames' => $similarGames
        ]);
    }
}
