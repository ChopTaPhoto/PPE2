<?php
/* DEBUT DE L'INITIALISATION DE LA CONNEXION DB */
    try{
        // $bdd = new PDO('mysql:host=xd3r5.myd.infomaniak.com;dbname=xd3r5_coralie', "xd3r5_coralie", "1GVNINLyRSQq");
        $bdd = new PDO('mysql:host=localhost;dbname=PPE', "root", "root");
        $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }
    catch(PDOException $e){
        echo "Impossible de se connecter à la base de données";
        die();
    }
    /* FIN DE L'INITIALISATION DE LA CONNEXION DB */
?>
