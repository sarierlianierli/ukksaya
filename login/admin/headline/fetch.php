<?php
include('db.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM tb_headline ";
if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE headline LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY id_headline DESC ';
}
if($_POST["length"] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
	
	$sub_array = array();
	$sub_array[] = $row["headline"];
	$sub_array[] = '<center><button type="button" name="update" id_headline="'.$row["id_headline"].'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i> </button> &nbsp;&nbsp; <button type="button" name="delete" id_headline="'.$row["id_headline"].'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i> </button></center>';
	
	$data[] = $sub_array;
}


$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);
?>