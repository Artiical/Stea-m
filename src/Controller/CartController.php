<?php

namespace App\Controller;

use App\Entity\Game;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;

class CartController extends AbstractController
{
    #[Route('/cart', name: 'cart_index')]
    public function index(SessionInterface $session, EntityManagerInterface $em): Response
    {
        $cart = $session->get('cart', []);
        $games = [];
        $total = 0;
        
        foreach ($cart as $gameId) {
            $game = $em->getRepository(Game::class)->find($gameId);
            if ($game) {
                $games[] = $game;
                $total += $game->getPrice();
            }
        }
        
        return $this->render('cart/cart.html.twig', [
            'games' => $games,
            'total' => $total
        ]);
    }

    #[Route('/cart/add/{id}', name: 'cart_add')]
    public function add(int $id, SessionInterface $session, EntityManagerInterface $em): Response
    {
        $game = $em->getRepository(Game::class)->find($id);
        if (!$game) {
            throw $this->createNotFoundException('Jeu non trouvé');
        }

        $cart = $session->get('cart', []);
        if (!in_array($id, $cart)) {
            $cart[] = $id;
            $session->set('cart', $cart);
        }

        return $this->redirectToRoute('cart_index');
    }

    #[Route('/cart/remove/{id}', name: 'cart_remove')]
    public function remove(int $id, SessionInterface $session): Response
    {
        $cart = $session->get('cart', []);
        $cart = array_filter($cart, function($gameId) use ($id) {
            return $gameId != $id;
        });
        $session->set('cart', array_values($cart));

        return $this->redirectToRoute('cart_index');
    }

    #[Route('/cart/purchase', name: 'cart_purchase')]
    public function purchase(SessionInterface $session): Response
    {
        $cart = $session->get('cart', []);
        $library = $session->get('library', []);
        
        foreach ($cart as $gameId) {
            if (!in_array($gameId, $library)) {
                $library[] = $gameId;
            }
        }
        
        $session->set('library', $library);
        $session->set('cart', []);

        return $this->redirectToRoute('library_index');
    }
}
