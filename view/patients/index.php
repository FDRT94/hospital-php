<h2>Patiënts</h2>
<table>
	<thead>
		<tr>
			<th>Patient ID</th>
			<th>Patient Name</th>
			<th>Patient Status</th>
			<th>Species ID</th>
			<th>client ID</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
<tbody>
		
<?php 
	foreach ($patients as $patient ) {
?>

	<tr>
		<td><?= $patient["patient_id"]?></td>
		<td><?= $patient["patient_name"]?></td>
		<td><?= $patient["patient_status"]?></td>


		<td><?= $patient["species_description"]?></td>
		<td><?= $patient["client_firstname"]?> <?= $patient["client_lastname"]?></td>

		<td class="center"><a href="<?= URL ?>patients/edit/<?=$patient['patient_id']?>">edit</a></td>
		<td class="center"><a href="<?= URL ?>patients/delete/<?=$patient['patient_id']?>">delete</a></td>
	</tr>

<?php 
	}
?>
	
</tbody>
</table>

	<p><a href="<?= URL ?>patients/create">Create</a></p>	