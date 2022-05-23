<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Set Marks</title>
    <style>
        .form-control {
            width: 55%;
        }
    </style>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){

        $marks1 = $_POST['marks1'];
        $marks2 = $_POST['marks2'];
        $marks3 = $_POST['marks3'];
        $marks4 = $_POST['marks4'];
        $marks5 = $_POST['marks5'];
        $marks6 = $_POST['marks6'];
        $marks7 = $_POST['marks7'];
        $marks8 = $_POST['marks8'];
        $marks9 = $_POST['marks9'];

        $sql = "SELECT * FROM marks";
        $result =  mysqli_query($con, $sql);
        
         $row =  mysqli_fetch_assoc($result);
         $count = mysqli_num_rows($result);
         if($count>0){
            $sql1 = "update `marks` set Marks1='$marks1', Marks2='$marks2', Marks3='$marks3',Marks4='$marks4',Marks5='$marks5',Marks6='$marks6',Marks7='$marks7',Marks8='$marks8',Marks9='$marks9'";
            $result1 = mysqli_query($con, $sql1);
            if($result1){
                echo "marks updated successfully";
            }
         }
         else{
            $sql3 = "insert into `marks` (Marks1,Marks2,Marks3,Marks4,Marks5,Marks6,Marks7,Marks8,Marks9) values('$marks1','$marks2','$marks3','$marks4','$marks5','$marks6','$marks7','$marks8','$marks9')";
            $result3 = mysqli_query($con, $sql3);
            if($result3){
                echo "marks inserted successfully";
            }
         }
        
        }   
    ?>
<div class="container">
<form method="post" action="" enctype='multipart/form-data'>
            <h3 class="text-center mt-4">Set Marks</h3>
            <div  class="form-group">
                <input value="" type="text" class="form-control" placeholder="Enter marks for attendance marks>=95" name="marks1">
            </div>
            <div class="form-group">
                <input value="" type="text" class="form-control" placeholder="Enter marks for attendance 90>=marks<=94" name="marks2">
            </div>
            <div class="form-group">
                <input value="" type="text" class="form-control" placeholder="Enter marks for attendance 85>=marks<=89" name="marks3">
            </div>
            <div class="form-group">
                <input value="" type="text" class="form-control" placeholder="Enter marks for attendance 80>=marks<=84" name="marks4">
            </div>
            <div class="form-group">
                <input value="" type="text" class="form-control" placeholder="Enter marks for attendance 75>=marks<=79" name="marks5">
            </div>
            <div class="form-group">
                <input value="" type="text" class="form-control" placeholder="Enter marks for attendance 70>=marks<=74" name="marks6">
            </div>
            <div class="form-group">
                <input value="" type="text" class="form-control" placeholder="Enter marks for attendance 65>=marks<=69" name="marks7">
            </div>
            <div class="form-group">
                <input value="" type="text" class="form-control" placeholder="Enter marks for attendance 60>=marks<=64" name="marks8">
            </div>

            <div class="form-group">
                <input value="" type="text" class="form-control" placeholder="Enter marks for attendance marks<=59" name="marks9">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Set</button>
        </form>
</div>
</body>
</html>