<?php 
include_once('config.php');

class CrudOpp{

	function __construct(){
		$con = new mysqli('localhost', 'root', '', 'phpgurukul_oop_crud');
		$this->dbh=$con;
		//Kiểm tra kết nối
		if ($con->connect_error) {
			die('kết nối không thành công ' . $connect->connect_error);
		}
		//tham khao kn csdl:http://www.w3programmers.com/login-registration-using-oop/
	}

//Insert
	public function insert($fname,$lname,$emailid,$contactno,$address)
	{
		$insertrecord=mysqli_query($this->dbh,"INSERT INTO tblusers(FirstName,LastName,EmailId,ContactNumber,Address) VALUES ('$fname','$lname','$emailid','$contactno','$address')");
		return $insertrecord;
	}
//Show
	public function getdata()
	{
		$result=mysqli_query($this->dbh,"SELECT * FROM tblusers");
		return $result;
	}
//Show id record
	public function getonerecord($userid)
	{
		$oneresult=mysqli_query($this->dbh,"SELECT * FROM tblusers WHERE id=$userid");
		return $oneresult;
	}
//Update
	public function update($fname,$lname,$emailid,$contactno,$address,$userid)
	{
		$updaterecord=mysqli_query($this->dbh,"UPDATE  tblusers SET FirstName='$fname',LastName='$lname',EmailId='$emailid',ContactNumber='$contactno',Address='$address' WHERE id='$userid' ");
		return $updaterecord;
	}
//Delete
	public function delete($rid)
	{
		$deleterecord=mysqli_query($this->dbh,"DELETE from tblusers WHERE id=$rid");
		return $deleterecord;
	}
}

?>