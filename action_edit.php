<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_POST['id'];
$update = $db->update("Products", $id, [
   "name"     => $_POST['name'],
   "price" => $_POST['price'],
   "exipry"      => $_POST['exipry'],
   "rating"    => $_POST['rating']
]);

echo "data updated";