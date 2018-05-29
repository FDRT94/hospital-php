<?php

require(ROOT . "model/ClientModel.php");

function index()
{
	$clients = getAllClients();

	render("clients/index", ["clients" => $clients]);	
}

function create()
{
	render("clients/create");
}

function createSave()	
{
	if (createClient()) {
		header("location:" . URL . "clients");	
		exit();
	} else {
		//er is iets fout gegaan..
		header("location:" . URL . "error/error_db"); 
		exit();
		
	}
}

function edit($id)
{
	$clients = getClient($id);

	render("clients/edit", array(
		"clients" => $clients
	));
}

function editSave($id)
{
	if (editClient($id)) {
		header("location:" . URL . "clients");
		exit();
	} else {
		header("location:" . URL . "error/error_404");
		exit();
	}
}

function delete($id)
{
	if (deleteClient($id)) {
		header("location:" . URL . "clients/index");
		exit();
	} else {
		//er is iets fout gegaan..
		header("location:" . URL . "error/error_delete");
		exit();	
	}
}
