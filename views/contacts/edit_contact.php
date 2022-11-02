<?php require "../../utils/headerContact.php"; ?>

<?php require "../../controllers/ctrl_contacts.php";
$object_contact = new Ctrl_Contacts();
$liste_contact= $object_contact -> index();
$modif = $object_contact ->update();

?>


<div class="title" style="text-align: center; margin-top:5%"><h1>Modifier un contact</h1> </div>
<table style="width:70%; margin-left:15%;margin-top:5%" class="table table-striped table-hover">
  <thead>
    <tr class="table-primary">
      
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Fonction</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
    <?php foreach($liste_contact as $k =>  $p){
        echo ' <tr>
                
                <td>'.$p['nom'].'</td>
                <td>'.$p['prenom'].'</td>
                <td>'.$p['fonction'].'</td>
                <td><a class="btn btn-outline-primary" href="../../utils/form_modif.php?id='.$p['id'].'" role="button">Modifier</a></td>
            </tr> ' ;}?>
    
  </tbody>
</table>

<?php require "../../utils/footerContact.php"; ?>


        
        
        
        
        
        
        
        
        