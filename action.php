<?php

//action.php Berisikan Insert, Update, Delete Data

include('database_connection.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == "insert")
	{
		$query = "
		INSERT INTO person (nim, name, prodi, angkatan) VALUES ('".$_POST["nim"]."', '".$_POST["name"]."', '".$_POST["prodi"]."', '".$_POST["angkatan"]."')
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Inserted...</p>';
	}
	if($_POST["action"] == "fetch_single")
	{
		$query = "
		SELECT * FROM person WHERE id = '".$_POST["id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['nim'] = $row['nim'];
			$output['name'] = $row['name'];
			$output['prodi'] = $row['prodi'];
			$output['angkatan'] = $row['angkatan'];

		}
		echo json_encode($output);
	}
	if($_POST["action"] == "update")
	{
		$query = "
		UPDATE person 
		SET nim = '".$_POST["nim"]."', 
		name = '".$_POST["name"]."' ,
		prodi = '".$_POST["prodi"]."' ,
		angkatan = '".$_POST["angkatan"]."' 

		WHERE id = '".$_POST["hidden_id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Updated</p>';
	}
	if($_POST["action"] == "delete")
	{
		$query = "DELETE FROM person WHERE id = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Deleted</p>';
	}
}

?>