<?php

include("model_projects.php");		

class ctrl_projects {

	function __construct(){

		global $model;
		$model = new model_projects();

	}

	function getProjects(){

		global $model;

		$stm = $model->getProjectsDB();

		$zero = 0;
		$stm->bind_param('d', $zero);
		$stm->execute();
		$stm->store_result();

		return $stm;

	}

}

?>