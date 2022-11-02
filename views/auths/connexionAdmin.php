<?php require "../../controllers/ctrl_auths.php" ?>
<?php $save_ajout = $object_auths -> loginAdmin(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link rel="stylesheet" href="../../assets/css/index.css">
    <link rel="stylesheet" href="../../assets/css/index1.css">
    <link rel="stylesheet" href="../../assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<style>

a#lien_inscription{
    font-size: 22px;
    text-decoration: none;
    font-weight: 900;
    color: black;
    font-style: italic;
}
a#lien_inscription:hover{
    font-size: 27px;
    text-decoration: none;
    font-weight: 500;
    padding: 5px
}
</style>

<body>


    <div id="container">
        <div id="space"></div>
        <div id="logo"></div>
        <h1 class="titre">Se connecter(Administrateur)</h1>
        <div id="content">
            <form action="connexionAdmin.php" method="post" style="width:70%; margin-left:15%;text-align:center">
            <div class="form-group">
                <input style="text-align:center" type="email" name="email" placeholder="Saisir votre Email" id="email" class="form-control" required>
            </div><br>
            <div class="form-group">
                 <input style="text-align:center" type="password" name="password" placeholder="Saisir votre mot de passe"  id="email" class="form-control" required>
            </div><br>
            <div class="form-group">
             <button style="text-align:center" type="submit" class="btn btn-info">Se connecter</button>
             </div>
                
                
                <div id="space_down" style="text-align: center;margin-top: 10px"><h4>Pas encore de compte?  <a id="lien_inscription" href="inscriptionAdmin.php"> Créez-en un !!</a></h4></div>
                <div id="space_down"></div> 
            </form>
        </div>
    </div>


    <?php require "../../utils/footerContact.php"; ?>


