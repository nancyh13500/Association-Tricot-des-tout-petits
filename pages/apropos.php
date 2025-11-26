<?php
// Page A propos
$pageTitle = 'A propos - Tricot des tout petits';
require_once __DIR__ . '/../includes/header.php';
?>

<main>
    <div class="bg-dark text-center">
        <div class="container p-4">
            <h1>A propos</h1>
        </div>
    </div>

    <div class="text-center p-5 bg-secondary">
        <div class="col-12">
            <p>Les Tricots pour les tout petits a commencé en 2023.<br>Nancy créations avait envie de faire quelque chose d’utile et elle sait tricoter.
                Elle n’avait pas forcément la communauté qui pourrait la suivre et a lancé un appel à l’aide pour aider les bébés à la naissance.<br><br>
                Elle voulait faire participer d’autres tricoteuses pour confectionner des tenues de naissance pour les nouveaux nés.<br><br>
                Ensembles, elles ont pu récupérer un grand nombre de pelotes pour les tricoter avec les bénévoles qui les suivent dans cette aventure.<br><br>
                Nous espérons accueillir encore plus de tricoteuses ou tricoteurs pour partager notre passion et la mettre au service de mamans désireuses de recevoir un cadeau de naissance
            </p>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3">
                <div class="col p-3">
                    <div class="image text-white">
                        <img src="/img/pull.jpg" alt="" class="w-100 rounded">
                    </div>
                </div>
                <div class="col p-3">
                    <div class="image text-white">
                        <img src="/img/tricot.jpg" alt="" class="w-100 rounded">
                    </div>
                </div>
                <div class="col p-3">
                    <div class="image text-white">
                        <img src="/img/baby2.jpg" alt="" class="w-100 rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>