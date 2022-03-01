<?php
    //Ce fichier permet de gérer tout ce qui est connexion/déconnexion
    //elle vérifie si la requête est du POST OU GET la page par défaut est celle de connexion

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_REQUEST['action'])){
            if($_REQUEST['action']=="connexion"){
                //echo "traiter le formulaire de connexion";
                $log = $_POST['login'];
                $passw= $_POST['password'];
                connexion($log, $passw);
            }
        }
    }

    if($_SERVER["REQUEST_METHOD"]=="GET"){
        if(isset($_REQUEST['action'])){
            if($_REQUEST['action']=="connexion.php"){
                echo "charger la page de connexion";
            }
        }else{
            echo "charger la page de connexion";
        }
    }


    //US1
    function connexion(String $login, String $password): void{
        $error=[];
        champ_obligatoire('login', $login, $error, "Login Obligatoire!")
    }