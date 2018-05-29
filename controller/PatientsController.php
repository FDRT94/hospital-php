<?php

require(ROOT . "model/patientsModel.php");

function index()
{
	$patients = getAllPatients();

	render("patients/index", ["patients" => $patients]);	
}

// function create()
// {
// 	render("patients/create");
// }

// function createSave()	
// {
// 	if (createPatients()) {
// 		header("location:" . URL . "patients");	
// 		exit();
// 	} else {
// 		//er is iets fout gegaan..
// 		header("location:" . URL . "error/error_db"); 
// 		exit();
		
// 	}
// }

// function edit($id)
// {
// 	$patients = getPatients($id);

// 	render("patients/edit", array(
// 		"patients" => $patients
// 	));
// }

// function editSave($id)
// {
// 	if (editPatient($id)) {
// 		header("location:" . URL . "patients");
// 		exit();
// 	} else {
// 		header("location:" . URL . "error/error_404");
// 		exit();
// 	}
// }

// function delete($id)
// {
// 	if (deletePatient($id)) {
// 		header("location:" . URL . "patients/index");
// 		exit();
// 	} else {
// 		//er is iets fout gegaan..
// 		header("location:" . URL . "error/error_delete");
// 		exit();	
// 	}
// }
