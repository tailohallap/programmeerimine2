<?php
require_once("api.php");
$item = vaata_API($_GET["key"]);
kustuta_API($item);
?>

  <form role="form" action="index.php" method="get"><br><br>
  
  <p><b>Eemaldatud!</b></p>
  
  <button type="submit" class="btn btn-default">Tagasi</button>
  </form>