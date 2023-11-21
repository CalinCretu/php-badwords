<?php 
$user_name = $_POST['user_name']. ' ' . $_POST['user_last_name'];
var_dump($_POST);
?>
<h1>
  Ciao Mondo!
</h1>
<p>Mi chiamo <?php echo $user_name; ?></p>