<?php
require "..\..\utils\db.php";
$id = $_GET['id'];
$sql = 'SELECT * FROM profs WHERE id=:id';
$statement = db_connect()->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['cin']) && isset($_POST['matiere']) && isset($_POST['niveau']) && isset($_POST['telephone']) && isset($_POST['email']) ) {
  $name = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $cin = $_POST['cin'];
  $matiere = $_POST['matiere'];
  $niveau = $_POST['niveau'];
  $tel = $_POST['telephone'];
  $email = $_POST['email'];
  $sql = 'UPDATE profs SET nom=:nom,prenom=:prenom,cin=:cin,matiere=:matiere,niveau=:niveau,telephone=:telephone,email=:email WHERE id=:id';
  $statement = db_connect()->prepare($sql);
  if ($statement->execute([':nom' => $name, ':prenom' => $prenom, ':cin' => $cin ,':matiere' => $matiere,':niveau' => $niveau, ':telephone' => $tel,':email' => $email, ':id' => $id])) {
    header("Location: ../../views/profs/list_profs.php");
  }
}
require '..\..\controllers\ctrl_profs.php';

 ?>
<?php require '..\..\utils\headerprof.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update person</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="nom">Nom</label>
          <input value="<?= $person->nom; ?>" type="text" name="nom" id="nom" class="form-control">
        </div>
        <div class="form-group">
          <label for="prenom">Prénom</label>
          <input value="<?= $person->prenom; ?>" type="text" name="prenom" id="prenom" class="form-control">
        </div>
        <div class="form-group">
          <label for="cin">Numéro de CIN</label>
          <input value="<?= $person->cin; ?>" type="number" name="cin" id="cin" class="form-control">
        </div>
        <div class="form-group">
          <label for="cin">Matière enseignée</label>
          <input value="<?= $person->matiere; ?>" type="text" name="matiere" id="matiere" class="form-control">
        </div>
        <div class="form-group">
          <label for="cin">Niveau enseigné</label>
          <input value="<?= $person->niveau; ?>" type="text" name="niveau" id="niveau" class="form-control">
        </div>
        <div class="form-group">
          <label for="telephone">Numéro de Téléphone</label>
          <input value="<?= $person->telephone; ?>" type="number" name="telephone" id="telephone" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" value="<?= $person->email; ?>" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update person</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require '..\..\utils\footerprof.php'; ?>
