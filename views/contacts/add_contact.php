<?php require "../../utils/headerContact.php"; ?>

<?php require "../../controllers/ctrl_contacts.php";?>

<div class="title" style="text-align: center; margin-top:5%"><h1>Ajouter un contact</h1> </div>
<form class="row g-3" action="add_contact.php" enctype="multipart/form-data" method="post" style="width:50%; margin-left:25%;margin-top:0%">
  <div class="col-md-6">
    <label for="" class="form-label">Nom</label>
    <input type="text" class="form-control" id="" name="nom" required>
  </div>
  <div class="col-md-6">
    <label for="" class="form-label">Prenom</label>
    <input type="" class="form-control" id="" name="prenom" required>
  </div>
  <div class="mb-3">
    <label class="form-label" for="">Fonction</label>
    <input type="text" class="form-control" id="" name="fonction" required>
    
  </div>
  <div class="mb-3">
    <label class="form-label" for="">Email</label>
    <input type="text" class="form-control" id="" name="email" required>
  </div>
  <div class="mb-3">
    <label class="form-label" for="">Telephone</label>
    <input type="text" class="form-control" id="" name="telephone" required>
  </div>
  <div class="mb-3">
    <label for="formFile" class="form-label">Photo</label>
    <input class="form-control" type="file" id="" name="photo" >
  </div>
  <button type="submit" class="btn btn-secondary">Submit</button>
</form>

<?php
$object_contact = new Ctrl_Contacts();
$save_ajout= $object_contact -> save();
?>

<?php require "../../utils/footerContact.php"; ?>












