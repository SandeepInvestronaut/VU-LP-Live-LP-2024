<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// $servername = "localhost";
// $username = "root";
// $password = "";
// $DB = "enq_vupune";

// $servername = "development-testing.cqrbx85mlf6a.ap-south-1.rds.amazonaws.com";
// $DB = "enq_vupune";//epcamp
// $username = "root";//epcamp
// $password = "AAMSS38168";


$servername = "vi-website-db.cyofdhdrzbwm.ap-south-1.rds.amazonaws.com";
$username = "root";
$password = "Web-vu#2020";
$DB = "enq_vupune";

// create connection
$conn = new mysqli($servername, $username, $password, $DB);

$utm_medium = $_POST['utm_medium'];
$utm_source = $_POST['utm_source'];
$utm_campaign = $_POST['utm_campaign'];
$location = $_POST['cname'];

$coursestat = $_POST['course'];
$qry = "SELECT * FROM vuprogramlist2024 WHERE staticlink = '$coursestat'";
$getcrsdata = mysqli_query($conn, $qry);
$fetchrow = mysqli_fetch_row($getcrsdata);

// echo $fetchrow[1];

// check connection
if ($conn->connect_error) {
    die("Connection Failed " . $conn->connect_error);
} else {
    echo "";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $date = date("Y-m-d");


    $data = array(
        "AuthToken" => "VUPUNE-26-03-2021",
        "Source" => "vupune",
        "FirstName" => $name,
        "Email" => $email,
        "MobileNumber" => $phone,
        "state" =>  $state,
        "city" =>  $city,
        "leadCampaign" =>  $utm_campaign,
        "LeadSource" =>  $utm_source,
        "leadMedium" =>  $utm_medium,
        "Location" =>  $location

    );
    $jsonEncoded = json_encode($data);


            $sql = "INSERT INTO `lead`(`name`, `email`, `phone`, `city`, `courseName`, `leadsource`, `leadtype`, `leadname`, `course`, `request_post_date`, `campaignname`, `streem`, `state`, `utm_medium`, `utm_source`, `utm_campaign`, `jsonrequest`) VALUES ('$name','$email','$phone','$city','$location','$utm_source','null','null','null','$date','null','null','$state','$utm_medium','$utm_source','$utm_campaign','$jsonEncoded')";
            

                if($location != 1302 && $location !=1303){
                // mysqli_query($conn, $sql);
                $url = "https://thirdpartyapi.extraaedge.com/api/SaveRequest";
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonEncoded);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $result = curl_exec($ch);
                curl_close($ch);
                // mysqli_close($conn);
                }
            
            if ($conn->query($sql) == TRUE) {
                // echo "Submitted Successfully...!";
                echo "<script>window.location.href='admission_thankyou.php?email=$email';</script>";
                

                

            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        
}

?>





