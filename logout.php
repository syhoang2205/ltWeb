<?php require_once 'Init.php' ?>
<?php 
  unset($_SESSION['userId']);
  header('Location: index.php');
?>