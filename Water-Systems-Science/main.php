<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  $id = htmlspecialchars($_POST['username']);
  $pass  = htmlspecialchars($_POST['password']);

  echo  $id, ' ', $pass;
?>
