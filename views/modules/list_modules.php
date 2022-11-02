
<?php
    require '../../controllers\ctrl_modules.php';
    $people = Ctrl_Modules::index();

    if (@$_GET['user'] == 'etudiant'):?>
  
  <!doctype html>
<html lang="en">
  <head>
    <title>Nos modules</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"rel="nofollow" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
    <link rel="stylesheet" href="../../assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
  </head>
  <style>
   
  </style>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-info" style="padding-left: 9%">
  <a class="nav-link navbar-brand" href="http://localhost/projet%20Examen/accueilEtudiant.php">Acceuil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link navbar-brand" href="http://localhost/projet%20Examen/views/modules/list_modules.php?user=etudiant">Liste des modules<span class="sr-only"></span></a>
      </li>
    </ul>
  </div>
</nav>  
      <div class="container">
        <div class="card mt-5">
          <div class="card-header">
            <h2 class>Les Modules</h2>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <tr>
                <th>Nom</th>
                <th>Code</th>
                <th>Crédit</th>
                <th>Heure</th>
              </tr>
              <?php
              foreach($people as $person): ?>
                <tr>
                  <td><?= $person->nom; ?></td>
                  <td><?= $person->code; ?></td>
                  <td><?= $person->credit; ?></td>
                  <td><?= $person->heure; ?></td>
                </tr>
              <?php endforeach; ?>
            </table>
          </div>
        </div>
      </div>

<?php elseif(@$_GET['user'] == 'prof'): ?>
  <!doctype html>
<html lang="en">
  <head>
    <title>Nos modules</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"rel="nofollow" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
    <link rel="stylesheet" href="../../assets/bootstrap-5.1.3-dist/css/bootstrap.min.css">
  </head>
  <style>
   
  </style>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-info" style="padding-left: 9%">
  <a class="nav-link navbar-brand" href="http://localhost/projet%20Examen/accueilProf.php">Acceuil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link navbar-brand" href="http://localhost/projet%20Examen/views/modules/list_modules.php?user=prof">Liste des modules<span class="sr-only"></span></a>
      </li>
    </ul>
  </div>
</nav>  
      <div class="container">
        <div class="card mt-5">
          <div class="card-header">
            <h2 class>Les Modules</h2>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <tr>
                <th>Nom</th>
                <th>Code</th>
                <th>Crédit</th>
                <th>Heure</th>
              </tr>
              <?php
              foreach($people as $person): ?>
                <tr>
                  <td><?= $person->nom; ?></td>
                  <td><?= $person->code; ?></td>
                  <td><?= $person->credit; ?></td>
                  <td><?= $person->heure; ?></td>
                </tr>
              <?php endforeach; ?>
            </table>
          </div>
        </div>
      </div>



<?php else:?>


    

<?php require '..\..\utils\headermodule.php'; ?>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2 class>Les Modules</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>Nom</th>
          <th>Code</th>
          <th>Crédit</th>
          <th>Heure</th>
        </tr>
        <?php
        foreach($people as $person): ?>
          <tr>
            <td><?= $person->nom; ?></td>
            <td><?= $person->code; ?></td>
            <td><?= $person->credit; ?></td>
            <td><?= $person->heure; ?></td>
            <td>
              <a href="./edit_modules.php?id=<?= $person->id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="./delete_modules.php?id=<?= $person->id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require '..\..\utils\footermodule.php'; ?>


<?php endif; 
die()?>
