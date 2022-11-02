<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deconnexion(Admin)</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   
</head>

<style>
    .row{
        position: absolute;
        top: 20%;
        left:15%;
        border-radius: 50px;
    }
</style>
<body>

<?php 
if(isset($_GET)){
    if(@$_GET['answer'] == 'yes'){
        header("location: ../index.php");
    }
    elseif(@$_GET['answer'] == 'no'){
        header("location:../main.php");
    }
}
?>

<div class="alert alert-danger" role="alert">
 
<br>
<h4>Voulez-vous réellement vous deconnecter? </h4>
<form action="deconnexionAdmin.php" method="get">
<div class="form-check">
  
  <input type="hidden" name="user" value="prof">
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
<?php require "footerContact.php" ?>