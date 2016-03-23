<?php 
	require("vorm.php"); 
?>

<html>
<body>
<table align="left" cellpadding="5" rowspan="5"> 
<tr> 
         <th>Kasutaja</th> 
         <th>Vaata</th> 
 	 <th>Muuda</th> 
 	 <th>Eemalda</th> 
</tr> 

<?php 
	require_once("api.php"); 
	$items = kasutaja_API(); 
 	 
	foreach ((array) $items as $key => $item) { 
?> 

<tr> 
	<td><?=$item["kasutaja"]?></td> 
	<td><a href="one.php?key=<?=$key?>"><?="Vaata"?></a></td> 
	<td><a href="muuda.php?key=<?=$key?>"><?="Muuda"?></a></td> 
	<td><a href="kustuta.php?key=<?=$key?>"><?="Eemalda"?></a></td> 
</tr> 

<?php 
} 
?> 

</table>
</body>
</html>
