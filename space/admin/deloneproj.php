<?php

include("ctrl_deloneproj.php");

$id = $_GET['id'];
$projID = $_GET['projID'];

$controller = new ctrl_deloneproj();
$controller->delOneProj($id, $projID);

?>