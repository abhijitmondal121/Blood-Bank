<?php
include "partials/dbconnect.php";


  $showError="false";
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $uname=$_POST['uname'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $code=$_POST['code'];
        $blood=$_POST['blood'];


    if($uname== '' || $email== '' || $pass== '' || $phone== ''||$address== '' || $city== '' || $state== '' || $code== ''|| $blood== ''){
      echo"<script>alert('Please fill up all details')</script>";
  
      }
      else{

            $exitsql = "SELECT * FROM `users` WHERE `email`='$email'";
            $result = mysqli_query($conn, $exitsql);
            
            $numRows= mysqli_fetch_assoc($result);
            
            if($numRows>0){
              echo"<script>alert('User email already Exists')</script>";
            }
          
        
                    else{
            
                    $sql="INSERT INTO `users` (`name`, `email`, `pass`, `Phone-Number`, `address`, `city`, `state`, `p_code`, `blood_group`) VALUES ('$uname', '$email', '$pass', '$phone', '$address', '$city', '$state', ' $code', '$blood')";
                    $result = mysqli_query($conn, $sql);
                    if($result){
                        $showAlert= true;
                        header("Location: /bloodbank/index.php?signupsuccess=true");
                        exit();
                       } 
                    }
       }
    //echo 'unable to signup';
    // header("Location: /bloodbank/index.php?signupsuccess=false&error=$showError");

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

    <title>Blood Bank</title>
  </head>
  <style>

  #image{
    height:550px;
    width:720px;
  }

  @media screen and (min-device-width: 501px) and (max-device-width: 775px){

    
  #image{
    height:550px;
    width:500px;
  }

  }
  @media screen and (min-device-width: 300px) and (max-device-width: 500px){

      
  #image{
    height:350px;
    width:300px;
  }
  h2{
    font-size:26px;

  }

}

  </style>
  <body>
  <?php include "partials/header.php"; ?>
<div class="container my-4">


<div class="row">
<div class="col-md-8" >
<img src="partials/r2.jpg" id="image" alt="" srcset="">
</div>

<div class="col-md-4 px-2">
<h2>Register As Receiver</h2>
<form method="POST" >
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="text" name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name">
  </div>
  <div class="row">
  <div class="col-md-6">
  <div>
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
  </div>
  </div>
  <div class="col-md-6">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone Number</label>
    <input type="number" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Phone Number">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address">
  </div>
  <div class="row">
  <div class="col-md-4">
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">City</label>
    <input type="text" name="city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="City">
  </div>
  </div>
  <div class="col-md-4">
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">State</label>
    <input type="text" name="state" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="State">
  </div>
  </div>
  <div class="col-md-4">
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Postal Code</label>
    <input type="text" name="code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Code">
  </div>
  </div>
  </div>
  <label for="exampleInputEmail1" class="form-label">Blood Group</label>
<select name="blood" id="inputblood" class="form-control">
<option value="" selected> Chose Blood Group</option>
<option value="a_positive">A+</option>
<option value="a_negative">A-</option>
<option value="b_positive">B+</option>
<option value="b_negative">B-</option>
<option value="ab_positive">AB+</option>
<option value="ab_negative">AB-</option>
<option value="o_positive">O+</option>
<option value="o_negative">O-</option>
</select>
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
