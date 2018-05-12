<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if(isset($_REQUEST['id'])) {
      $id = $_REQUEST['id'];
      $q = "DELETE FROM ksiazka WHERE id = $id";
      $db = new Mysqli('localhost', 'root', '', 'biblioteka');
      $db->query($q);
      echo "Usunięto z bazy książek pozycję o id: $id";
    }
     ?>
     <a href="index.php">Wróć</a>
  </body>
</html>
