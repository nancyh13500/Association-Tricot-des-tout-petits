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
    echo "Merci de remplir tous les champs.";
    exit;
}

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
    echo "Merci $nom, votre message a bien été envoyé. Nous vous répondrons sous 48 heures.";
} else {
    echo "Une erreur est survenue lors de l'envoi de votre message. Merci de réessayer plus tard.";
}


