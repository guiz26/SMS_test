<?php 
header('Content-Type: application/json');
require('functions.php');

if(isset($_POST['phoneInput']) && isset($_POST['messageInput'])) {
    if ($_POST['messageInput'] != "" && $_POST['phoneInput'] != "") {
        $message    = $_POST['messageInput'];
        $phone      = $_POST['phoneInput'];
        
        $functions = new Functions;
        if ($functions->statut) {
            $send_statut = $functions->send($message, $phone);
            echo json_encode(array('send_statut' => $send_statut));
        } else {
            echo json_encode(array('error' => 'Erreur de connexion'));
        }
    } else {
        echo json_encode(array('error' => 'Erreur de saisie'));
    }
}