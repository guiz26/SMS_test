<?php
    require 'No2SMS/No2SMS_Client.class.php';
    require 'config.php';

    class Functions {
        public $connexion;
        function __construct(){
            $this->connexion = $client = new No2SMS_Client(PARAMS['LOGIN'], base64_decode(PARAMS['PASSWORD']));
            $this->connexion->auth();
        }

        public function send($message, $phone){
            return $this->connexion->send_message($message, $phone);
        }
    }