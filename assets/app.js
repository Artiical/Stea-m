import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */

// Import all CSS files
import './styles/base.css';
import './styles/navigation.css';
import './styles/buttons.css';
import './styles/components.css';
import './styles/cart.css';
import './styles/shop.css';
import './styles/game-detail.css';
import './styles/responsive.css';

console.log('Stea-m Platform loaded! 🎮');

// JavaScript pour les onglets de la page de jeu
document.addEventListener('DOMContentLoaded', function() {
    // Gestion des onglets
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabPanels = document.querySelectorAll('.tab-panel');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const targetTab = button.getAttribute('data-tab');
            
            // Désactiver tous les onglets
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabPanels.forEach(panel => panel.classList.remove('active'));
            
            // Activer l'onglet cliqué
            button.classList.add('active');
            document.getElementById(targetTab).classList.add('active');
        });
    });

    // Gestion de la wishlist (simulation)
    const wishlistBtns = document.querySelectorAll('.wishlist-btn');
    wishlistBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            if (btn.classList.contains('added')) {
                btn.innerHTML = '<span class="icon">❤️</span><span>Ajouter à la wishlist</span>';
                btn.classList.remove('added');
            } else {
                btn.innerHTML = '<span class="icon">💚</span><span>Ajouté à la wishlist</span>';
                btn.classList.add('added');
            }
        });
    });
});
