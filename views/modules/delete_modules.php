<?php
require "..\..\utils\db.php";
$id = $_GET['id'];
$sql = 'DELETE FROM modules WHERE id=:id';
$statement = db_connect()->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: ../../views/modules/list_modules.php");
}