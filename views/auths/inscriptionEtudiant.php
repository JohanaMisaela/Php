<?php require "../../controllers/ctrl_auths.php" ?>
<?php $save_ajout = $object_auths -> saveEtudiant(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/index.css">
    <link rel="stylesheet" href="../../assets/css/index1.css">
    <link rel="stylesheet" href="../../assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <title>S'inscrire</title>
</head>
<style>
a#lien_connexion{
    font-size: 18px;
    text-decoration: none;
    font-weight: 900;
    color: black;
    font-style: italic;
}
a#lien_connexion:hover{
    font-size: 20px;
    text-decoration: none;
    font-weight: 500;
    padding: 5px
}
</style>

<body>
    <div id="container">
        <div id="space"></div>
    
        <div id="logo">

        </div>
        <h1 class="titre">S'inscrire(Etudiant)</h1>
        <div id="content">


        <form method="post" action="" style="width:70%; margin-left:15%;text-align:center">
        <div class="form-group" >
          <input style="text-align:center" type="text" name="nom" placeholder="Nom" id="nom" class="form-control" required>
        </div>
        <div class="form-group" >
          <input style="text-align:center" type="text" name="prenom" placeholder="Prenom" id="nom" class="form-control" required>
        </div>
        <div class="form-group" >
          <input style="text-align:center" type="text" name="age" placeholder="Votre age" id="nom" class="form-control" required>
        </div>
        <div class="form-group" >
          <input style="text-align:center" type="text" name="cin" placeholder="Votre CIN" id="nom" class="form-control" required>
        </div>
        <div class="form-group" >
          <input style="text-align:center" type="text" name="niveau" placeholder="Votre Niveau" id="nom" class="form-control" required>
        </div>
        <div class="form-group">
          <input style="text-align:center" type="email" name="email" placeholder="Saisir votre Email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
          <input style="text-align:center" type="password" name="password" placeholder="Saisir votre mot de passe"  id="email" class="form-control" required>
        </div>
        <div class="form-group">
          <input style="text-align:center" type="password"  name="password_retype" placeholder="Re-saisir votre mot de passe" id="email" class="form-control" required>
        </div>
        <div class="form-group">
          <button style="text-align:center" type="submit" class="btn btn-info">Creer un compte</button>
        </div>
        <h4>Vous avez déjà un compte ?<a id="lien_connexion" href="connexionEtudiant.php"> Cliquer ici pour vous connecter</a></h4>
      </form>
                
        <div id="space_down"></div>
            </form>
        </div>
    </div>
</body>
</html>