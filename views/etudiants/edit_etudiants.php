<?php
require "..\..\utils\db.php";
$id = $_GET['id'];
$sql = 'SELECT * FROM etudiants WHERE id=:id';
$statement = db_connect()->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['nom'])  && isset($_POST['prenom']) && isset($_POST['age']) && isset($_POST['cin']) && isset($_POST['niveau']) && isset($_POST['email']) ) {
  $name = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $age = $_POST['age'];
  $cin = $_POST['cin'];
  $niveau = $_POST['niveau'];
  $email = $_POST['email'];
  $sql = 'UPDATE etudiants SET nom=:nom,prenom=:prenom,age=:age,cin=:cin,niveau=:niveau,email=:email WHERE id=:id';
  $statement = db_connect()->prepare($sql);
  if ($statement->execute([':nom' => $name, ':prenom' => $prenom, ':age' => $age, ':cin' => $cin, ':niveau' => $niveau,':email' => $email, ':id' => $id])) {
    header("Location: ../../views/etudiants/list_etudiants.php");
  }
}
require '..\..\controllers\ctrl_etudiants.php';

 ?>
<?php require '..\..\utils\headeretudiant.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Mise à jour étudiants</h2>
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
          <input value="<?= $person->nom; ?>" type="text" name="nom" id="nom" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="prenom">Prénom</label>
          <input value="<?= $person->prenom; ?>" type="text" name="prenom" id="prenom" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="cin">Age</label>
          <input value="<?= $person->age; ?>" type="number" name="age" id="age" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="cin">Numéro de CIN</label>
          <input value="<?= $person->cin; ?>" type="number" name="cin" id="cin" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="niveau">Niveau</label>
          <input value="<?= $person->niveau; ?>" type="text" name="niveau" id="niveau" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" value="<?= $person->email; ?>" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Mettre à jour</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require '..\..\utils\footeretudiant.php'; ?>
