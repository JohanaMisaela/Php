<?php require ('fonction.php')?>


<?php
    #require "../../utils/db.php";
    $req = db_connect()->query('SELECT photo FROM contacts WHERE id='.$_GET['id'].'');
    $reqData = $req->fetch();
    $id = $_GET['id'];
     
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details contact</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<style>
  div.card{
    position: absolute;
    top: 10%;   
  } 


    
</style>

<body>


<?php if(@$_GET['user'] == "etudiant"): ?>
<div class="title" style="text-align: center; margin-top:0%"><h1>Details du contact</h1> </div>
        <div class="card" style="width: 24rem; left: 38%">
            <img src="../image/<?php echo $reqData['photo']; ?>" class="card-img-top" alt="...">
        <div class="card-body" style="width:25rem">
            <h5 class="card-title" style="text-align:center; font-size:20px"> <?php getNameInDatabase($_GET['id'])?><br><?php getFirstNameInDatabase($_GET['id'])?>  </h5>
            <p class="card-text"  style="text-align:center; font-size:17px"><b><u>Fonction </u> :</b> <?php getFunctionInDatabase($_GET['id'])?><br><b><u>Telephone </u> :</b> <?php getTelephoneInDatabase($_GET['id'])?><br><b><u>Email </u> :</b> <?php getMailInDatabase($_GET['id'])?> </p>
        <form action="sendMessage.php" method="post">
            <div class="form-floating" style="width: 20rem;resize:none" >
            <textarea name="message" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px;margin-left:5%"></textarea>
            <input type="hidden" name="user" value="etudiant">
            <input type="hidden" name="id" value= "<?= $_GET['id'] ?>">
            <label for="floatingTextarea2" style="left:5%">Ecrire un message</label>
            </div>
            <button type="submit" class="btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-left:75%"> Envoyer</button>
            <a class="btn btn-danger" href="http://localhost/projet%20Examen/views/contacts/list_contact.php?user=etudiant" role="button">Retour</a>

        </form>
        </div>
        </div>     
        
</body>
</html>

<?php  elseif(@$_GET['user'] == 'prof'): ?>

<div class="title" style="text-align: center; margin-top:0%"><h1>Details du contact</h1> </div>
        <div class="card" style="width: 24rem; left: 38%">
            <img src="../image/<?php echo $reqData['photo']; ?>" class="card-img-top" alt="...">
        <div class="card-body" style="width:25rem">
            <h5 class="card-title" style="text-align:center; font-size:20px"> <?php getNameInDatabase($_GET['id'])?><br><?php getFirstNameInDatabase($_GET['id'])?>  </h5>
            <p class="card-text"  style="text-align:center; font-size:17px"><b><u>Fonction </u> :</b> <?php getFunctionInDatabase($_GET['id'])?><br><b><u>Telephone </u> :</b> <?php getTelephoneInDatabase($_GET['id'])?><br><b><u>Email </u> :</b> <?php getMailInDatabase($_GET['id'])?> </p>
        <form action="sendMessage.php" method="post">
            <div class="form-floating" style="width: 20rem;resize:none" >
            <textarea name="message" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px;margin-left:5%"></textarea>
            <input type="hidden" name="user" value="prof">
            <input type="hidden" name="id" value= "<?= $_GET['id'] ?>">
            <label for="floatingTextarea2" style="left:5%">Ecrire un message</label>
            </div>
            <button type="submit" class="btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-left:75%"> Envoyer</button>
            <a class="btn btn-danger" href="http://localhost/projet%20Examen/views/contacts/list_contact.php?user=prof" role="button">Retour</a>

        </form>
        </div>
        </div> 
        </body>
</html> 

<?php  else: ?>
    <div class="title" style="text-align: center; margin-top:0%"><h1>Details du contact</h1> </div>
        <div class="card" style="width: 24rem; left: 38%">
            <img src="../image/<?php echo $reqData['photo']; ?>" class="card-img-top" alt="...">
        <div class="card-body" style="width:25rem">
            <h5 class="card-title" style="text-align:center; font-size:20px"> <?php getNameInDatabase($_GET['id'])?><br><?php getFirstNameInDatabase($_GET['id'])?>  </h5>
            <p class="card-text"  style="text-align:center; font-size:17px"><b><u>Fonction </u> :</b> <?php getFunctionInDatabase($_GET['id'])?><br><b><u>Telephone </u> :</b> <?php getTelephoneInDatabase($_GET['id'])?><br><b><u>Email </u> :</b> <?php getMailInDatabase($_GET['id'])?> </p>
        <form action="sendMessage.php" method="post">
            <div class="form-floating" style="width: 20rem;resize:none" >
            <textarea name="message" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px;margin-left:5%"></textarea>
            <input type="hidden" name="id" value= "<?= $_GET['id'] ?>">
            <label for="floatingTextarea2" style="left:5%">Ecrire un message</label>
            </div>
            <button type="submit" class="btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-left:75%"> Envoyer</button>
            <a class="btn btn-danger" href="http://localhost/projet%20Examen/views/contacts/list_contact.php" role="button">Retour</a>

        </form>
        </div>
        </div> 
        </body>
</html> 

<?php endif; ?>