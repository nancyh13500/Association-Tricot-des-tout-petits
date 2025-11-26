<?php
// api/contact.php

// Autoriser uniquement la méthode POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo "Méthode non autorisée";
    exit;
}

// Récupération des champs
$nom = $_POST['nom'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// Validation très simple
if (empty($nom) || empty($email) || empty($message)) {
    $statusMessage = "Merci de remplir tous les champs.";
} else {
    // Adresse de destination (à adapter si besoin)
    $to = "nancycreationsbroderie@gmail.com";
    $subject = "Nouveau message du site Association Tricot des tout petits";

    // Construction du corps du mail
    $body = "Vous avez reçu un nouveau message depuis le formulaire de contact :\n\n";
    $body .= "Nom : $nom\n";
    $body .= "Email : $email\n\n";
    $body .= "Message :\n$message\n";

    // En-têtes du mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envoi du mail
    $mailSent = @mail($to, $subject, $body, $headers);

    if ($mailSent) {
        $statusMessage = "Merci $nom, votre message a bien été envoyé. Nous vous répondrons sous 48 heures.";
    } else {
        $statusMessage = "Une erreur est survenue lors de l'envoi de votre message. Merci de réessayer plus tard.";
    }
}

// Affichage d'une page HTML avec Bootstrap et le bouton de retour
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Contact - Tricot des tout petits</title>
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h1 class="h4 mb-4">Contact</h1>
                        <p>
                            <?php echo htmlspecialchars($statusMessage, ENT_QUOTES, 'UTF-8'); ?>
                        </p>
                        <a href="/" class="btn btn-primary mt-3">Retour à l'accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>