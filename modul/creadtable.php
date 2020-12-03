<?php 
//phpgurukul_oop_crud
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpgurukul_oop_crud";/* put your database name here */

/* Create connection */
$conn = mysqli_connect($servername, $username, $password, $dbname);
/* Check connection */
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "CREATE TABLE IF NOT EXISTS tblusers (
  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(120) NOT NULL,
  `ContactNumber` char(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1";




if (mysqli_query($conn, $sql)) {
    echo "Table test created successfully";
}
 else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);


 ?>

