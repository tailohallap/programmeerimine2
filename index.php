<?php
require("vorm.php");
?>

<?php
	
	$items = json_decode(file_get_contents("data.txt"), 2);
	if(is_array($items)) {
		foreach($items as $key => $item) {
	?>
			<table><tr>
				<td><a href="one.php?key=<?=$key?>"><?=$item["kasutaja"]?></a></td>
        
			</tr>
	</table>
	<?php
		}
	}
	?>









