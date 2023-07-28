<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $rue = $_POST['rue'];
    $complement = $_POST['complement'];
    $code_postal = $_POST['code_postal'];
    $ville = $_POST['ville'];
    $etat = $_POST['etat'];
    $pays = $_POST['pays'];
    $logement = $_POST['logement'];
    $ville_arrivee = $_POST['ville_arrivee'];
    $date_demenagement = $_POST['date_demenagement'];

    $to = 'newdemenagement@gmail.Com';

    $subject = 'New Devis Form Submission';

    $message = "Nom: $nom\n";
    $message .= "Prénom: $prenom\n";
    $message .= "Email: $email\n";
    $message .= "Téléphone: $telephone\n";
    $message .= "Rue: $rue\n";
    $message .= "Complément: $complement\n";
    $message .= "Code Postal: $code_postal\n";
    $message .= "Ville: $ville\n";
    $message .= "État/Province/Région: $etat\n";
    $message .= "Pays: $pays\n";
    $message .= "Type de logement: $logement\n";
    $message .= "Ville d'arrivée: $ville_arrivee\n";
    $message .= "Date de déménagement: $date_demenagement\n";

    $headers = "From: $nom $prenom <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo '<p>Email sent successfully!</p>';
    } else {
        echo '<p>Failed to send email. Please try again later.</p>';
    }
}
?>
