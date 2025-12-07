# Association Tricot des tout petits

Site web pour l'association "Tricot des tout petits" à Martigues.

## Description

Site web permettant de présenter l'association et ses activités de tricot pour les tout-petits. Le site comprend des pages d'actualités, de projets, de contact et d'informations.

## Technologies utilisées

- PHP
- Bootstrap 5
- SCSS
- Docker

## Installation

### Avec Docker

```bash
docker compose build
docker compose up -d
```

Le site sera accessible sur `http://localhost:8080`

### Sans Docker (WAMP/XAMPP)

1. Placer le projet dans le répertoire `www` de votre serveur
2. Accéder au site via l'URL de votre serveur local

## Structure du projet

- `index.php` - Page d'accueil
- `pages/` - Pages du site (actualités, projets, contact, etc.)
- `includes/` - Header et footer
- `api/` - API PHP pour le formulaire de contact
- `scss/` - Fichiers de style SCSS
- `img/` - Images du site
