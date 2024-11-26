
<?php
include "conn.php";
if (isset($_POST["submit"])) {
    $name=$_POST["name"];
    $pas=$_POST["password"];
    $cpas=$_POST["cpassword"];

    if ($name!="" AND $pas!="") {
        $q=mysqli_query($con,"select * from registration where name='$name' OR password='$pas'");
    if (mysqli_num_rows($q)>0) {
      $echo[]="password || user name arleady taken";
      
    }
else{
    if ($pas!=$cpas) {
        $echo[]="password does not match";
    
    }
    else {
        
    
    $qu=mysqli_query($con,"insert into registration(name,password)values('$name','$pas')");
    if ($qu) {
     header("location:login.php");
}}}
    }
    else {
        $echo[]="empty in put fields try to insert";
    }

}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
  <body>
   
  <center>

    <h3>sign up here</h3>
  <form class="mb-6" action="" method="post">
 <p>
   <?php 
    if (isset($echo)) {
        foreach($echo as $err){
            echo '<span class="p-3 mb-2 bg-danger text-white w-100 p-3"" >'.$err.'</span>';
        }
    }
    ?>
    </p>
  <div class="mb-3 ">
   user name:
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
   
  </div>
  <div class="mb-3">
    Password:
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    comfirm Password:
    <input type="password" class="form-control" id="exampleInputPassword1" name="cpassword">
  </div>
 
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
  </center>
  </body>
</html>