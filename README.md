# Stea-m - Plateforme de Jeux Steam-like

Une plateforme de jeux inspirée de Steam, développée avec Symfony 7.

## 🚀 Installation et Configuration

### Prérequis
- PHP 8.2 ou supérieur
- Composer
- SQLite (inclus par défaut)

### Installation

1. **Cloner le repository**
```bash
git clone https://github.com/Artiical/Stea-m.git
cd Stea-m
```

2. **Installer les dépendances**
```bash
composer install
```

3. **Configurer l'environnement**
```bash
# Copier le fichier d'exemple
cp .env.example .env

# Générer une nouvelle APP_SECRET
php -r "echo 'APP_SECRET=' . bin2hex(random_bytes(32)) . PHP_EOL;" >> .env
```

4. **Configurer la base de données**
```bash
# Créer la base de données
php bin/console doctrine:database:create

# Exécuter les migrations
php bin/console doctrine:migrations:migrate

# Charger les données de test (optionnel)
php bin/console doctrine:fixtures:load
```

5. **Lancer le serveur de développement**
```bash
symfony server:start
# ou
php -S localhost:8000 -t public/
```

## 🎮 Fonctionnalités

- **Boutique** : Parcourir et acheter des jeux
- **Bibliothèque** : Gérer votre collection de jeux
- **Panier** : Système de panier d'achat
- **Interface responsive** : Compatible mobile et desktop

## 📁 Structure du Projet

```
src/
├── Controller/          # Contrôleurs Symfony
├── Entity/             # Entités Doctrine
├── DataFixtures/       # Données de test
└── Repository/         # Repositories Doctrine

templates/              # Templates Twig
assets/                # Assets CSS/JS
```

## 🧪 Tests

Pour les tests, configurez l'environnement de test :

```bash
# Copier le fichier d'exemple pour les tests
cp .env.test.example .env.test

# Générer une clé secrète pour les tests
php -r "echo 'APP_SECRET=' . bin2hex(random_bytes(32)) . PHP_EOL;" >> .env.test
```

Puis exécuter les tests :
```bash
php bin/phpunit
```

## 🔧 Configuration des Environnements

### Développement (.env.dev)
```bash
cp .env.dev.example .env.dev
# Modifier les valeurs selon vos besoins
```

### Production
- Utilisez des variables d'environnement réelles
- Ne commitez jamais les fichiers .env réels
- Utilisez des services comme HashiCorp Vault pour les secrets

## 📝 Contribuer

1. Fork le projet
2. Créer une branche feature (`git checkout -b feature/AmazingFeature`)
3. Commit vos changements (`git commit -m 'Add some AmazingFeature'`)
4. Push vers la branche (`git push origin feature/AmazingFeature`)
5. Ouvrir une Pull Request

## ⚠️ Sécurité

- **Ne commitez jamais** les fichiers `.env`, `.env.dev`, `.env.test`
- **Générez toujours** de nouvelles clés secrètes
- **Utilisez des mots de passe forts** en production

## 📄 License

Ce projet est sous licence MIT.
