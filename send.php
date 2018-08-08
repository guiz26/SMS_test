<?php require('functions.php');

if(isset($_POST['phoneInput']) && isset($_POST['messageInput'])) {
    $message = $_POST['messageInput'];
    $phone = $_POST['phoneInput'];
    $functions = new Functions;
    var_dump($functions->send($message, $phone));
}