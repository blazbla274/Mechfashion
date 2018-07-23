<?php

session_start();
error_reporting(0);


if(!(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']))) {
    
    header("Location: index.php"); 
    exit;
}

$validation = true;

//sprawdzanie poprawności imienia
if($_POST['name'] == "") {
    
    $_SESSION['nameError'] = true;
    $_SESSION['name'] = "";
    $validation = false;
    $_SESSION['mailSendingError'] = true;
    $_SESSION['mailSendingRaport'] = "Set your name.";
} else  {
    
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['nameError'] = false;
    $name = $_POST['name'];
}

//sprawdzanie porpawności emailu
$email = $_POST['email'];
$emailS = filter_var($email, FILTER_SANITIZE_EMAIL);

if(($_POST['email'] == "") || ((filter_var($email,FILTER_VALIDATE_EMAIL)) == false) || ($email != $emailS)) {
    
    $_SESSION['emailError'] = true;
    $_SESSION['email'] = "";
    $validation = false;
    $_SESSION['mailSendingError'] = true;
    $_SESSION['mailSendingRaport'] = "Check if your email is correct.";
} else {
    
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['emailError'] = false;
}

//sprawdza czy nie zapomniano wiadomości
if($_POST['message'] == "") {
    
    $_SESSION['messageError'] = true;
    $_SESSION['message'] = "";
    $validation = false;
    $_SESSION['mailSendingError'] = true;
    $_SESSION['mailSendingRaport'] = "You forgot about message.";
} else {
    
    $_SESSION['message'] = $_POST['message'];
    $_SESSION['messageError'] = false;
    $message = $_POST['message'];
}
        

if(!$validation) {
    
    header("Location: colorGallery.php"); 
    exit;
}

$tytul = $name;

$headers = 'From: ' . $email . "\r\n" .
           'Reply-To: ' . $email . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

try {
        
    $sended = mail('contact@mechfashion.com', $tytul, $message, $headers);
    if($sended) {}
    else throw new Exception(); 
} 
catch (Exception $e) {
        
    $_SESSION['mailSendingError'] = true;
    $_SESSION['mailSendingRaport'] = "Error sending email";
    header("Location: colorGallery.php"); 
    exit;
}

$_SESSION['mailSendingError'] = false;
$_SESSION['mailSendingRaport'] = "Sent successfully";
header("Location: index.php"); 
?>