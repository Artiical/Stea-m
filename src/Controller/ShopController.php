<?php

namespace App\Controller;

use App\Entity\Game;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ShopController extends AbstractController
{
    #[Route('/shop', name: 'shop_index')]
    public function index(EntityManagerInterface $em): Response
    {
        $games = $em->getRepository(Game::class)->findAll();
        return $this->render('shop/shop.html.twig', [
            'games' => $games,
        ]);
    }
}
