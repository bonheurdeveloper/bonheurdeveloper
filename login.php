
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
</head>
<body>
<center>
  <h3>login here</h3>
  <form class="mb-6" action="" method="post">
    <p>
  
    </p>
  <div class="mb-3 ">
   user name:
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
   
  </div>
  <div class="mb-3">
    Password:
    <input type="password" class="form-control" id="exampleInputPassword1" name="pas">
  </div>
 
  <button type="submit" class="btn btn-primary" name="login">Submit</button>
</form>
  </center>

<?php 
include "conn.php";
if (isset($_POST["login"])) {
    $name=$_POST["name"];
    $pass=$_POST["pas"];
    $quuer=mysqli_query($con,"SELECT * FROM REGISTRATION WHERE name='$name' AND password='$pass'");
if (mysqli_num_rows($quuer)>0) {
    session_start();
    $_SESSION["name"]=$name;
    header("location:home.php");
}
else {
  echo "sign up it seem that you dont have an account";
  header("location:singup.php");
}
}
?>
 </form>   
</body>
</html>