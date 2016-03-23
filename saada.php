<?php
require_once("api.php");
$tuvasta = $_POST["tuvasta"];
if ($tuvasta == 0){
	$item = array(
	"id" => $_POST["id"],
	"kasutaja" => $_POST["kasutaja"],
	"tuvasta" => $_POST["tuvasta"]);
	
	salvesta_API($item);
	}
else {
	$item = array(
	"id" => $_POST["id"],
	"kasutaja" => $_POST["kasutaja"],
	"tuvasta" => $_POST["tuvasta"]);
	
	muuda_API($item);
	}
?>
<?php
if ($tuvasta == 0) {
  print '<div class="container">
           <form role="form" action="form.php" method="get"><br><br>
             <p><b>Õpilane on lisatud!</b></p>
             <button type="submit" class="btn btn-default">Tagasi</button>
           </form>
           </div>';
}
else {
  print '<div class="container">
           <form role="form" action="index.php" method="get"><br><br>
             <p><b>Õpilase andmed muudetud!</b></p>
             <button type="submit" class="btn btn-default">Tagasi</button>
           </form>
         </div>';
}
?>
