<?php
// Page Contact
$pageTitle = 'Contact - Tricot des tout petits';
require_once __DIR__ . '/../includes/header.php';
?>

<main>
        <div class="bg-dark text-center bg-secondary">
            <div class="container p-4">
                <h1>Contact</h1>
            </div>    
        </div>

        <div class="container bg-secondary text-start p-5">
            <form action="/api/contact.php" method="POST">
                <div class="mb-3 row">
                    <label for="nom" class="col-sm-3 col-form-label">Nom</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Ex. Durand" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-3 col-form-label">Adresse Mail</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="message" class="col-sm-3 col-form-label">Message</label>
                    <div class="col-sm-6">
                        <textarea class="form-control" id="message" name="message" rows="10" required></textarea>
                    </div>
                    <p class="text-center p-5">Une réponse vous sera envoyée par mail sous 48 heures</p>
                    <div class="text-center pt-1">
                        <button type="submit" class="btn btn-primary">Envoyer le message</button>
                    </div>
                    <div class="row row-cols-1 row-cols-lg-3">
                        <div class="col p-3">
                        </div>
                        <div class="image text-white p-5">
                            <img src="/img/pelote4.jpg" alt="" class="w-100 rounded">
                        </div>
                        <div class="col p-3">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
