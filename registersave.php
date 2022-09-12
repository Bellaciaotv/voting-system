<?php
    require('conn.php');


 if(isset($_POST["save"]))
 { 
    //something was posted
    $matric_no = $_POST['matric_no'];
	$password = $_POST['password'];
	$password1 = $_POST['password1'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $year_level = $_POST['year_level'];
    $gender = $_POST['gender'];
    echo "Please enter some valid information!";


    if(!empty($matric_no) && !empty($password) && !empty($password1) && !is_numeric($matric_no))
    {
        
         //save to database
         
         $query = "insert into register (matric_no,password,password1,firstname,lastname,year_level,gender) values ('$matric_no','$password','$password1','$firstname','$lastname','$year_level','$gender')";
 
         $result=mysqli_query($conn, $query);
         if($result){
         
         header("Location: login.php");
         die;
         }else{
             echo "Login Failed";
         }
     }else
     {
         echo "Please enter some valid information!";
     }
  }
 
 ?>
 
