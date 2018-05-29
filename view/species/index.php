<h2>Species</h2>
	<table>
		<thead>
			<tr>
				<th>Description</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>

	<tbody>
<?php 
		foreach ($species as $specie) {
?>
	<tr>
		<td><?= $specie["species_description"]?></td>
		
		
		<td><a href="<?= URL ?>species/edit/<?=$specie['species_id']?>">Edit</a></td>
		<td><a href="<?= URL ?>species/delete/<?=$specie['species_id']?>">Delete</a></td>
	</tr>
<?php 
	}
?>
	
	</tbody>
</table>	
<p><a href="<?= URL ?> species/create">Create</a></p>