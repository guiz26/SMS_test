<?php
    require 'No2SMS/No2SMS_Client.class.php';
    require 'config.php';
    // un petite class pour traiter les réponses
    class SMS {
        public $connexion;
        public $statut;
        function __construct(){
            $this->connexion = $client = new No2SMS_Client(PARAMS['LOGIN'], base64_decode(PARAMS['PASSWORD']));
            $this->statut = $this->connexion->auth();
        }

        public function send($phone, $message){
            $response = $this->connexion->send_message($phone, $message);
            if (!empty($response) && isset($response[0][2])) {
                return $response[0][2]; // id du message
            } else {
                return FALSE;
            }
        }

        public function check_statut($id_message) {
            // Par manque de temps j'ai accepté que 
            // le statut 9 (Pending) est un sms envoyé mais on peux allez plus loin dans 
            // la gestion des statuts mais faudrais en voir plus sur l'api
            $response = $this->connexion->get_status($id_message);
            if (!empty($response)) {
                if ($response[0][1]['sent_status'] == 1) {
                    return array('success' => 'Message envoyé avec succès');
                } elseif ($response[0][1]['sent_status'] == 9) {
                    return array('success' => 'Message envoyé avec succès');
                } else {
                    return array('warning' => 'Statut du message : '.$response[0][1]['sent_status_text']);
                }

                return array('error' => 'Statut du sms non dispo');
            }
            return array('error' => 'Statut du sms non dispo');
        }
    }