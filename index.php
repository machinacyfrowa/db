<?php
$db = new Mysqli('localhost', 'root', '', 'biblioteka');
echo "<pre>";
$q = "SELECT * FROM ksiazka";
//$q = "DELETE FROM ksiazka WHERE id=3";
$wynik = $db->query($q);
//while($wiersz = $wynik->fetch_row()){
while($wiersz = $wynik->fetch_assoc()){
  foreach ($wiersz as $kolumna => $wartosc) {
    echo $kolumna . " = ". $wartosc . " ";
  }
  echo "<br>";
}

?>
