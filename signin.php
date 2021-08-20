<?php

include "partials/dbconnect.php";
    $showError="false";
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $sql= "SELECT * FROM `users` WHERE  email= '$email' && `pass`='$pass'"; 
        $result = mysqli_query($conn, $sql);
        $numRows= mysqli_num_rows($result);
 
        if($numRows){
            $row = mysqli_fetch_assoc($result);    
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['sno']=$row['sno'];
            $_SESSION['useremail']=$email;
            header("Location: /bloodbank/index.php?loginsuccess=true");             
        } 

        else
        {          
        header("Location: /bloodbank/index.php?loginsuccess=false");
        }
           
        
}
        
 ?>    



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Blood Bank!</title>
  </head>
  <style>

  #image{
    height:550px;
    width:620px;
  }



  @media screen and (min-device-width: 501px) and (max-device-width: 750px){

    #image{
    height:500px;
    width:500px;
  }
  h2{
    font-size:30px;
  }

  }

  @media screen and (min-device-width: 290px) and (max-device-width: 500px){

  #image{
  height:300px;
  width:290px;
  }
  h2{
    font-size:25px;
  }

}


  </style>
  <body>
  <?php include "partials/header.php"; ?>







<div class="container my-5 ">


<div class="row">
<div class="col-md-8" >
<img src="partials/s1.jpg" id="image" alt="" srcset="">
</div>

<div class="col-md-4 mt-5 pt-5 px-2">
<h2>Sign in As Receiver</h2>
<form  method="POST">

  <div>
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Email address">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

<div class="row">
<div class="col-md-12">
<button type="submit" class="btn btn-block btn-primary my-2">Submit</button>

</div>
</form>
</div>




</div>
</div>
</div>














<?php include "partials/_footer.php";  ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
