<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    $to = 'newdemenagement@Gmail.com';
    $headers = "From: $nom $prenom <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $sujet, $message, $headers)) {
        echo '<p>Email sent successfully!</p>';
    } else {
        echo '<p>Failed to send email. Please try again later.</p>';
    }
}
?>