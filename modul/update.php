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
//Object
$updatedata=new CrudOpp;
if(isset($_POST['update']))
{
// Get the userid
    $userid=intval($_GET['id']);
// Posted Values
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $emailid=$_POST['emailid'];
    $contactno=$_POST['contactno'];
    $address=$_POST['address'];
//Function Calling
    $sql=$updatedata->update($fname,$lname,$emailid,$contactno,$address,$userid);
// Mesage after updation
    echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
    echo "<script>window.location.href='../index.php'</script>";
}
?>

<body>
  <div class="col-md-12 ">
    <h2 class="text-center btn-primary">Update database</h2>
    <?php
    // Get the userid
    $userid=intval($_GET['id']);
    $onerecord=new CrudOpp;
    $sql=$onerecord->getonerecord($userid);
    $cnt=1;
    while($row=mysqli_fetch_array($sql))
    {
      ?>
      <form name="insertrecord" method="post">
        <div class="row">
            <div class="col-md-4  col-md-offset-2"><b>First Name</b>
                <input type="text" name="firstname" value="<?php echo htmlentities($row['FirstName']);?>" class="form-control" required>
            </div>
            <div class="col-md-4  col-md-offset-0"><b>Last Name</b>
                <input type="text" name="lastname" value="<?php echo htmlentities($row['LastName']);?>" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4  col-md-offset-2"><b>Email id</b>
                <input type="email" name="emailid" value="<?php echo htmlentities($row['EmailId']);?>" class="form-control" required>
            </div>
            <div class="col-md-4  col-md-offset-0"><b>Contactno</b>
                <input type="text" name="contactno" value="<?php echo htmlentities($row['ContactNumber']);?>" class="form-control" maxlength="10" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8  col-md-offset-2"><b>Address</b>
                <textarea class="form-control" name="address" required><?php echo htmlentities($row['Address']);?></textarea>
            </div>
        </div>
    <?php } ?>
    <div class="row" style="margin-top:1%">
        <div class="col-md-8 col-md-offset-2 text-center">
            <input type="submit" name="update" value="Update" class="btn-danger">
        </div>
    </div>
</form>
</div>


</body>
</html>