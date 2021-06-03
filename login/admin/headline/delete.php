<?php

include('db.php');
include("function.php");

if(isset($_POST["user_id"]))
{
	
	$statement = $connection->prepare(
		"DELETE FROM tb_headline WHERE id_headline = :id_headline"
	);
	$result = $statement->execute(
		array(
			':id_headline'	=>	$_POST["user_id"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Data Deleted';
	}
}



?>