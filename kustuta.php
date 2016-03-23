<?php
  require_once("api.php");
  $item = vaata_kasutajat_API($_GET["key"]);
  kustuta_kasutaja_API($item);
?>
<form role="form" action="index.php" method="get">
  <p><b>Eemaldatud!</b></p>
  <button type="submit" class="btn btn-default">Tagasi</button>
</form>
