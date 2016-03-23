<?php
	require_once("api.php");
	$item = vaata_API($_GET["key"]);
?>
<!DOCTYPE html>
<html>
<body>
	<form action="saada.php" method="POST" align="center">
		<p><center><input type="text" value="<?=$item["kasutaja"]?>" name="kasutaja" id="kasutaja"></center></p>
		<input type="hidden" id="tuvasta" name="tuvasta" value=0>
		<p><center><button class="OK" type="submit" title="OK"><em>Muuda</em></button></center></p>
	</form>
</body>
</html>
