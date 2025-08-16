<?php

namespace App\DataFixtures;

use App\Entity\Game;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class GameFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $games = [
            [
                'title' => 'The Witcher 3: Wild Hunt',
                'description' => 'RPG épique dans un monde fantasy riche et immersif',
                'longDescription' => 'En tant que Geralt de Riv, mercenaire spécialisé dans la chasse aux monstres, embarquez pour une aventure épique dans un monde ouvert révolutionnaire. Explorez les îles Skellige, parcourez les rues animées de Novigrad et accomplissez la quête la plus importante de votre vie dans The Witcher 3: Wild Hunt.',
                'price' => 29.99,
                'image' => 'https://cdn.supersoluce.com/file/docs/docid_50f633a58f152fee45000051/elemid_4ee9d6ec0a2fe93f0e00000c/the-witcher-3-wild-hunt-pc.jpg',
                'platform' => 'PC',
                'genre' => 'RPG',
                'developer' => 'CD PROJEKT RED',
                'publisher' => 'CD PROJEKT RED',
                'releaseDate' => new \DateTime('2015-05-19'),
                'averageRating' => 4.8,
                'systemRequirements' => [
                    'OS' => 'Windows 7 64-bit',
                    'Processeur' => 'Intel CPU Core i5-2500K 3.3GHz',
                    'Mémoire' => '6 GB RAM',
                    'Graphiques' => 'Nvidia GPU GeForce GTX 660',
                    'Stockage' => '35 GB disponible'
                ],
                'screenshots' => [
                    'https://images.igdb.com/igdb/image/upload/t_screenshot_big/sc8plr.jpg',
                    'https://images.igdb.com/igdb/image/upload/t_screenshot_big/sc8pls.jpg'
                ]
            ],
            [
                'title' => 'Cyberpunk 2077',
                'description' => 'Jeu de rôle futuriste dans Night City',
                'longDescription' => 'Cyberpunk 2077 est un jeu de rôle d\'action en monde ouvert qui se déroule à Night City, une mégalopole obsédée par le pouvoir, la gloire et les transformations corporelles. Incarnez V, un mercenaire hors-la-loi à la recherche d\'un implant unique qui serait la clé de l\'immortalité.',
                'price' => 39.99,
                'image' => 'https://img.seriebox.com/jeux/17/17137/jaquette_81_17137_1.jpg',
                'platform' => 'PC',
                'genre' => 'RPG',
                'developer' => 'CD PROJEKT RED',
                'publisher' => 'CD PROJEKT RED',
                'releaseDate' => new \DateTime('2020-12-10'),
                'averageRating' => 4.2,
                'systemRequirements' => [
                    'OS' => 'Windows 10 64-bit',
                    'Processeur' => 'Intel Core i5-3570K ou AMD FX-8310',
                    'Mémoire' => '8 GB RAM',
                    'Graphiques' => 'NVIDIA GeForce GTX 970',
                    'Stockage' => '70 GB disponible'
                ]
            ],
            [
                'title' => 'Minecraft',
                'description' => 'Jeu de construction et de survie en monde ouvert',
                'price' => 19.99,
                'image' => 'https://th.bing.com/th/id/R.770aa5fd28ad77139eb775d7621e00b1?rik=IKCU9guKBtEanA&riu=http%3a%2f%2fi.jeuxactus.com%2fdatas%2fjeux%2fm%2fi%2fminecraft%2fxl%2fminecraft-jaquette-52b81df19cb5a.jpg&ehk=Bom4NFcBzr%2bSACfsj%2fXa%2fb%2bmYD%2fXnrquIxSwfduZHoo%3d&risl=&pid=ImgRaw&r=0',
                'platform' => 'PC',
                'genre' => 'Sandbox'
            ],
            [
                'title' => 'Grand Theft Auto V',
                'description' => 'Action-aventure en monde ouvert à Los Santos',
                'price' => 24.99,
                'image' => 'https://images.igdb.com/igdb/image/upload/t_cover_big/co2lbd.jpg',
                'platform' => 'PC',
                'genre' => 'Action'
            ],
            [
                'title' => 'Among Us',
                'description' => 'Jeu de déduction sociale multijoueur',
                'price' => 4.99,
                'image' => 'https://xbox-mag.net/content/thumbnails/uploads/2021/03/among-us-jaquette-tt-width-200-height-300-bgcolor-FFFFFF.png',
                'platform' => 'PC',
                'genre' => 'Social'
            ],
            [
                'title' => 'Valorant',
                'description' => 'FPS tactique compétitif avec des agents aux capacités uniques',
                'price' => 0.00,
                'image' => 'https://images.igdb.com/igdb/image/upload/t_cover_big/co2mvt.jpg',
                'platform' => 'PC',
                'genre' => 'FPS'
            ],
            [
                'title' => 'Elden Ring',
                'description' => 'Action-RPG épique dans un monde ouvert dark fantasy',
                'price' => 59.99,
                'image' => 'https://static.actugaming.net/media/2024/12/elden-ring-neighreign-jaquette.jpg',
                'platform' => 'PC',
                'genre' => 'Souls-like'
            ],
            [
                'title' => 'Counter-Strike 2',
                'description' => 'Le FPS tactique légendaire dans sa nouvelle version',
                'price' => 0.00,
                'image' => 'https://static1.thegamerimages.com/wordpress/wp-content/uploads/2023/03/counter-strike-2-cover.jpg',
                'platform' => 'PC',
                'genre' => 'FPS'
            ],
            [
                'title' => 'Red Dead Redemption 2',
                'description' => 'Western épique avec une histoire immersive',
                'price' => 34.99,
                'image' => 'https://images.igdb.com/igdb/image/upload/t_cover_big/co1q1f.jpg',
                'platform' => 'PC',
                'genre' => 'Western'
            ],
            [
                'title' => 'Apex Legends',
                'description' => 'Battle royale dynamique avec des légendes uniques',
                'price' => 0.00,
                'image' => 'https://image.jeuxvideo.com/medias/155137/1551371304-2322-jaquette-avant.jpg',
                'platform' => 'PC',
                'genre' => 'Battle Royale'
            ],
            [
                'title' => 'Baldur\'s Gate 3',
                'description' => 'RPG tactique basé sur D&D avec choix narratifs profonds',
                'price' => 49.99,
                'image' => 'https://static.actugaming.net/media/2019/06/baldurs-gate-3-jaquette.jpg',
                'platform' => 'PC',
                'genre' => 'RPG Tactique'
            ],
            [
                'title' => 'Rocket League',
                'description' => 'Football avec des voitures dans des arènes spectaculaires',
                'price' => 0.00,
                'image' => 'https://static.actugaming.net/media/2016/02/rocket-league-jaquette.jpg',
                'platform' => 'PC',
                'genre' => 'Sport'
            ],
            [
                'title' => 'Assassin\'s Creed Valhalla',
                'description' => 'Incarnez un guerrier viking dans l\'Angleterre médiévale',
                'price' => 29.99,
                'image' => 'https://image.jeuxvideo.com/medias/158826/1588264397-5261-jaquette-avant.jpg',
                'platform' => 'PC',
                'genre' => 'Action-RPG'
            ],
            [
                'title' => 'Hades',
                'description' => 'Rogue-like narratif dans la mythologie grecque',
                'price' => 19.99,
                'image' => 'https://static.actugaming.net/media/2018/12/hades-jeu-jaquette.jpg',
                'platform' => 'PC',
                'genre' => 'Rogue-like'
            ],
            [
                'title' => 'Stardew Valley',
                'description' => 'Simulation de ferme relaxante avec RPG et exploration',
                'price' => 12.99,
                'image' => 'https://www.mobygames.com/images/covers/l/650333-stardew-valley-collector-s-edition-nintendo-switch-other.jpg',
                'platform' => 'PC',
                'genre' => 'Simulation'
            ],
            [
                'title' => 'Call of Duty: Modern Warfare III',
                'description' => 'FPS militaire avec campagne et multijoueur intense',
                'price' => 69.99,
                'image' => 'https://tse4.mm.bing.net/th/id/OIP.eB13UMntw7B6nxZqCOg6CAHaHa?r=0&rs=1&pid=ImgDetMain&o=7&rm=3',
                'platform' => 'PC',
                'genre' => 'FPS'
            ],
            [
                'title' => 'Terraria',
                'description' => 'Aventure 2D de construction et exploration',
                'price' => 9.99,
                'image' => 'https://th.bing.com/th/id/R.58e3f24d692487efe7e20c5f1858403a?rik=qmHGH4o8gCLuMA&pid=ImgRaw&r=0',
                'platform' => 'PC',
                'genre' => 'Aventure 2D'
            ],
            [
                'title' => 'Fall Guys',
                'description' => 'Battle royale coloré et amusant en équipe',
                'price' => 0.00,
                'image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202309/2603/55757303c2d99bb14cddca61c21680ae1df5ee936d8ffd6e.png',
                'platform' => 'PC',
                'genre' => 'Party Game'
            ]
        ];

        foreach ($games as $gameData) {
            $game = new Game();
            $game->setTitle($gameData['title']);
            $game->setDescription($gameData['description']);
            $game->setPrice($gameData['price']);
            $game->setImage($gameData['image'] ?? null);
            $game->setPlatform($gameData['platform'] ?? null);
            $game->setGenre($gameData['genre'] ?? null);
            
            // Nouveaux champs optionnels
            if (isset($gameData['longDescription'])) {
                $game->setLongDescription($gameData['longDescription']);
            }
            if (isset($gameData['developer'])) {
                $game->setDeveloper($gameData['developer']);
            }
            if (isset($gameData['publisher'])) {
                $game->setPublisher($gameData['publisher']);
            }
            if (isset($gameData['releaseDate'])) {
                $game->setReleaseDate($gameData['releaseDate']);
            }
            if (isset($gameData['averageRating'])) {
                $game->setAverageRating($gameData['averageRating']);
            }
            if (isset($gameData['systemRequirements'])) {
                $game->setSystemRequirements($gameData['systemRequirements']);
            }
            if (isset($gameData['screenshots'])) {
                $game->setScreenshots($gameData['screenshots']);
            }
            if (isset($gameData['trailerUrl'])) {
                $game->setTrailerUrl($gameData['trailerUrl']);
            }
            
            $manager->persist($game);
        }

        $manager->flush();
    }
}
