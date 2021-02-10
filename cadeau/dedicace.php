<?php include('../function.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadeau 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css" media="all">
</head>
<body>
    <div class="card-block d-flex justify-content-center mt-5 p-5">
    <div style=" width: 600px; padding-top:10px; padding-bottom:10px;border: 12px solid white; text-align: center;background: black;"><font color="white"><center><h3>Dedicace </h3></center></font>
    <font color="red"><h6>Ton message s'affichera à l'accueil</h6></font>
    <div class="row justify-content-center p-5">
        <div class="col-lg-6">
        <form name="ajout" method="POST">
                <div class="form-group">
                    <div class="form-group">
                        <font color="white"><label for="pseudo">Pseudo :</label></font>
                        <input type="text" id="pseudo" name="pseudo" class="form-control">
                    </div>
                    <font color="white"><label for="message">Message :</label></font>
                    <input type="text" id="message" name="message" class="form-control">
                </div>
                <center><button class="btn btn-primary" type="submit" name="ajouter" value="OK">Ajouter</button></center>
</div>
</div> 
            </form>
            <a href="../index.php"><button class="btn btn-danger">Retour</button></a>
            <?php
                add();
            ?>
</body>
</html>