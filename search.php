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
  .blood-icon{
    height:90px;
    width:90px;
    border-radius: 50px 50px;
  }
  .card{
    width: 33rem;
    height: 28rem;
    background-color:#f0f5f5;
    text-align:center;
  }


  
  @media screen and (min-device-width: 501px) and (max-device-width: 752px){

.blood-icon{
height:70px;
width:80px;
border-radius: 50px 50px;
}
.card{
width: 30rem;
height: 29rem;
background-color:#f0f5f5;
text-align:center;
}
h1{
  font-size:35px;
}
}


@media screen and (min-device-width: 401px) and (max-device-width: 500px){

.blood-icon{
height:60px;
width:60px;
border-radius: 50px 50px;
}
.card{
width: 24rem;
height: 29rem;
background-color:#f0f5f5;
text-align:center;
}
h1{
  font-size:30px;
}
title{
font-size:18px;

}
#cap{
font-size:15px;

}
}
@media screen and (min-device-width: 290px) and (max-device-width: 400px){

.blood-icon{
height:50px;
width:50px;
border-radius: 50px 50px;
}
.card{
width: 22rem;
height: 25rem;
background-color:#f0f5f5;
text-align:center;
}
h1{
  font-size:23px;
}
#title{
font-size:18px;

}
#cap{
font-size:14px;

}
#button{
font-size:11px;
}
}


  </style>
  <body>
  <?php include "partials/dbconnect.php";
  include "partials/header.php";

  ?>



<div class="con-fluid">
<form action="search.php"  method="GET">
<div class="row m-2">
<!-- <div class="col-md-4  my-1">
<input class="form-control search-hos "type="text" name="" id="" placeholder="search hospital">
</div> -->

<div class="col-md-6 my-1">
<select name="search" id="inputblood" class="form-control" >
<option value="A+" selected> Chose Blood Group</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select>
</div>


<div class="col-md-2 my-1">
<button class="btn btn-block btn-outline-primary " type="submit">Search</button>
</div>

<div class="col-md-2 my-1">
<a href="show.php" class="btn btn-block btn-outline-primary">showall</a>
</div>


<div class="col-md-2 my-1">
<a href="show.php"class="btn btn-block btn-outline-secondary">Clear Filter</a>
</div>

</div>
</form>
</div>


<center>
<div class="container mt-4 mb-0"><h1 style="font-family: Georgia, serif;">Search result for : <?php echo $_GET['search'];?></h1></div>
</center>


<div class="containe">
<div class="container">
  <div class="row my-4">

<?php
$search=$_GET['search'];




 $sql="SELECT * FROM `bank` WHERE `$search` >0 ";
 $result=mysqli_query($conn,$sql);
 while($rows=mysqli_fetch_array($result)){

echo'<div class="card mx-3 my-3" style="">

<div class="card-body ">
 

<div class="row">
<div class="col">
<center>
<h3 class="card-title" id="title">'.$rows['h_name'].'</h3>
<p class="card-text my-2" id="cap">'.$rows['address'].',postal code- '.$rows['p_code'].','.$rows['state'].'</p>

</center>
</div>
</div>
<div class="row justify-content-center">
<div class="col-xs-3 mx-2 my-2">
    <img src="partials/a1+.png" class="blood-icon">
    <h4>&nbsp;&nbsp;'.$rows['A+'].'
</div>

<div class="col-xs-3 mx-2 my-1">
    <img src="partials/a-.png" class="blood-icon">
    <h4>&nbsp;&nbsp;'.$rows['A-'].'
</div>

<div class="col-xs-3 mx-2 my-1">
    <img src="partials/b+.png" class="blood-icon">
    <h4>&nbsp;&nbsp;'.$rows['B+'].'
</div>

<div class="col-xs-3 mx-2 my-1">
    <img src="partials/b-.png" class="blood-icon">
    <h4>&nbsp;&nbsp;'.$rows['B-'].'
</div>

<div class="col-xs-3 mx-2 my-1">
    <img src="partials/o+.png" class="blood-icon">
    <h4>&nbsp;&nbsp;'.$rows['O+'].'
</div>

<div class="col-xs-3 mx-2 my-1">
    <img src="partials/o-.png" class="blood-icon">
    <h4>&nbsp;&nbsp;'.$rows['O-'].'
</div>

<div class="col-xs-3 mx-2 my-1">
    <img src="partials/ab+.png" class="blood-icon">
    <h4>&nbsp;&nbsp;'.$rows['AB+'].'
</div>

<div class="col-xs-3 mx-2 my-1">
    <img src="partials/ab-.png" class="blood-icon">
    <h4>&nbsp;&nbsp;'.$rows['AB-'].'
</div>


</div>

';

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=true){
  echo'
  
  <div class="row mt-2">
  
  <div class="col-md-6  mt-1">
  <!-- Button trigger modal -->
  <button type="button" class="btn  btn-block btn-primary " id="button" data-toggle="modal" data-target="#myself">Request for myself</button>
  </div>
  
  <div class="col-md-6 mt-1">
  <!-- Button trigger modal -->
  <button type="button" class="btn  btn-block btn-primary px-5" id="button" data-toggle="modal" data-target="#other">Request for other</button>
  </div>
  </div>';
  }
  
  else{
    echo'<div class="col-md-12 mt-2">
    <!-- Button trigger modal -->
    <button type="button" class="btn  btn-block btn-secondary py-3" id="button"><b>Signin please for Request your Blood</b></button>
    </div>';
  }
  

echo'
</div>
</div>';
 }

?>
<?php
include "partials/request_for_myself_modal.php";
include "partials/request_for_others_modal.php";
?>





















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
