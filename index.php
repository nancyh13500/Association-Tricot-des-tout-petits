<?php
// Page d'accueil principale
$pageTitle = 'Tricot des tous petits';
require_once __DIR__ . '/includes/header.php';
?>

<main>
    <div class="banniere position-relative">
        <div class="banniere-content">
            <h1 class="text-banniere position-absolute text-white ms-5">Tricotons pour les tous petits</h1>
        </div>
        <img src="/img/wool.jpg" alt="wool" class="banniere-image w-100" width="1200" height="800">
    </div>

    <section class="article">
        <article class="bg-secondary text-center">
            <div class="container p-3">
                <h1>A Martigues</h1>
                <p>Retrouvons-nous le samedi matin pour apprendre à tricoter pour les tous petits</p>
            </div>
        </article>
        <article class="bg-dark p-5">
            <div class="container bg-dark">
                <div class="row row-cols-1 row-cols-lg-3 pe-3">
                    <div class="col p-3">
                        <div class="image-card text-white">
                            <img src="/img/wool caisse.jpg" alt="" class="w-100">
                            <p class="titre-image">Actualités</p>
                        </div>
                        <div class="col bg-secondary p-5 rounded-bottom-3">
                            <div class="text-center">
                                <p>RDV les vendredis à l’Atelier</p>
                                <div class="text-center pt-4">
                                    <a href="/pages/actualites.php" class="btn btn-primary">Lire la suite...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col p-3">
                        <div class="image-card text-white">
                            <img src="/img/baby wool.jpg" alt="" class="w-100">
                            <p class="titre-image">Prochainement</p>
                        </div>
                        <div class="col bg-secondary p-5 rounded-bottom-3">
                            <div class="text-center">
                                <p>Le samedi 17 avril 2024</p>
                                <div class="text-center pt-4">
                                    <a href="/pages/prochainement.php" class="btn btn-primary">Lire la suite...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col p-3">
                        <div class="image-card text-white">
                            <img src="/img/wool color.jpg" alt="" class="w-100">
                            <p class="titre-image text-center">Evènements</p>
                        </div>
                        <div class="col bg-secondary p-5 rounded-bottom-3">
                            <div class="text-center">
                                <p>Le samedi 10 juin 2024</p>
                                <div class="text-center pt-4">
                                    <a href="/pages/projets.php" class="btn btn-primary">Lire la suite...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>