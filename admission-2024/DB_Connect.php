<?php
// $servername="localhost";
// $username="root";
// $password="";
// $DB="Campaign";

$servername="vi-website-db.cyofdhdrzbwm.ap-south-1.rds.amazonaws.com";
$username="root";
$password="Web-vu#2020";
$DB="enq_vupune";

//create connection
$conn=new mysqli($servername,$username,$password,$DB);

//check conneciton
if($conn->connect_error){
    die("Connection Failed " . $conn->connect_error );
}
else{
    echo "";
}

 ?>