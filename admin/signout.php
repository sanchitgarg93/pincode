<?php
ob_start();
session_start();
?>
<?php
 unset($_SESSION['name']);
  header("location:index.php");
?>