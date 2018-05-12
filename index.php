<?php
$db = new Mysqli('localhost', 'root', '', 'biblioteka');
$db->set_charset("utf8");
echo "<pre>";
$q = "SELECT * FROM ksiazka";
//$q = "DELETE FROM ksiazka WHERE id=3";
$wynik = $db->query($q);
//while($wiersz = $wynik->fetch_row()){
echo "<table border=1>";
echo "<tr><th>id</th><th>Tytuł</th><th>Autor</th><th>Rok wydania</th></tr>";
while($wiersz = $wynik->fetch_assoc()){
  echo "<tr>";
  foreach ($wiersz as $kolumna => $wartosc) {
    echo "<td>". $wartosc . "</td>";
  }
  echo "</tr>";
}
echo "</table>";
?>
