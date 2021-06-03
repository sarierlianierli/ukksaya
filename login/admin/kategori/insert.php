<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		
		$statement = $connection->prepare("
			INSERT INTO tb_kategori (kategori) 
			VALUES (:kategori)
		");
		$result = $statement->execute(
			array(				
				':kategori'			=>	$_POST["kategori"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}
	if($_POST["operation"] == "Edit")
	{
		
		$statement = $connection->prepare(
			"UPDATE tb_kategori 
			SET kategori = :kategori WHERE id_kategori = :id_kategori
			"
		);
		$result = $statement->execute(
			array(
				':kategori'			=>	$_POST["kategori"],
				':id_kategori'		=>	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>