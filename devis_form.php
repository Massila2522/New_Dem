<?php

   $connection = mysqli_connect('localhost','root','','newdem');

   if(isset($_POST['envoyer'])){
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

      $request = " insert into devis(nom, prenom, email, telephone, rue, complement, code_postal, ville, etat, pays, logement, ville_arrivee, date_demenagement) values('$nom','$prenom','$email','$telephone', '$rue', '$complement', '$code_postal', '$ville', '$etat', '$pays', '$logement', '$ville_arrivee', '$date_demenagement') ";
      mysqli_query($connection, $request);

      header('location:devis.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>