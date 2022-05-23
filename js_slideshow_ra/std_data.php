<?php
include 'connect.php';
?>

<?php
    
    
        $name = $_POST['name'];
        $id = $_POST['id'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $filename = $_FILES['image']['name'];
        //insert into datbase

        echo $name;
        echo "<br>";
        echo $id;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $mobile;
        echo "<br>";
        echo $filename;
        echo "<br>";
        if(!$con){
            echo "not connected";
        }

       
        $sql = "INSERT INTO `student` (name, id, email, mobile, img_file_name) VALUES ('$name','$id','$email','$mobile','$filename')";
        
        $result = mysqli_query($con, $sql);
        move_uploaded_file($_FILES["image"]["tmp_name"],'upload/'.$filename);
        if($result){
            echo "Data is  inserted ::";
        }
        
    
?>