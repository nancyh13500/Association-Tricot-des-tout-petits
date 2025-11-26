# Tricot des tout petits

Ce site est une évaluation HTML / CSS / Bootstrap / PHP / Docker compose pour l'association "Tricot des tout petits".

Il fonctionne comme une petite Single Page Application (SPA) avec un routeur JavaScript (`Router/Router.js`) et des pages dans le dossier `pages`.

## Back-end PHP

Un petit back-end PHP a été ajouté pour gérer le formulaire de contact :

- `api/contact.php` : traite les envois du formulaire de contact et affiche un message de confirmation.

Le formulaire de la page `pages/contact.html` envoie une requête POST vers `/api/contact.php`.

## Docker

Le projet est prêt à être lancé dans un conteneur **PHP + Apache** grâce à Docker.

### Prérequis

- Docker installé
- Docker Compose

### Lancer le projet avec Docker

```bash
cd C:\wamp64\www\Association-Tricot-des-tout-petits
docker compose build
docker compose up -d
```

Ensuite, ouvrir le site dans le navigateur à l'adresse :

- `http://localhost:8080`

## Développement en local (sans Docker)

Tu peux aussi utiliser WAMP/XAMPP ou un autre serveur Apache/PHP :

1. Placer le dossier du projet dans le répertoire `www` (ou équivalent) de ton serveur.
2. Vérifier que `mod_rewrite` est activé pour que le fichier `.htaccess` fonctionne (il redirige les URL de la SPA vers `index.html`).
3. Accéder au site via l’URL fournie par ton serveur (par exemple `http://localhost/Association-Tricot-des-tout-petits`).
