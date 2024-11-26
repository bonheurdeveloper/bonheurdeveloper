
<?php
include "conn.php";
session_start();
if (!isset($_SESSION["name"])) {
    header("location:login.php");
}
?>
<?php
include "conn.php";
$que=mysqli_query($con,"select * from registration")
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
    <a href="log.php"  class="btn btn-primary">logout</a>
       
    <table class="table table-striped">
        <tr>
        <th class="table-light">id</th>
        <th class="table-light">name</th>
        <th class="table-light">password</th>
        <th class="table-light">choose option</th>
        </tr>
        <?php 
        while ($row=mysqli_fetch_assoc($que)) {
           ?>
           <tr>
            <td class="table-dark"><?php echo $row["id"]; ?></td>
            <td class="table-dark"><?php echo $row["name"]; ?></td>
            <td class="table-dark"><?php echo $row["password"]; ?></td>
            <td class="table-dark">
                 <a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">edit</a>   
                  <a href="delete.php?id=<?php echo $row["id"]; ?>"class="btn btn-danger">delete</a>
                   <a href="view.php?id=<?php echo $row["id"]; ?>"class="btn btn-success">view</a>
           </td>
           </tr>
           <?php
        }
        ?>
    </table>
</body>
</html>