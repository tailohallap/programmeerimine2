<?php
date_default_timezone_set("Europe/Tallinn");
  
function salvesta_API($item) {
    $kasutaja = $item["kasutaja"];
    $id = file_get_contents("id.txt");
	$data = json_decode(file_get_contents("data.json"), 2);
	$data[] = array(
		"id" => $id,
		"kasutaja" => $kasutaja);
	file_put_contents("data.json", json_encode($data, JSON_PRETTY_PRINT));
	$id = $id+0;
	file_put_contents("id.txt", $id);
	 
	return true;
}

function vaata_API($key) {
	$item = json_decode(file_get_contents("data.json"), true);
	$item = $item[$key];
	return $item;
	
}

function muuda_API($item) {
	$id = $item["id"];
    $kasutaja = $item["kasutaja"];
	
	$id = intval($id);
	$data = json_decode(file_get_contents("data.json"), true);
	$data[$id] = array(
		"id" => $id,
		"kasutaja" => $kasutaja);
	file_put_contents("data.json", json_encode($data, JSON_PRETTY_PRINT));
	return true;
}
function kustuta_API($id) {
	$array1 = json_decode(file_get_contents("data.json"), true);
	$array2 = $array1[$id];
	$id_nr = intval($array2["id"]);
	unset($array1[$id_nr]);
	file_put_contents("data.json", json_encode($array1));
	
}

function kasutaja_API() {
	$items = json_decode(file_get_contents("data.json"), 2);
	if(is_array($items)) {
		foreach($items as $key => $item)
		
	return $items;
	}
}
?>