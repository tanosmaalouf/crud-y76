<?php
include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);

$insert = $db->insert("Products", [
   "name"     => $_POST['name'],
   "price" => $_POST['price'],
   "expiry"      => $_POST['expiry'],
   "rating"    => $_POST['rating']
]);

echo "data saved";
