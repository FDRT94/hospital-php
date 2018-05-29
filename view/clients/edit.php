<form action="<?= URL ?>clients/editSave/<?= $clients["client_id"] ?>" method="POST">
	<input type="text" name="client firstname"  placeholder="Voornaam" value="<?= $clients["client_firstname"] ?>">
    <input type="text" name="client lastname"  placeholder="Achternaam" value="<?= $clients["client_lastname"] ?>">

	<input type="hidden" name="id" value="<?= $clients["client_id"] ?>">

	<input type="submit" value="Opslaan">
</form>