<?php 

function getAllPatients()
{
	$db = openDatabaseConnection();

	$sql = "SELECT `patients`. *,

			`species` . `species_description`,
			`clients` . `client_firstname`,
			`clients` . `client_lastname`
			FROM `patients`


	JOIN `species` ON `patients` . `species_id` = `species` . `species_id` 
	JOIN `clients` ON `patients` . `client_id` = `clients` . `client_id` 
	";

	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getPatient($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients WHERE patient_id = :patient_id LIMIT 1";

	$query = $db->prepare($sql);
	$query->execute(array(
		":patient_id" => $id
	));

	$db = null;

	return $query->fetch();
}

// function createClient()
// {
//     $firstname = isset($_POST["client_firstname"]) ? $_POST["client_firstname"] : null;		
//     $lastname = isset($_POST["client_lastname"]) ? $_POST["client_lastname"] : null;
		
// 	if ($firstname === null || $lastname === null) {
// 		return false;
// 	}
	
// 	//Database verbinding maken
// 	$db = openDatabaseConnection();

	
// 	 $sql = "INSERT INTO `clients` (client_firstname,client_lastname) VALUES (:client_firstname,:client_lastname)";


// 	$query = $db->prepare($sql);
// 	($query->execute(array(
//         ":client_firstname" => $firstname,
//         ":client_lastname" => $lastname
        
// 	)));

// 	//Database verbinding sluiten
// 	$db = null;

// 	return true;
// }

// function editClient($id=null)
// {
// 	$firstname = isset($_POST["client_firstname"]) ? $_POST["client_firstname"] : null;
// 	$lastname = isset($_POST["client_lastname"]) ? $_POST["client_lastname"] : null;

	
// 	if ($id === null || $firstname === null || $lastname === null)  {
// 		return false;
// 	}

// 	$db = openDatabaseConnection();

// 	$sql = "UPDATE clients
// 			SET 
// 			client_firstname = :client_firstname,
// 			client_lastname = :client_lastname


// 			WHERE client_id = :client_id" 
// 			;

// 	$query = $db->prepare($sql);

// 	$query->execute(array(
// 		":client_id" => $id,
// 		":client_firstname" => $firstname,
// 		":client_lastname" => $lastname
	
// 	));

// 	$db = null;

// 	return true;
// }

// function deleteClient($id)
// {
// 	if ($id === '') {
// 		return false;
// 	}

// 	$db = openDatabaseConnection();

// 	$sql = "DELETE FROM clients WHERE client_id = :client_id";

// 	$query = $db->prepare($sql);
// 	$query->execute(array(
// 		":client_id" => $id
// 	));

// 	$db = null;

// 	return true;
// } -->