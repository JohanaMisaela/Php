<?php  require('db.php') ?>

<?php if(@$_POST['user'] == 'etudiant'): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message envoyé</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    

<?php
                  
             if(isset($_POST)){
                    
                    $sendMessage= db_connect()->prepare('UPDATE `contacts` SET `messages_reçus` = :messages WHERE `contacts`.`id` = :id');
                    $sendMessage-> bindValue(':messages',$_POST['message'],PDO::PARAM_STR);
                    $sendMessage-> bindValue(':id',$_POST['id'],PDO::PARAM_INT);
                    $sendMessage->execute();
                    if($sendMessage){
                    
                    echo '<div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Message envoyé !!!</h4>
                    <p>Le message a bel et bien été envoyé. Pour le verifier, aller dans la table contact de la base de données et consulter les messages reçus</p>
                    <hr>
                    <a class="btn btn-danger" href="http://localhost/projet%20Examen/views/contacts/list_contact.php?user=etudiant" role="button">Revenir à Accueil</a>
                  
                  </div>';
                    
                    
                    
                    }else{ echo "une erreur est survenue";}
                } 
?> 
</body>
</html>


<?php elseif(@$_POST['user'] == 'prof'): ?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message envoyé</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    

<?php
                  
             if(isset($_POST)){
                    
                    $sendMessage= db_connect()->prepare('UPDATE `contacts` SET `messages_reçus` = :messages WHERE `contacts`.`id` = :id');
                    $sendMessage-> bindValue(':messages',$_POST['message'],PDO::PARAM_STR);
                    $sendMessage-> bindValue(':id',$_POST['id'],PDO::PARAM_INT);
                    $sendMessage->execute();
                    if($sendMessage){
                    
                    echo '<div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Message envoyé !!!</h4>
                    <p>Le message a bel et bien été envoyé. Pour le verifier, aller dans la table contact de la base de données et consulter les messages reçus</p>
                    <hr>
                    <a class="btn btn-danger" href="http://localhost/projet%20Examen/views/contacts/list_contact.php?user=prof" role="button">Revenir à Accueil</a>
                  
                  </div>';
                    
                    
                    
                    }else{ echo "une erreur est survenue";}
                } 
?> 
</body>
</html>

<?php else: ?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message envoyé</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    
<?php
                  
             if(isset($_POST)){
                    
                    $sendMessage= db_connect()->prepare('UPDATE `contacts` SET `messages_reçus` = :messages WHERE `contacts`.`id` = :id');
                    $sendMessage-> bindValue(':messages',$_POST['message'],PDO::PARAM_STR);
                    $sendMessage-> bindValue(':id',$_POST['id'],PDO::PARAM_INT);
                    $sendMessage->execute();
                    if($sendMessage){
                    
                    echo '<div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Message envoyé !!!</h4>
                    <p>Le message a bel et bien été envoyé. Pour le verifier, aller dans la table contact de la base de données et consulter les messages reçus</p>
                    <hr>
                    <a class="btn btn-danger" href="http://localhost/projet%20Examen/views/contacts/list_contact.php" role="button">Revenir à Accueil</a>
                  
                  </div>';
                    
                    
                    
                    }else{ echo "une erreur est survenue";}
                } 
?> 
</body>
</html>

<?php endif; ?>




