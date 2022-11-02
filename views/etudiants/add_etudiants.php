<?php
require "..\..\utils\db.php";

$message = '';
if (isset ($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age'])  && isset($_POST['cin']) && isset($_POST['niveau']) && isset($_POST['email']) ){
  /*$nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $cin = $_POST['cin'];
  $telephone = $_POST['telephone'];
  $email = $_POST['email'];*/
  $sql = 'INSERT INTO etudiants(nom,prenom,age,cin,niveau,email) VALUES (:nom,:prenom,:age,:cin,:niveau,:email)';
  $statement = db_connect()->prepare($sql);
  $statement->bindValue(':nom',$_POST['nom']);
  $statement->bindValue(':prenom',$_POST['prenom']);
  $statement->bindValue(':age',$_POST['age']);
  $statement->bindValue(':cin',$_POST['cin']);
  $statement->bindValue(':niveau',$_POST['niveau']);
  $statement->bindValue(':email',$_POST['email']);
  if($statement->execute()){
    $message = 'data inserted successfully';
    header("Location: ../../views/etudiants/list_etudiants.php");
  }
  else{
    $message = "Oups!!";
  }
}
?>

<?php require '..\..\utils\headeretudiant.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Ajouter étudiants</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="POST">
        <div class="form-group">
          <label for="nom">Nom</label>
          <input type="text" name="nom" id="nom" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="prenom">Prénom</label>
          <input type="text" name="prenom" id="prenom" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="age">Age</label>
          <input type="text" name="age" id="age" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="cin">Numéro de CIN</label>
          <input type="text" name="cin" id="cin" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="telephone">Niveau</label>
          <input type="text" name="niveau" id="telephone" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="email">Adresse Email</label>
          <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Ajouter étudiants</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require '..\..\utils\footeretudiant.php'; ?>
