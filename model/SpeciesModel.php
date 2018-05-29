<?php 

function getAllSpecies()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species";

	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getSpecie($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species WHERE species_id = :species_id LIMIT 1";

	$query = $db->prepare($sql);
	$query->execute(array(
		":species_id" => $id
	));

	$db = null;

	return $query->fetch();
}

function createSpecie()
{
	$species = isset($_POST["species_description"]) ? $_POST["species_description"] : null;		
		
	if ($species === null) {
		return false;
	}
	
	//Database verbinding maken
	$db = openDatabaseConnection();

	
	 $sql = "INSERT INTO `species` (species_description) VALUES (:species_description)";


	$query = $db->prepare($sql);
	($query->execute(array(
		":species_description" => $species
	)));

	//Database verbinding sluiten
	$db = null;

	return true;
}

function editSpecie($id=null)
{
	$description = isset($_POST["species_description"]) ? $_POST["species_description"] : null;

	
	if ($id === null || $description === null)  {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "UPDATE species
			SET 
			species_description = :species_description
			
			WHERE species_id = :species_id" 
			;

	$query = $db->prepare($sql);

	$query->execute(array(
		":species_id" => $id,
		":species_description" => $description
	
	));

	$db = null;

	return true;
}

function deleteSpecie($id)
{
	if ($id === '') {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "DELETE FROM species WHERE species_id = :species_id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":species_id" => $id
	));

	$db = null;

	return true;
}