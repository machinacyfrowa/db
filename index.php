<?php
$db = new Mysqli('localhost', 'root', '', 'biblioteka');
$db->set_charset("utf8");
echo "<pre>";
$q = "SELECT * FROM ksiazka";
//$q = "DELETE FROM ksiazka WHERE id=3";
$wynik = $db->query($q);
//while($wiersz = $wynik->fetch_row()){
echo "<table border=1>";
echo "<tr><th>id</th><th>Tytuł</th><th>Autor</th><th>Rok wydania</th><th>Edycja</th><th>Usuń</th></tr>";
while($wiersz = $wynik->fetch_assoc()){
  echo "<tr>";
  foreach ($wiersz as $kolumna => $wartosc) {
    echo "<td>". $wartosc . "</td>";
  }
  $id = $wiersz['id'];
  echo "<td>
        <a href=\"ksiazka.php?id=$id\">
          <button>Edycja</button>
        </a>
        </td>";
  echo "<td>
        <a href=\"usun.php?id=$id\">
        <button>Edycja</button>
        </a>
        </td>";
  echo "</tr>";
}
echo "</table>";



?>
