<?php
// Page Prochainement
$pageTitle = 'Prochainement - Tricot des tout petits';
require_once __DIR__ . '/../includes/header.php';
?>

<main>
    <div class="bg-dark text-center">
        <div class="container p-4">
            <h1>Prochainement</h1>
        </div>
    </div>

    <div class="text-center p-5 bg-secondary">
        <div class="col-12">
            <p>Prochain atelier tricot le samedi 20 avril 2024</p><br>
            <p>Horaire de 14h à 16h à l'atelier 22 rue Ramade à Martigues</p><br><br><br>
            <p>Que vous soyez débutante ou avancée, nous nous retrouvons pour partager notre passion. <br>
                Du matériel sera à votre disposition pour démarrer un nouveau projet ensemble.</p>
        </div>
        <div class="row row-cols-1 row-cols-lg-3">
            <div class="p-3">
                <div class="image text-white text-center">
                    <img src="/img/babyshoes.jpg" alt="babyshoes" class="w-100 rounded">
                </div>
            </div>
            <div class="p-3">
                <div class="image text-white text-center">
                    <img src="/img/baby1.jpg" alt="baby1" class="w-100 rounded">
                </div>
            </div>
            <div class="p-3">
                <div class="image text-white text-center">
                    <img src="/img/babyhat.jpg" alt="babyhat" class="w-100 rounded">
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>