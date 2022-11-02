<?php require "utils/header_login.php"; ?>

<?php 
if(isset($_GET)){
    if(@$_GET['answer'] == 'yes'){
        echo '<div class="row" style= "width:70%;border: 3px solid black;">
        <div style="margin-left: 15%"><h2 class="card-title">AUTHENTIFIEZ-VOUS EN TANT QU ` ADMINISTRATEUR</h2><br><br></div>
        
            <div class="col-sm-6">
            <div class="card text-bg-primary mb-3" style="width: 75%;margin-left:10%">
              <div class="card-body">
                <h3 class="card-title">SE CONNECTER(en tant que administrateur)</h3>
                <p class="card-text" style="font-size:22px">Vous avez déja un compte ?? Verifier votre identité en cliquant sur "Se connecter"</p>
                <a href="views/auths/connexionAdmin.php" class="btn btn-light" style="margin-left:30%">Se connecter</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card text-bg-warning mb-3" style="width: 75%; margin-left:15%">
              <div class="card-body">
                <h3 class="card-title">S ` INSCRIRE(en tant que administrateur)</h3>
                <p class="card-text" style="font-size:22px">Pas encore de compte ??<br> Cliquer sur "S ` inscrire"  pour en créer un !</p>
                <a href="views/auths/inscriptionAdmin.php" class="btn btn-light" style="margin-left:35%">S ` inscrire</a>
              </div>
            </div>
          </div>
        </div>';
        die();
    }
    elseif (@$_GET['answer'] == 'no') {
        header("location: index.php");
        die();
    }
    else{
        
    }
}
?>

<div class="alert alert-danger" role="alert">
 RAPPEL : En vous connectant en tant qu'administrateur, vous avez le droit de consulter, modifier, ajouter et supprimer des informations concernant les modules, les étudiants, les profs et les contacts. <br>
 Cependant, souvenez-vous... DES GRANDS POUVOIRS IMPLIQUENT DE GRANDES RESPONSABILITES !
<br>
<br>
<h4>Voulez-vous continuer? </h4>
<form action="indexAuth.php" method="get">
<div class="form-check">
  <input class="form-check-input" type="radio" name="answer" id="flexRadioDefault1" value="yes">
  <label class="form-check-label" for="flexRadioDefault1">
    OUI
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="answer" id="flexRadioDefault2" value="no"  >
  <label class="form-check-label" for="flexRadioDefault2">
    NON
  </label>
</div>
<input class="btn btn-danger" type="submit" value="Envoyer la reponse">
</form>
</div>




<?php require "utils/footerContact.php" ?>