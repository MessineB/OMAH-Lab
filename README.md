# OMAH Lab - Site Web

Bienvenue sur le dépôt du site web de l'association OMAH Lab. Ce projet utilise une stack technique moderne centrée autour du framework Symfony.

## 🎯 Description du Projet

Ce dépôt contient le code source du site web de l'association OMAH Lab, visant à fournir une plateforme dynamique pour informer et engager les visiteurs à propos des activités, événements et projets de l'association. Le site web est structuré de manière à être extensible et maintenable, tout en offrant une performance optimale pour les utilisateurs finaux.

## ⚙️ Stack Technique

### 1. **Backend** : Symfony
   - **Version Symfony** : [précisez la version, par exemple : Symfony 5.4]
   - **Langage** : PHP 8.0+
   - **Configuration** : Projet structuré selon les standards MVC (Model-View-Controller) de Symfony pour une meilleure séparation des préoccupations.
   - **Packages et Bundles** :
     - Utilisation de `Doctrine ORM` pour la gestion des bases de données.
     - `Twig` pour la gestion des templates côté serveur.
     - `Symfony Security` pour la gestion des utilisateurs et des autorisations.

### 2. **Frontend**
   - **HTML5/CSS3** : Structuration et styles de base.
   - **JavaScript** : Ajout d'interactivité sur le site.
   - **Bootstrap** : Utilisé pour une mise en page réactive et un design cohérent.

### 3. **Base de Données** : MySQL
   - **Structure de la base** : La base de données est modélisée pour permettre la gestion des utilisateurs, des événements, des articles de blog, etc.
   - **ORM** : Doctrine est utilisé pour interagir avec la base de données, facilitant les migrations et la gestion des entités.

### 4. **Outils de Développement**
   - **Composer** : Gestionnaire de dépendances PHP, utilisé pour installer et gérer les packages nécessaires.
   - **Webpack Encore** : Pour la gestion des assets (CSS, JavaScript), le bundling, et le minifying.
   - **Yarn** : Utilisé pour gérer les dépendances JavaScript.
   - **Git** : Pour le contrôle de version et la collaboration sur le code source.

### 5. **Environnement**
   - **Développement Local** : Environnement de développement configuré avec `Symfony CLI` pour tester et déployer les modifications localement.
   - **Environnement de Production** : Hébergement sur un serveur (spécifiez si vous avez un hébergement spécifique).

## 📂 Structure du Projet

La structure du projet respecte les conventions standards de Symfony :

- `src/` : Code source du projet, incluant les contrôleurs, les services et les entités.
- `templates/` : Fichiers de templates Twig pour les vues.
- `public/` : Contient les fichiers accessibles publiquement (CSS, JavaScript, images).
- `config/` : Fichiers de configuration du projet.
- `migrations/` : Contient les fichiers de migration générés par Doctrine.
- `assets/` : Fichiers frontend (SCSS, JavaScript) gérés par Webpack Encore.

## 🚀 Installation et Lancement du Projet

### Prérequis

- PHP 8.0 ou supérieur
- Composer
- Symfony CLI
- MySQL
- Node.js et Yarn

### Installation

1. **Cloner le dépôt** :
   ```bash
   git clone git@github.com:MessineB/OMAH-Lab.git
   cd OMAH-Lab
   ```

2. **Installer les dépendances PHP** :
   ```bash
   composer install
   ```

3. **Installer les dépendances JavaScript** :
   ```bash
   yarn install
   ```

4. **Configurer l'environnement** :
   - Copier le fichier `.env.example` et le renommer `.env`.
   - Mettre à jour les informations de connexion à la base de données dans `.env`.

5. **Migrer la base de données** :
   ```bash
   php bin/console doctrine:migrations:migrate
   ```

6. **Compiler les assets** :
   ```bash
   yarn encore dev
   ```

### Lancer le serveur de développement

```bash
symfony server:start
```

Le site sera accessible à l'adresse `http://localhost:8000`.

## 📌 Contribution

Les contributions sont les bienvenues ! Merci de créer une nouvelle branche pour chaque nouvelle fonctionnalité ou correction, puis de soumettre une pull request pour examen.

## 📄 Licence

Ce projet est sous licence [nom de la licence, par exemple MIT](./LICENSE).

---

Avec ce fichier `README.md`, les visiteurs du dépôt auront une bonne compréhension de la stack technique utilisée pour le projet, ainsi que des instructions pour installer et contribuer au projet.
