<?php

include("ctrl_delprojs.php");

$id = $_GET['id'];

$controller = new ctrl_delprojs();
$controller->delOneProjs($id);

?>