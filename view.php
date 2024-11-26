<?PHP
include "conn.php";

if (isset($_GET["id"])) {
    $ID=$_GET["id"]; 
    $quer=mysqli_query($con,"select * from registration where id='$ID'");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <h3>your information:</h3>
  <form class="mb-6" action="" method="post">
 
    <?php 
    $row=mysqli_fetch_assoc($quer);
    
    ?>
  <div class="mb-3 ">
   user name:<u><?php echo $row["name"]; ?></u>
   
   
  </div>
  <div class="mb-3">
    Password: <u><?php echo $row["password"]; ?></u>

</div>
</form>
</center>
</body>
</html>