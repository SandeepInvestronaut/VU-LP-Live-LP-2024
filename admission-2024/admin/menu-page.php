<?php

session_start();
	//For Local database
	//$connection = mysqli_connect("localhost", "root", "","enq_wisdom_hadapsar_vischool");
  //For live database
  $connection = mysqli_connect("vi-website-db.cyofdhdrzbwm.ap-south-1.rds.amazonaws.com", "root", "Web-vu#2020","enq_wisdom_world_school");
	//Check connection
	if (mysqli_connect_errno())
	{
		echo "Database connection failed.";
	}
	
	$username = $_POST['uname'];  
	$password = $_POST['psw'];  
	$query = "select *from login_user where username = '$username' and password = '$password'";
	$result = mysqli_query($connection, $query);
	//echo "result-->".$result;
	$row = mysqli_num_rows($result);
  if($row == 1){ 
    //echo "<h1><strong><center> Login successful </center></strong></h1>";  
    //local database
	  /*$servername = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "enq_wisdom_hadapsar_vischool";*/

	//for live
	$servername	= "vi-website-db.cyofdhdrzbwm.ap-south-1.rds.amazonaws.com"; 
	$db_name	= "enq_wisdom_world_school";
	$db_user 	= "root";
	$db_password = "Web-vu#2020";
    
    $conn = mysqli_connect($servername, $db_user, $db_password, $db_name) or
     die("Connection failed: " . mysqli_connect_error());
    if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
    } 
  }  
  else{  
    ?>
    <script>
      window.location.href='./loginFailed.php';
    </script>
<?php	
    //header("location:./CBSE-school-chinchwad-thank-you.php?".$EnqId);
    exit();
    echo "<h1> Login failed. Invalid username or password.</h1>";  
  }     

	//Connection close
	mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login Dashboard Wisdom World School | ICSE School in Hadapsar | Wakad | Pune</title>

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/custom.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../../css/validation/validation.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
   
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css" />
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
 integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
 crossorigin="anonymous">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" 
href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,
pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,
b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
<!-- data-table lib --> 
<script type="text/javascript" src="https://cdn.datatables.net/
r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,
b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/
datatables.min.js"></script>

</head>
<body>
<header class="fixed">
  <nav class="navbar navbar2 navbar-expand-lg navbar-light" style="background:#025b8c ;" >
    <div class="container">
      <!-- <a class="navbar-brand" href="#">
        <img src="https://www.wisdomworldschool.in/images/logo.png" title="Wisdom World School" width="150" alt="Wisdom World School Logo"/>
      </a> -->
      <a class="navbar-brand" href="https://www.wisdomworldschool.in/index.php">
        <!-- <img src="https://www.wisdomworldschool.in/images/UWS Logo-01.png" title="Wisdom World School" width="120" alt="Wisdom World School Logo" style="margin-top:-30px"/> -->
        <!-- <img src="../img/favicon-32x32.png" title="Wisdom World School" width="150" alt="Wisdom World School Logo" /> -->
      </a>
      <h1 style="color:white;"><strong><center> Admin </center></strong></h1>
      <div class="schoolBtnGrp my-2 my-lg-0">
        <a href="https://www.universalwisdomschool.in/admin/index.php" style="color:white;margin-left:1100px;font-size:14px;border:1px solid #ffffff;padding:6px 20px;" >Logout</a>
      </div>
    </div>
  </nav>
</header>
  
<!-------------------------------table------------------------------------------>
  <div class="container" style="margin-top: 50px">



	<h1><a href="authentication.php">M. S. Landing Pages</a></h1>
    
  </div>
  <br><br>
    <!--<script>
      function mainInfo(id) {
        $.ajax({
          type: "GET",
          url: "authentication.php",
          data: "mainid =" + id,
          success: function(result) {
            $("#somewhere").html(result);
          }
        });
      };  
    </script>-->
    <script type="text/javascript">
      $(document).ready(function() {
        $(".table").DataTable({ 
          dom: 'Bfrtip',
          responsive: true,
          buttons: [
            'csv', 'excel', 'print'
          ]   
        });
      });
    </script>
        
    <!---end of table-->
  <?php
  //  include '../../includes/footer1.php';
  ?> 
  <footer style="background: #025b8c;">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12 col-12">
        <br><br><br>
        <p style="color:white">Copyrights &copy; 2021. All rights reserved.</p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 col-12">
        <br><br><br>
        <ul class="footerSocialLinks" >
          <li><a href="https://www.facebook.com/WWSpune/" title="Facebook" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true" style="color:white"></i></a></li>
          <li><a href="https://www.instagram.com/wisdomworldpune/?igshid=bsv69vuy4x4j" title="Instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true" style="color:white"></i></a></li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 col-12">
        <br><br><br>
        <ul class="footerBottomLinks">
          <!--<li><a href="<?php echo $baseURL; ?>privacy-policy.php">Privacy Policy</a></li> -->
          <li><a href="#" style="color:white">Privacy Policy</a></li>
          <li><a href="#" style="color:white">Sitemap</a></li>
          <li><a href="#" style="color:white">Terms of Use</a></li>
        </ul>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <p class="text-center footP">
        :::| <a style="color: #CCCCCC;" href="https://www.edupluscampus.com/" target="_blank" title="Website design development, Web hosting, company in pune India, Web designers & consultants in Pune">Powered by VGSPEL</p>
      </div>
    </div>
  </div>
</footer>
<style>
.log-out{
  margin-right:-500px
}
 
img{
  /* margin: -21px;
  margin-left: -365px; */
}
.navbar {
  position: relative;
  min-height: 100px;
  margin-bottom: 0px; 
  border: 1px solid transparent;
}
div.dt-buttons {   
  width: 100%;
  text-align: center;
  margin-bottom: 0.5em;
}
button.dt-button, div.dt-button, a.dt-button {
  background-image:none;
  background-color: #0072bb;
  color:#ffffff;
  border: 1px solid #0072bb;
}
button.dt-button, div.dt-button, a.dt-button:hover{
  background-image:none;
  background-color:#ffffff;
  color:#0072bb;
  border:1px solid #0072bb;
}
</style>
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

div.dt-buttons {
  width: 100%;
  text-align: center;
  margin-bottom: 0.5em;
}
button.dt-button, div.dt-button, a.dt-button {
 background-image:none;
 background-color: #0072bb;
 color:#ffffff;
 border: 1px solid #0072bb;
}
button.dt-button, div.dt-button, a.dt-button:hover{
 background-image:none;
 background-color:#ffffff;
 color:#0072bb;
 border:1px solid #0072bb;
}
</style>
</body>
</html>
