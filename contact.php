<?php $name = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['email'];
$formcontent="From: $name \n Message: $message";
$recipient = "quentin.goujon@hotmail.fr";
$subject = "Contact depuis portfolio";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Erreur!");
echo "Merci!";
?>