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
                'longDescription' => 'Minecraft est un jeu de construction et de survie qui vous permet de créer des mondes infinis avec des blocs. Explorez des grottes, construisez des châteaux, combattez des monstres et laissez libre cours à votre créativité dans cet univers pixelisé emblématique. Que vous préfériez le mode créatif pour construire sans limites ou le mode survie pour relever des défis, Minecraft offre une expérience unique et addictive.',
                'price' => 19.99,
                'image' => 'https://th.bing.com/th/id/R.770aa5fd28ad77139eb775d7621e00b1?rik=IKCU9guKBtEanA&riu=http%3a%2f%2fi.jeuxactus.com%2fdatas%2fjeux%2fm%2fi%2fminecraft%2fxl%2fminecraft-jaquette-52b81df19cb5a.jpg&ehk=Bom4NFcBzr%2bSACfsj%2fXa%2fb%2bmYD%2fXnrquIxSwfduZHoo%3d&risl=&pid=ImgRaw&r=0',
                'platform' => 'PC',
                'genre' => 'Sandbox',
                'developer' => 'Mojang Studios',
                'publisher' => 'Microsoft',
                'releaseDate' => new \DateTime('2011-11-18'),
                'averageRating' => 4.5,
                'systemRequirements' => [
                    'OS' => 'Windows 7 ou ultérieur',
                    'Processeur' => 'Intel Core i3-3210 ou AMD A8-7600',
                    'Mémoire' => '4 GB RAM',
                    'Graphiques' => 'Intel HD Graphics 4000 ou AMD Radeon R5',
                    'Stockage' => '4 GB disponible'
                ]
            ],
            [
                'title' => 'Grand Theft Auto V',
                'description' => 'Action-aventure en monde ouvert à Los Santos',
                'longDescription' => 'Plongez dans l\'univers criminel de Los Santos avec Grand Theft Auto V. Incarnez trois personnages aux histoires entremêlées dans cette épopée criminelle moderne. Explorez une ville immense, participez à des braquages spectaculaires, et vivez une aventure cinématographique inoubliable. Le mode GTA Online vous permet également de créer votre propre empire criminel avec vos amis.',
                'price' => 24.99,
                'image' => 'https://images.igdb.com/igdb/image/upload/t_cover_big/co2lbd.jpg',
                'platform' => 'PC',
                'genre' => 'Action',
                'developer' => 'Rockstar North',
                'publisher' => 'Rockstar Games',
                'releaseDate' => new \DateTime('2015-04-14'),
                'averageRating' => 4.6,
                'systemRequirements' => [
                    'OS' => 'Windows 8.1 64-bit',
                    'Processeur' => 'Intel Core i5 3470 ou AMD X8 FX-8350',
                    'Mémoire' => '8 GB RAM',
                    'Graphiques' => 'NVIDIA GTX 660 2GB ou AMD HD7870 2GB',
                    'Stockage' => '72 GB disponible'
                ]
            ],
            [
                'title' => 'Among Us',
                'description' => 'Jeu de déduction sociale multijoueur',
                'longDescription' => 'Among Us est un jeu de déduction sociale où vous incarnez un membre d\'équipage à bord d\'un vaisseau spatial. Mais attention ! Parmi vous se cachent des imposteurs dont le but est d\'éliminer l\'équipage. Menez l\'enquête, réparez le vaisseau, et débattez pour identifier les traîtres avant qu\'il ne soit trop tard. Un jeu parfait entre amis pour des parties pleines de suspense et de rires.',
                'price' => 4.99,
                'image' => 'https://xbox-mag.net/content/thumbnails/uploads/2021/03/among-us-jaquette-tt-width-200-height-300-bgcolor-FFFFFF.png',
                'platform' => 'PC',
                'genre' => 'Social',
                'developer' => 'InnerSloth',
                'publisher' => 'InnerSloth',
                'releaseDate' => new \DateTime('2018-06-15'),
                'averageRating' => 4.3,
                'systemRequirements' => [
                    'OS' => 'Windows 7 SP1+',
                    'Processeur' => 'SSE2 instruction set support',
                    'Mémoire' => '1 GB RAM',
                    'Graphiques' => 'Graphics card avec DX10',
                    'Stockage' => '250 MB disponible'
                ]
            ],
            [
                'title' => 'Valorant',
                'description' => 'FPS tactique compétitif avec des agents aux capacités uniques',
                'longDescription' => 'Valorant est un FPS tactique 5v5 qui combine un gameplay de tir précis avec des capacités d\'agents uniques. Choisissez votre agent parmi une roster diversifiée, chacun avec ses propres capacités stratégiques. Maîtrisez les armes, coordonnez-vous avec votre équipe, et dominez vos adversaires dans ce jeu compétitif exigeant. Chaque round compte, chaque tir peut être décisif.',
                'price' => 0.00,
                'image' => 'https://images.igdb.com/igdb/image/upload/t_cover_big/co2mvt.jpg',
                'platform' => 'PC',
                'genre' => 'FPS',
                'developer' => 'Riot Games',
                'publisher' => 'Riot Games',
                'releaseDate' => new \DateTime('2020-06-02'),
                'averageRating' => 4.4,
                'systemRequirements' => [
                    'OS' => 'Windows 7/8/10 64-bit',
                    'Processeur' => 'Intel Core 2 Duo E8400 ou AMD Athlon 200GE',
                    'Mémoire' => '4 GB RAM',
                    'Graphiques' => 'Intel HD 4000 ou AMD Radeon R5 200',
                    'Stockage' => '20 GB disponible'
                ]
            ],
            [
                'title' => 'Elden Ring',
                'description' => 'Action-RPG épique dans un monde ouvert dark fantasy',
                'longDescription' => 'Elden Ring vous plonge dans un vaste monde ouvert dark fantasy créé par Hidetaka Miyazaki et George R.R. Martin. Incarnez un Terni et explorez l\'Entre-terre, un royaume mystérieux rempli de dangers et de merveilles. Combattez des boss légendaires, maîtrisez des sorts puissants et forgez votre propre légende dans cette épopée où chaque choix compte. L\'aventure vous attend dans ce chef-d\'œuvre du genre souls-like.',
                'price' => 59.99,
                'image' => 'https://static.actugaming.net/media/2024/12/elden-ring-neighreign-jaquette.jpg',
                'platform' => 'PC',
                'genre' => 'Souls-like',
                'developer' => 'FromSoftware',
                'publisher' => 'Bandai Namco',
                'releaseDate' => new \DateTime('2022-02-25'),
                'averageRating' => 4.8,
                'systemRequirements' => [
                    'OS' => 'Windows 10',
                    'Processeur' => 'Intel Core i5-8400 ou AMD Ryzen 3 3300X',
                    'Mémoire' => '12 GB RAM',
                    'Graphiques' => 'NVIDIA GTX 1060 ou AMD RX 580',
                    'Stockage' => '60 GB disponible'
                ]
            ],
            [
                'title' => 'Counter-Strike 2',
                'description' => 'Le FPS tactique légendaire dans sa nouvelle version',
                'longDescription' => 'Counter-Strike 2 marque une nouvelle ère pour la série légendaire de FPS tactique. Avec un moteur graphique modernisé, des mécaniques de jeu affinées et des cartes repensées, CS2 offre l\'expérience Counter-Strike la plus pure et compétitive jamais créée. Affrontez-vous en 5v5, maîtrisez l\'économie du jeu, et prouvez votre valeur dans les rangs compétitifs de ce monument du esport.',
                'price' => 0.00,
                'image' => 'https://static1.thegamerimages.com/wordpress/wp-content/uploads/2023/03/counter-strike-2-cover.jpg',
                'platform' => 'PC',
                'genre' => 'FPS',
                'developer' => 'Valve',
                'publisher' => 'Valve',
                'releaseDate' => new \DateTime('2023-09-27'),
                'averageRating' => 4.3,
                'systemRequirements' => [
                    'OS' => 'Windows 10',
                    'Processeur' => 'Intel Core i5 750 ou équivalent',
                    'Mémoire' => '8 GB RAM',
                    'Graphiques' => 'GeForce GTX 1060 ou Radeon RX 580',
                    'Stockage' => '85 GB disponible'
                ]
            ],
            [
                'title' => 'Red Dead Redemption 2',
                'description' => 'Western épique avec une histoire immersive',
                'longDescription' => 'Red Dead Redemption 2 vous transporte dans l\'Amérique de 1899, à l\'apogée de l\'ère du Far West. Incarnez Arthur Morgan, membre du gang de Dutch van der Linde, dans cette épopée western d\'une profondeur narrative exceptionnelle. Explorez un monde ouvert somptueux, vivez des aventures palpitantes, et découvrez l\'une des histoires les plus touchantes du jeu vidéo. Un chef-d\'œuvre de Rockstar Games.',
                'price' => 34.99,
                'image' => 'https://images.igdb.com/igdb/image/upload/t_cover_big/co1q1f.jpg',
                'platform' => 'PC',
                'genre' => 'Western',
                'developer' => 'Rockstar Games',
                'publisher' => 'Rockstar Games',
                'releaseDate' => new \DateTime('2019-11-05'),
                'averageRating' => 4.9,
                'systemRequirements' => [
                    'OS' => 'Windows 7 SP1 64-bit',
                    'Processeur' => 'Intel Core i5-2500K ou AMD FX-6300',
                    'Mémoire' => '8 GB RAM',
                    'Graphiques' => 'NVIDIA GTX 770 2GB ou AMD Radeon R9 280',
                    'Stockage' => '150 GB disponible'
                ]
            ],
            [
                'title' => 'Apex Legends',
                'description' => 'Battle royale dynamique avec des légendes uniques',
                'longDescription' => 'Apex Legends révolutionne le genre battle royale avec son gameplay dynamique et ses Légendes aux capacités uniques. Formez une escouade de 3 joueurs, choisissez parmi une roster diversifiée de personnages, et battez-vous pour être la dernière équipe survivante. Avec son système de ping révolutionnaire, ses mécaniques de mouvement fluides et ses mises à jour constantes, Apex Legends offre une expérience battle royale intense et addictive.',
                'price' => 0.00,
                'image' => 'https://image.jeuxvideo.com/medias/155137/1551371304-2322-jaquette-avant.jpg',
                'platform' => 'PC',
                'genre' => 'Battle Royale',
                'developer' => 'Respawn Entertainment',
                'publisher' => 'Electronic Arts',
                'releaseDate' => new \DateTime('2019-02-04'),
                'averageRating' => 4.4,
                'systemRequirements' => [
                    'OS' => 'Windows 7 64-bit',
                    'Processeur' => 'Intel Core i3-6300 3.8GHz ou AMD FX-4350 4.2GHz',
                    'Mémoire' => '6 GB RAM',
                    'Graphiques' => 'NVIDIA GTX 660 ou AMD Radeon HD 7850',
                    'Stockage' => '56 GB disponible'
                ]
            ],
            [
                'title' => 'Baldur\'s Gate 3',
                'description' => 'RPG tactique basé sur D&D avec choix narratifs profonds',
                'longDescription' => 'Baldur\'s Gate 3 vous plonge dans l\'univers légendaire de Donjons & Dragons avec une liberté narrative sans précédent. Créez votre personnage, rassemblez une équipe de compagnons hauts en couleur, et embarquez pour une aventure épique où chaque choix façonne votre destinée. Avec son système de combat tactique au tour par tour, ses dialogues cinématographiques et ses multiples embranchements narratifs, BG3 redéfinit le RPG moderne.',
                'price' => 49.99,
                'image' => 'https://static.actugaming.net/media/2019/06/baldurs-gate-3-jaquette.jpg',
                'platform' => 'PC',
                'genre' => 'RPG Tactique',
                'developer' => 'Larian Studios',
                'publisher' => 'Larian Studios',
                'releaseDate' => new \DateTime('2023-08-03'),
                'averageRating' => 4.9,
                'systemRequirements' => [
                    'OS' => 'Windows 10 64-bit',
                    'Processeur' => 'Intel Core i5-4690 ou AMD FX 4350',
                    'Mémoire' => '8 GB RAM',
                    'Graphiques' => 'NVIDIA GTX 970 ou AMD Radeon RX 480',
                    'Stockage' => '150 GB disponible'
                ]
            ],
            [
                'title' => 'Rocket League',
                'description' => 'Football avec des voitures dans des arènes spectaculaires',
                'longDescription' => 'Rocket League combine le football et la conduite automobile dans un concept unique et addictif. Pilotez des voitures acrobatiques équipées de turbo et tentez de marquer des buts spectaculaires dans des arènes futuristes. Que ce soit en solo, en équipe ou en ligne avec des millions de joueurs, Rocket League offre un gameplay simple à apprendre mais difficile à maîtriser. Préparez-vous à vivre des moments d\'action pure et de pure adrénaline !',
                'price' => 0.00,
                'image' => 'https://static.actugaming.net/media/2016/02/rocket-league-jaquette.jpg',
                'platform' => 'PC',
                'genre' => 'Sport',
                'developer' => 'Psyonix',
                'publisher' => 'Psyonix',
                'releaseDate' => new \DateTime('2015-07-07'),
                'averageRating' => 4.5,
                'systemRequirements' => [
                    'OS' => 'Windows 7 64-bit',
                    'Processeur' => '2.5 GHz Dual core',
                    'Mémoire' => '4 GB RAM',
                    'Graphiques' => 'NVIDIA GTX 660 ou AMD HD 7950',
                    'Stockage' => '20 GB disponible'
                ]
            ],
            [
                'title' => 'Assassin\'s Creed Valhalla',
                'description' => 'Incarnez un guerrier viking dans l\'Angleterre médiévale',
                'longDescription' => 'Assassin\'s Creed Valhalla vous transporte à l\'âge des Vikings, où vous incarnez Eivor, un guerrier viking légendaire en quête de gloire. Menez votre clan depuis les terres désolées de Norvège vers les royaumes fertiles d\'Angleterre du 9ème siècle. Construisez votre colonie, forgez des alliances stratégiques, et combattez dans des batailles épiques. Une aventure viking authentique dans un monde ouvert somptueux.',
                'price' => 29.99,
                'image' => 'https://image.jeuxvideo.com/medias/158826/1588264397-5261-jaquette-avant.jpg',
                'platform' => 'PC',
                'genre' => 'Action-RPG',
                'developer' => 'Ubisoft Montreal',
                'publisher' => 'Ubisoft',
                'releaseDate' => new \DateTime('2020-11-10'),
                'averageRating' => 4.3,
                'systemRequirements' => [
                    'OS' => 'Windows 10 64-bit',
                    'Processeur' => 'Intel Core i5-4460 ou AMD FX-6300',
                    'Mémoire' => '8 GB RAM',
                    'Graphiques' => 'NVIDIA GTX 960 ou AMD R9 380',
                    'Stockage' => '160 GB disponible'
                ]
            ],
            [
                'title' => 'Hades',
                'description' => 'Rogue-like narratif dans la mythologie grecque',
                'longDescription' => 'Hades révolutionne le genre rogue-like en combinant un gameplay addictif avec une narration exceptionnelle inspirée de la mythologie grecque. Incarnez Zagreus, fils d\'Hadès, dans sa quête pour s\'échapper des Enfers. Chaque tentative d\'évasion offre de nouvelles armes, de nouveaux pouvoirs, et révèle des pans inédits de l\'histoire. Avec son art visuel somptueux et ses dialogues brillants, Hades prouve qu\'un rogue-like peut avoir une âme.',
                'price' => 19.99,
                'image' => 'https://static.actugaming.net/media/2018/12/hades-jeu-jaquette.jpg',
                'platform' => 'PC',
                'genre' => 'Rogue-like',
                'developer' => 'Supergiant Games',
                'publisher' => 'Supergiant Games',
                'releaseDate' => new \DateTime('2020-09-17'),
                'averageRating' => 4.8,
                'systemRequirements' => [
                    'OS' => 'Windows 7 SP1',
                    'Processeur' => 'Dual Core 2.4 GHz',
                    'Mémoire' => '4 GB RAM',
                    'Graphiques' => 'NVIDIA GTX 650 ou équivalent',
                    'Stockage' => '15 GB disponible'
                ]
            ],
            [
                'title' => 'Stardew Valley',
                'description' => 'Simulation de ferme relaxante avec RPG et exploration',
                'longDescription' => 'Échappez à la vie urbaine stressante et installez-vous à Stardew Valley ! Héritez de la ferme de votre grand-père et transformez ces terres envahies en une exploitation prospère. Cultivez des légumes, élevez des animaux, explorez des mines mystérieuses, et nouez des relations avec les habitants du village. Ce jeu de simulation paisible offre des centaines d\'heures de gameplay relaxant et addictif.',
                'price' => 12.99,
                'image' => 'https://i.playground.ru/e/aLKlQdHO9KydTMC7HrDvEQ.jpeg',
                'platform' => 'PC',
                'genre' => 'Simulation',
                'developer' => 'ConcernedApe',
                'publisher' => 'ConcernedApe',
                'releaseDate' => new \DateTime('2016-02-26'),
                'averageRating' => 4.7,
                'systemRequirements' => [
                    'OS' => 'Windows Vista ou ultérieur',
                    'Processeur' => '2 GHz',
                    'Mémoire' => '2 GB RAM',
                    'Graphiques' => '256 MB VRAM',
                    'Stockage' => '500 MB disponible'
                ]
            ],
            [
                'title' => 'Call of Duty: Modern Warfare III',
                'description' => 'FPS militaire avec campagne et multijoueur intense',
                'longDescription' => 'Call of Duty: Modern Warfare III marque le retour de la série légendaire avec une campagne solo palpitante et un multijoueur compétitif de haut niveau. Plongez dans des opérations militaires modernes avec des graphismes next-gen, un arsenal d\'armes authentiques, et des mécaniques de gameplay affinées. Que ce soit en solo, en coopération ou en multijoueur, préparez-vous à vivre l\'intensité du combat moderne.',
                'price' => 69.99,
                'image' => 'https://tse4.mm.bing.net/th/id/OIP.eB13UMntw7B6nxZqCOg6CAHaHa?r=0&rs=1&pid=ImgDetMain&o=7&rm=3',
                'platform' => 'PC',
                'genre' => 'FPS',
                'developer' => 'Sledgehammer Games',
                'publisher' => 'Activision',
                'releaseDate' => new \DateTime('2023-11-10'),
                'averageRating' => 4.1,
                'systemRequirements' => [
                    'OS' => 'Windows 10 64-bit',
                    'Processeur' => 'Intel Core i5-6600K ou AMD Ryzen 5 1400',
                    'Mémoire' => '8 GB RAM',
                    'Graphiques' => 'NVIDIA GTX 960 ou AMD Radeon RX 470',
                    'Stockage' => '149 GB disponible'
                ]
            ],
            [
                'title' => 'Terraria',
                'description' => 'Aventure 2D de construction et exploration',
                'longDescription' => 'Terraria est un jeu d\'aventure 2D où vous creusez, combattez, explorez et construisez ! Dans ce monde en 2D rempli de mystères, vous devrez survivre dans un environnement hostile, créer des objets, construire des abris et affronter des boss épiques. Avec ses centaines d\'ennemis, ses milliers d\'objets à crafting et ses biomes variés, Terraria offre une expérience de jeu immense et captivante.',
                'price' => 9.99,
                'image' => 'https://th.bing.com/th/id/R.58e3f24d692487efe7e20c5f1858403a?rik=qmHGH4o8gCLuMA&pid=ImgRaw&r=0',
                'platform' => 'PC',
                'genre' => 'Aventure 2D',
                'developer' => 'Re-Logic',
                'publisher' => 'Re-Logic',
                'releaseDate' => new \DateTime('2011-05-16'),
                'averageRating' => 4.6,
                'systemRequirements' => [
                    'OS' => 'Windows XP, Vista, 7, 8, 10',
                    'Processeur' => '2.0 GHz',
                    'Mémoire' => '2.5 GB RAM',
                    'Graphiques' => '128 MB VRAM',
                    'Stockage' => '200 MB disponible'
                ]
            ],
            [
                'title' => 'Fall Guys',
                'description' => 'Battle royale coloré et amusant en équipe',
                'longDescription' => 'Fall Guys est un party game battle royale hilarant où jusqu\'à 60 joueurs s\'affrontent dans des mini-jeux délirants ! Courez, sautez, plongez et bousculez-vous à travers des parcours d\'obstacles colorés et chaotiques. Seuls les plus agiles et les plus chanceux survivront jusqu\'à la fin. Avec ses graphismes adorables et son gameplay accessible, Fall Guys garantit des fous rires en famille ou entre amis.',
                'price' => 0.00,
                'image' => 'https://image.api.playstation.com/vulcan/ap/rnd/202309/2603/55757303c2d99bb14cddca61c21680ae1df5ee936d8ffd6e.png',
                'platform' => 'PC',
                'genre' => 'Party Game',
                'developer' => 'Mediatonic',
                'publisher' => 'Epic Games',
                'releaseDate' => new \DateTime('2020-08-04'),
                'averageRating' => 4.1,
                'systemRequirements' => [
                    'OS' => 'Windows 10 64-bit',
                    'Processeur' => 'Intel Core i5 ou AMD équivalent',
                    'Mémoire' => '8 GB RAM',
                    'Graphiques' => 'NVIDIA GTX 660 ou AMD Radeon HD 7870',
                    'Stockage' => '2 GB disponible'
                ]
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
