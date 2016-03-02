<?php
require_once("api.php");
$item = vaata_API($_GET["key"]);
?>
<!DOCTYPE html>

<html>
<head>
<form action="saada.php" method="POST" align="center">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
      <br>
      <h1>-_-</h1>
    </div>
          <center><input type="text" value="<?=$item["kasutaja"]?>" name="kasutaja" id="kasutaja"><br>
		  <input type="hidden" id="kontroll" name="kontroll" value=0>
          <button class="OK" type="submit" title="OK"><em>Muuda</em></button></center><br>
      </form>
    </div>
    
  </header>
</div>

</body>
</html>