<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $id = $_POST['id'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $filename = $_FILES['image']['name'];
        $sql = "insert into `student` (name,id,email,mobile,img_file_name) 
        values('$name','$id','$email','$mobile','$filename')";
        $result = mysqli_query($con, $sql);
        move_uploaded_file($_FILES["image"]["tmp_name"],'upload/'.$filename);
        if($result){
            //header('location:display.php');
            echo "Data is inserted successfully";
        }
        else {
            echo "Data is not inserted successfully";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Attendance Management System</title>
    <style>
        .form-control {
        width: 100%;
    }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <form method="POST" action="" enctype='multipart/form-data'>
            <h3 class="text-center mt-4">Add a New Student</h3>
            <div  class="form-group">
                <label>Name</label>
                <input value="" type="text" class="form-control" placeholder="Enter your name" name="name" required >
            </div>
            <div class="form-group">
                <label>ID</label>
                <input value="" type="text" class="form-control" required  placeholder="Enter your id" name="id">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" required placeholder="Enter your email" name="email">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" requiredplaceholder="Enter your mobile" name="mobile">
            </div>
            <div class="form-group">
                <h5>Select Image To Upload</h5>
                <input type="file" name="image" required id="file" multiple>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
</body>
</html>