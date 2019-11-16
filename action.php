<?php
if( $_POST )
{
  $con = mysql_connect("localhost","Mateo","real_password");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("test", $con);

  $users_prenom = $_POST['Prenom'];
  $users_nom = $_POST['Nom'];
  $users_mail = $_POST['Mail'];
  $users_password = $_POST['Password'];
  $users_ID = $_POST['ID'];

  $users_prenom = mysql_real_escape_string($users_prenom);
  $users_nom = mysql_real_escape_string($users_nom);
  $users_mail = mysql_real_escape_string($users_mail);
  $users_password = mysql_real_escape_string($users_password);
  $users_ID = mysql_real_escape_string($users_ID);

  $query = "
  INSERT INTO `test`.`users` (`Prenom`, `Nom`, `Mail`, `Password`,
        `ID`) VALUES ('$users_prenom', '$users_nom',
        '$users_mail', '$users_password', '$users_ID');";

  mysql_query($query);

  echo "<h2>Thank you for your Comment!</h2>";

mysql_close($con);
}
?>