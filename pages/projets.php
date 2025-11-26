<?php
// Page Projets
$pageTitle = 'Projets - Tricot des tout petits';
require_once __DIR__ . '/../includes/header.php';
?>

<main>
    <div class="bg-dark text-center">
        <div class="container p-4">
            <h1>Projets</h1>
        </div>
    </div>


    <div class="container text-center p-5 bg-secondary">
        <div class="col-12">
            <h2>Journée mondiale du tricot</h2><br>
            <h3>Samedi 10 juin 2024</h3><br><br>
            <p>Rendez-vous autour d'un café tricot, petits biscuits et jus de fruits pour échanger et partager nos ouvrages. <br>
                Ramenez toutes les personnes qui souhaitent faire du tricot</p>
        </div>
        <div class="row row-cols-1 row-cols-lg-1">
            <div class="col p-3">
            </div>
            <div class="col p-3">
                <div class="image text-white">
                    <img src="/img/tricotjourneemondiale.jpg" alt="" class="w-50 rounded">
                </div>
            </div>
            <div class="col p-3">
            </div>
        </div>
    </div>
</main>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>