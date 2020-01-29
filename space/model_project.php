<?php

include("db_connect.php");

class model_project{

	function __construct(){

		global $conn;
		$db = new db_connect();
		$conn = $db->getConn();

	}

	function getProjectItemsDB(){

		global $conn;

		$stm = $conn->prepare("SELECT pic_id, pic_title, pic_text, pic_photo FROM picproject WHERE pic_status=? AND pic_projs_id=? ORDER BY pic_datetime DESC");

		return $stm;

	}

}

?>