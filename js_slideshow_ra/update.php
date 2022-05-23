 <?php
    include 'connect.php';
    $id = $_GET['updateid'];
    if(isset($_GET['updateid'])){
        $sql = "SELECT * FROM `student` WHERE id = '$id'";
        $result = mysqli_query($con, $sql);
        if($result){
            $row = mysqli_fetch_assoc($result);
            $name = $row['name'];
            $id1 = $row['id'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $img_file_name1 = $row['img_file_name'];
        }
    }

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $id = $_POST['id'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $filename = $_FILES['image']['name'];
        $sql = "update `student` set id=$id, name='$name', email='$email',mobile='$mobile',img_file_name='$filename' where id=$id1";
        $result = mysqli_query($con, $sql);
        if(isset($_FILES['image']['name'])){
            move_uploaded_file($_FILES["image"]["tmp_name"],'upload/'.$filename);
            echo "image is uploaded";
        }
       

        // delete image in upload folder
        // $sql = "SELECT * FROM `student` WHERE id = '$id'";
        // $result = mysqli_query($con, $sql);
        // if($result){
        //     $row = mysqli_fetch_assoc($result);
        //     $img_file_name = $row['img_file_name'];
        // }
       //img is set
        if('upload/'.$img_file_name1){
            unlink('upload/'.$img_file_name1);
            echo "Image is deleted successfully";
        }

        // if($result){
        //     echo "Data is deleted successfully";
        // }
        // else {
        //     echo "Data is not deleted successfully";
        // }

        if($result){
            echo "Data is Updated successfully";
            // header('location:display.php');
        }
        else {
           die(mysqli_error($con));
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
</head>

<body>
    <div class="container">
        <form method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name</label>
                <input type="text" required class="form-control" placeholder="Enter your name" name="name" value="<?php echo $name ?>">
            </div>
            <div class="form-group">
                <label>ID</label>
                <input type="text" required class="form-control" placeholder="Enter your id" name="id" value="<?php echo $id ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" required class="form-control" placeholder="Enter your email" name="email" value="<?php echo $email ?>">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" requiredclass="form-control" placeholder="Enter your mobile" name="mobile" value="<?php echo $mobile?>">
            </div>
            <div class="form-group">
                <h5>Select Image To Upload</h5>
                <input type="file" required name="image" value="<?php echo $img_file_name1 ?>" id="file" multiple>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>