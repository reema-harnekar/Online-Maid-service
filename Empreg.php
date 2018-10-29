<?php 
  include 'Connection.php'; 
  session_start();
  if(isset($_POST['esubmit'])){

    $e_name = $_POST['uname'];
    $e_mobile = $_POST['pno']; 
    $e_address = $_POST['address'];
    $e_username = $_POST['usrname'];
    $e_password = $_POST['psw'];
    
  	
      $query = "INSERT INTO Employer (e_name, e_mobile, e_address, e_username, e_password) 
        VALUES('$e_name',$e_mobile,'$e_address','$e_username','$e_password')";
        $result=mysqli_query($conn, $query);
        if(!$result){
          //echo "Error please check the field";
          header('location:../headerfooter1.html');
        }else{
        
          //echo "THANKS FOR REGISTRATION...";
           header('location:../headerfooter.html');
          }
      }
        
    
    
?>

