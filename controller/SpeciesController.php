<?php

require(ROOT . "model/SpeciesModel.php");

function index()
{ 
	$species = getAllSpecies();
	
	render("species/index", ["species" => $species]);	
}

function create()
{
	render("species/create");
}

function read($id)
{
	$species = getSpecie($id);

	render("species/read", array(
		"species" => $species
	));
}

function createSave()	
{
	if (createSpecie()) {
		header("location:" . URL . "species");	
		exit();
	} else {
		//er is iets fout gegaan..
		header("location:" . URL . "error/error_db"); 
		exit();
		
	}
}

function edit($id)
{
	$species = getSpecie($id);

	render("species/edit", array(
		"species" => $species
	));
}

function editSave($id)
{
	if (editSpecie($id)) {
		header("location:" . URL . "species");
		exit();
	} else {
		header("location:" . URL . "error/error_404");
		exit();
	}
}

function delete($id)
{
	if (deleteSpecie($id)) {
		header("location:" . URL . "species/index");
		exit();
	} else {
		//er is iets fout gegaan..
		header("location:" . URL . "error/error_delete");
		exit();	
	}
}
