<?php 
include_once("function.php");

//Deletion
if(isset($_GET['del']))
{
// Geeting deletion row id
	$rid=$_GET['del'];
	$deletedata=new CrudOpp;
	$sql=$deletedata->delete($rid);
	if($sql)
	{
		// Message for successfull insertion
		echo "<script>alert('Record deleted successfully');</script>";
		echo "<script>window.location.href='../index.php'</script>";
	}
}
?>