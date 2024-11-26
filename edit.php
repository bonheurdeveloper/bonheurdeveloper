
<?PHP
include "conn.php";

if (isset($_GET["id"])) {
    $ID=$_GET["id"]; 
    $quer=mysqli_query($con,"select * from registration where id='$ID'");
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
    <h3>eddit here</h3>
  <form class="mb-6" action="" method="post">
 
    <?php 
    $row=mysqli_fetch_assoc($quer);
    
    ?>
  <div class="mb-3 ">
   user name:
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value=<?php echo$row["name"]; ?>>
   
  </div>
  <div class="mb-3">
    Password:
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value=<?php echo$row["password"]; ?>>
  </div>
 
 
  <button type="submit" class="btn btn-primary" name="submit">update</button>
  <?PHP

if (isset($_POST["submit"])) {
    $name=$_POST["name"];
    $pas=$_POST["password"];
    if ($name!="" AND $pas!="") {
        $q=mysqli_query($con,"UPDATE  registration set name='$name' , password='$pas' where id='$ID'");
   if ( $q) {
    
 

    session_start();
    $_SESSION["name"]=$name;
     header("location:table.php");
    }}  }
?>

</form>
  </center>
  </body>
</html>