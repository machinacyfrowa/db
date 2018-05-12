<?php
$login = "jkowalski";
$haslo = md5("tajneHaslo");

$db = new Mysqli('localhost', 'root', '', 'autoryzacja');

$q = "SELECT * FROM uzytkownicy WHERE login = '$login' AND haslo = '$haslo'";
//echo $q;
$result = $db->query($q);
if($result->num_rows === 1) echo "Zalogowano poprawnie";
else echo "Błędny login lub hasło";
?>
