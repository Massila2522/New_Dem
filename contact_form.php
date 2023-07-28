<?php

   $connection = mysqli_connect('localhost','root','','newdem');

   if(isset($_POST['envoyer'])){
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $email = $_POST['email'];
      $sujet = $_POST['sujet'];
      $message = $_POST['message'];
    
      $request = " insert into contact(nom, prenom, email, sujet, message) values('$nom','$prenom','$email','$sujet', '$message') ";
      mysqli_query($connection, $request);

      header('location:contact.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>