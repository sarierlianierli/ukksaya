<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		
		$statement = $connection->prepare("
			INSERT INTO tb_headline (headline) 
			VALUES (:headline)
		");
		$result = $statement->execute(
			array(				
				':headline'			=>	$_POST["headline"]
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
			"UPDATE tb_headline 
			SET headline = :headline WHERE id_headline = :id_headline
			"
		);
		$result = $statement->execute(
			array(
				':headline'			=>	$_POST["headline"],
				':id_headline'		=>	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>