<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $id = $_REQUEST['id'];

    $db = new Mysqli('localhost', 'root', '','biblioteka');
    if(isset($_REQUEST['autor']) && isset($_REQUEST['tytul'])) {
      //zapisz do bazy
      $tytul = $_REQUEST['tytul'];
      $autor = $_REQUEST['autor'];
      $q = "UPDATE ksiazka SET tytul = '$tytul', autor = '$autor' WHERE id = $id";
      $db->query($q);
    }

    $q = "SELECT * FROM ksiazka WHERE id = $id";
    $result = $db->query($q);
    $ksiazka = $result->fetch_assoc();
    $tytul = $ksiazka['tytul'];
    $autor = $ksiazka['autor'];
    echo "
      <form action=\"ksiazka.php\">
        <input type=\"hidden\" name=\"id\" value=\"$id\">
        Tytul: <input type=\"text\" name=\"tytul\" value=\"$tytul\"><br>
        Autor: <input type=\"text\" name=\"autor\" value=\"$autor\"><br>
        <input type=\"submit\">
      </form>
    ";


    ?>
    <a href="index.php">Wróć</a>
  </body>
</html>
