<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> Nowy użytkownik </h1>
    <form action="#" method="post">
      Login: <input type="text" name="login"><br>
      Hasło: <input type="password" name="haslo"><br>
      <input type="submit" value="Zarejestruj">
    </form>
  </body>
</html>

<?php
if(isset($_REQUEST['login']) && isset($_REQUEST['haslo']))
{
  $login = $_REQUEST['login'];
  $haslo = md5($_REQUEST['haslo']);

  $db = new Mysqli('localhost', 'root', '', 'autoryzacja');

  $q = "INSERT INTO uzytkownicy (login, haslo) VALUES ('$login', '$haslo')";
  //echo $q;
  $result = $db->query($q);
  if($result) echo "Zarejestrowano poprawnie";
  else echo "Nastąpił błąd w czasie rejestracji";

}
?>
