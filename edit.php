<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
$retrieve = $db->retrieve("products/$id");
$data = json_decode($retrieve, 1);

?>
<form method="post" action="action_edit.php">
   <table border="0" width="500">
      <tr>
         <td>Products</td>
         <td>:</td>
         <td><input type="text" name="product" value="<?php echo $data['name']?>"></td>
      </tr>
      <tr>
         <td>Price</td>
         <td>:</td>
         <td><input type="text" name="price" value="<?php echo $data['price']?>"></td>
      </tr>
      <tr>
         <td>Expiry</td>
         <td>:</td>
         <td><input type="text" name="year" value="<?php echo $data['year']?>"></td>
      </tr>
      <tr>
         <td>Rating</td>
         <td>:</td>
         <td><input type="text" name="rating" value="<?php echo $data['rating']?>"></td>
      </tr>
      <tr>
         <td>
            <input type="hidden" name="id" value="<?php echo $id?>">
            <input type="submit" value="SAVE">
         </td>
      </tr>
   </table>
</form>

