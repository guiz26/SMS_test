<?php 
header('Content-Type: application/json');
require('sms.php');

if (isset($_POST['phoneInput']) && isset($_POST['messageInput'])) {
    if ($_POST['messageInput'] != "" && $_POST['phoneInput'] != "") {
        // On peux rajouter des controles pour avoir le bon format ou sinon utliser un framework
        $message    = $_POST['messageInput'];
        $phone      = $_POST['phoneInput'];

        $sms = new SMS;
        if ($sms->statut) {
            $send = $sms->send($phone, $message);
            if ($send) {
                echo json_encode($sms->check_statut($send));
            } else {
                echo json_encode(array('error' => 'Erreur de connexion'));
            }
        } else {
            echo json_encode(array('error' => 'Erreur de connexion'));
        }
    } else {
        echo json_encode(array('error' => 'Erreur de saisie'));
    }
} elseif (isset($_GET['id_message'])) {
    // Pour debug de message
    $sms = new SMS;
    var_dump($sms->connexion->get_status($_GET['id_message']));
} elseif (isset($_GET['cancel_message'])) {
    $sms = new SMS;
    var_dump($sms->connexion->cancel_message($_GET['cancel_message']));
} elseif (isset($_GET['numberclean'])) {
    $sms = new SMS;
    var_dump($sms->connexion->clean_number($_GET['numberclean']));
}