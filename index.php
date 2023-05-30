<?php
include('db_connect.php');

if(isset($_POST['submit'])){
    $std_name = $_POST['std_name'];
    $std_email = $_POST['std_email'];
    $std_roll = $_POST['std_roll'];
    $std_img = $_FILES['std_img']['name'];
    $tmp_name = $_FILES['std_img']['tmp_name'];


    
    
    $sql = "INSERT INTO `students_crud` (std_name,std_email,std_roll,std_img) VALUES ('$std_name','$std_email','$std_roll','$std_img')";
    
    
    $result = mysqli_query($conn,$sql);
    if($result){
        move_uploaded_file($tmp_name,'upload/'.$std_img);
        header('location: index.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students crud operation </title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-center bg-primary text-light mt-5">Students Crud Operation</h4>
            </div>
        <form class="form" action="" method="POST" enctype="multipart/form-data"  >
            <input type="text" class="form-control" name="std_name" placeholder="Enter Your Name">
            <input type="email" class="form-control" name="std_email" placeholder="Enter Your email">
            <input type="number" class="form-control" name="std_roll" placeholder="Enter Your Id">


            <label for="">Upload Image</label>
            <input type="file" name="std_img"  class="form-control">


            <input type="submit" class="btn btn-success mt-3" name="submit"  value="submit" >
        </form>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>