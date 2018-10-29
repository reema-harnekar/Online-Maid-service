<?php 
  include 'Connection.php'; 
  session_start();

  if(isset($_POST['jsubmit'])){
 

    $j_name = $_POST['juname'];
    $j_mobile = $_POST['jpno']; 
    $j_address = $_POST['jaddress'];
    $j_jobtype = $_POST['jobs'];
    $j_username = $_POST['jusrname'];
    $j_password = $_POST['jpsw'];
    
  	
      $query1 = "INSERT INTO Jobseeker (j_name, j_mobile, j_address, j_jobtype, j_username, j_password) VALUES('$j_name',$j_mobile,'$j_address','$j_jobtype','$j_username','$j_password')";
        $result1=mysqli_query($conn, $query1);
        if(!$result1){
          //echo "Error please check the field";
          header('location:../headerfooter1.html');
        }else{
        
          //echo "THANKS FOR REGISTRATION...";
           header('location:../thankyou.php');
          }

          
      }
      

        
    
    
?>

