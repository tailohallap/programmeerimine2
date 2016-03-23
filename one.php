<?php
	require_once("api.php");
	$item = vaata_kasutajat_API($_GET["key"]);
?>
<table align="left" cellpadding="5" rowspan="5">
	<tr>
		<th>Kasutaja: </th>
		<td><?=$item["kasutaja"]?></td>
	</tr>
</table>
