<?php
include "dbconnect.php";
  // $con = mysqli_connect('localhost', 'root','', 'abhijit');
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $name = $_POST['pname'];
      $email = $_POST['pemail'];
      $bg = $_POST['bsearch'];
      $number = $_POST['num'];

            
        if($name== '' || $email== '' || $bg== '' || $number== ''){
          
          header("Location:/bloodbank/show.php?we cannot verify your request");
      
          }

        else {
          
        
            $sql = "INSERT INTO `request_blood` (`p_name`, `email`, `blood_group`, `sample_number`) VALUES ( '$name', '$email', '$bg', '$number')";
            $result = mysqli_query($conn, $sql);
     
            if($result){
       

                      header("Location:/bloodbank?request_me=success");            
                     }
                     else{
                      header("Location:/bloodbank?request_me=not_insert"); 
                    }



              }

          }
    
        

  



?>