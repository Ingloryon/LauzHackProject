<?php
if( $_POST )
{
  //$con = mysql_connect('localhost','ToBeRemoved','');
  $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8','ToBeRemoved','');

  /*if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }*/


  $users_prenom = $_POST['Prenom'];
  $users_nom = $_POST['Nom'];
  $users_mail = $_POST['Mail'];
  $users_password = $_POST['Password'];
  $users_ID = 69420;

  $users_prenom = mysql_real_escape_string($users_prenom);
  $users_nom = mysql_real_escape_string($users_nom);
  $users_mail = mysql_real_escape_string($users_mail);
  $users_password = mysql_real_escape_string($users_password);
  $users_ID = mysql_real_escape_string($users_ID);

  $query = '
  INSERT INTO `users` (`Prenom`, `Nom`, `Mail`, `Password`,
        `ID`) VALUES ($users_prenom, $users_nom,
        $users_mail, $users_password, $users_ID)';


  $bdd -> exec($query);

  echo "<h2>Thank you for your Comment!</h2>";
}
?>