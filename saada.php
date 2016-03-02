<?php
$kasutaja = $_POST['kasutaja'];


$data = json_decode(file_get_contents("data.txt"), 2);

$data[] = array("kasutaja" => $kasutaja);

file_put_contents("data.txt", json_encode($data));

header("Location: index.php");

?>


