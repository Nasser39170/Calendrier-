<?php

// <!-- -----------------------------  CONNEXION BDD ----------------------------------- -->

function bdd(){
    $bdd = new PDO('mysql:host=sql.alls-heberg.fr;dbname=nassere19322;charset=utf8', 'nassere19322', 'ZQ9OCUIN5!nuFRB');
    return $bdd;
}

// <!-- --------------------------- FIN CONNEXION ---------------------------------------- -->


// ----------------------------------- AFFICHER TEXTE DB ------------------------------------

function afficher(){
    $bdd=bdd();
    // REQUEST
    $sql = 'SELECT * FROM `dedicace`';

    // PREPARATION OF REQUEST
    $query = $bdd->prepare($sql);

    // EXECUTE OF REQUEST
    $query->execute();

    $reponse = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach($reponse as $produit){
                   
    echo " 	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;<font color='red'>".$produit['pseudo']."</font> : ".$produit['message']." ";
                        
        }
    }


// -----------------------------------------------------------------------------------------

// ------------ ADD DEDICACE ----------------------

function add(){
    $bdd=bdd();
    if(isset($_POST['ajouter'])&&!empty($_POST['pseudo'])&&!empty($_POST['message'])){
    $req = bdd()->prepare('INSERT INTO dedicace (id, pseudo, message) VALUES (NULL, :pseudo, :message)');
    $req->execute(array(
    'pseudo' => $_POST['pseudo'],
    'message' => $_POST['message'],));

    echo 'La nouvelle dedicace à etait ajouter';
    echo '<script language="Javascript">
                document.location.replace("dedicace.php");
                </script>';
    }
}




// --------------- FIN DEDICACE ----------------------------
?>