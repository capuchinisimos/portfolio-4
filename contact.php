
<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['sname']))
$sname = $_POST['sname'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];


$content="From: $name \n $sname \n ";
$recipient = "capuchinisimos@gmail.com";
$mailheader = "From: $email \r\n message: $message \r\n";
mail($recipient,  $content, $mailheader) or die("Error!");
echo "Merci $name, votre message a été envoyé! Je vous contacterai dans les prochaines 24h.";
?>