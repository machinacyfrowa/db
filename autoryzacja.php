<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="#" method="post">
      Login: <input type="text" name="login"><br>
      Hasło: <input type="password" name="haslo"><br>
      <input type="submit" value="Zaloguj">
    </form>
  </body>
</html>

<?php
if(isset($_REQUEST['login']) && isset($_REQUEST['haslo']))
{
  $login = $_REQUEST['login'];
  $haslo = md5($_REQUEST['haslo']);

  $db = new Mysqli('localhost', 'root', '', 'autoryzacja');

  $q = "SELECT * FROM uzytkownicy WHERE login = '$login' AND haslo = '$haslo'";
  //echo $q;
  $result = $db->query($q);
  if($result->num_rows === 1) echo "Zalogowano poprawnie";
  else echo "Błędny login lub hasło";
}
?>
