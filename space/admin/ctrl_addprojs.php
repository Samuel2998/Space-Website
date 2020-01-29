<?php

include("model_addprojs.php");		

class ctrl_addprojs {

	function __construct(){

		global $model;
		$model = new model_addprojs();

	}

	function addProjs($name, $photo){

		global $model;

		$stm = $model->getProjectItemsDB($id);

		$zero = 0;
		$stm->bind_param('dd', $zero, $id);
		$stm->execute();
		$stm->store_result();

		return $stm;

	}

}

?>