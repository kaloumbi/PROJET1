<?php

   define("ROOT", str_replace("public/index.php","",$_SERVER["SCRIPT_FILENAME"]));
   //var_dump(ROOT);

//var_dump(dirname(dirname(__FILE__)));
//Chemin sur dossier src contenant les controllers et les modeles
    define("PATH_SRC",ROOT."src/");
//Chemin sur dossier contenant les templates ou vues du projet
    define("PATH_VIEW",ROOT."templates/");
//Chemin qui contient le fichier json
    define("PATH_DB",ROOT."data/db.json");
//Chemin de mes requêtes GET OU POST et l'URL utilisé pour envoyer les requêtes
    define("WEB_ROOT", "http://localhost:8000/");