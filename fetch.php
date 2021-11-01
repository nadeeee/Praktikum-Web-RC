<?php

//fetch.php Pengoperan data menjadi table akan dibuat di sini

include("database_connection.php");

$query = "SELECT * FROM person";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
<table class="table caption-top">
	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Prodi</th>
		<th>Angkatan</>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
';
if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr>
			<td width="20%">'.$row["nim"].'</td>
			<td width="20%">'.$row["name"].'</td>
			<td width="20%">'.$row["prodi"].'</td>
			<td width="20%">'.$row["angkatan"].'</td>
			<td width="10%">
				<button type="button" name="edit" class="btn btn-primary btn-xs edit" id="'.$row["id"].'">Edit</button>
			</td>
			<td width="10%">
				<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Delete</button>
			</td>
		</tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="4" align="center">Data not found</td>
	</tr>
	';
}
$output .= '</table>';
echo $output;
?>