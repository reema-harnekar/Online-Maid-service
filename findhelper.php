 <!DOCTYPE html>




<html>
<head>
	<title>FIND HELEPER</title>
	<link rel="stylesheet" type="text/css" href="css/maid.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/trial.js"></script>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-sclae=1.0">


</head>
<body>
  <nav class="navbar headings" id="heading" >
    <div class="container">
      <div class="navbar-header">
        <img src="resource/hlogo2.png" alt="header logo" class="logo">
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php" id="header">HOME</a></li>
        <li><a href="findhelper.php" id="header">FIND HELPER</a></li> 
        <li><a href="#" id="header">ABOUT US</a></li>
        </ul>
    </div>
</nav>
<center>
<table  class="table table-striped" >
   <tr>
      <th>JOBSEEKERS</th>
      
    </tr>
<?php
   include 'php/Connection.php';

   

   $qury = "select j_name, j_mobile, j_address, j_jobtype from Jobseeker";
   $sql = mysqli_query($conn,$qury);
   
   while($row = mysqli_fetch_array($sql))
      echo"<tr><td><b>NAME :</b>$row[0]<br /><b>MOBILE :</b>$row[1]<br/><b>TYPE OF JOB :</b>$row[3]<br /><b>ADDRESS :</b>$row[2]<br /> </td></tr>";
 ?>
</table>
</center>

<footer>
    <div class="footer" id="foot" >
    &copy;2018 All rights reserved - Maid4u
    </div>
    <ul>
        <li><a href="https://facebook.com" data-tooltip="facebook"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
        <li><a href="https://gmail.com"><i class="far fa-envelope"></i></a></li>
        <li><a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>
    </ul>
  </footer>
</body>
</html>

