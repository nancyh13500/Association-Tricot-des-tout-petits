<?php
// Layout global : doctype, <html>, <head>, ouverture du <body> et navbar

// Titre de page optionnel, sinon titre par défaut
$pageTitle = $pageTitle ?? 'Tricot des tous petits';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Island+Moments&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjX0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/scss/main.css" />
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid ms-5 me-5">
                <a class="navbar-brand d-flex align-items-center justify-content-center ms-4" href="/index.php">
                    <img src="/img/logo tricot.png" alt="Tricot des tout petits" class="logo-navbar" style="height: 70px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse me-5" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pages/projets.php">Projets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pages/contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pages/apropos.php">A propos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>