<?php

echo "<body style='background-color:pink'>";
$item = json_decode(file_get_contents("data.txt"), 2);
$item = $item[$_GET["key"]];

?>

<table align="center" cellpadding="7" rowspan="7">
	<tr>
		<br>
	<br>
<br>
<br>
<br>
<br>
<br>
<br>
		<center>
		<h1><?=$item["kasutaja"]?>&nbsp;on sinu nimi :)</h1>
		</center>
		</tr>
</table>

