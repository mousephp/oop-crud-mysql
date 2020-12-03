<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP CRUD Operations using PDO Extension </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</head>


<?php 
// include database connection file
include_once("function.php");

// Object creation
$insertdata=new CrudOpp;
if(isset($_POST['insert']))
{
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $emailid=$_POST['emailid'];
    $contactno=$_POST['contactno'];
    $address=$_POST['address'];

//Function Calling
    $sql=$insertdata->insert($fname,$lname,$emailid,$contactno,$address);
    if($sql){
// Message for successfull insertion
        echo "<script>alert('Ghi chèn thành công');</script>";
        echo "<script>window.location.href='../index.php'</script>";
    }else{
// Message for unsuccessfull insertion
        echo "<script>alert('Đã xảy ra lỗi. Vui lòng thử lại');</script>";
        echo "<script>window.location.href='../index.php'</script>";
    }
}
?>

<body>

    <div class="container">    
        <div class="col-md-12 ">
            <h2 class="text-center btn-primary">Inert database</h2>
            <form name="insertrecord" method="post">
                <div class="row ">
                    <div class="col-md-4 col-md-offset-2"><b>First Name</b>
                        <input type="text" name="firstname" class="form-control" required>
                    </div>
                    <div class="col-md-4 col-md-offset-0"><b>Last Name</b>
                        <input type="text" name="lastname" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-2"><b>Email id</b>
                        <input type="email" name="emailid" class="form-control" required>
                    </div>
                    <div class="col-md-4 col-md-offset-0"><b>Contactno</b>
                        <input type="text" name="contactno" class="form-control" maxlength="20" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2"><b>Address</b>
                        <textarea class="form-control" name="address" required></textarea>
                    </div>
                </div>
                <div class="row" style="margin-top:1%">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <input type="submit" name="insert" value="Insert" class="btn-danger">
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>