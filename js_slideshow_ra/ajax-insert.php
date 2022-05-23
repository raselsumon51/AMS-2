<?php
 include 'connect.php';
    //set my timezone in php
    date_default_timezone_set('Asia/Dhaka');
    $id = $_POST['std_id'];
    $date = date("Y-m-d");

    


     $sql = "SELECT * FROM `atttendance` WHERE roll = '$id' AND att_time = '{$date}' limit 1";
    $result = mysqli_query($con, $sql);
    if ($result) {
        if($row = mysqli_fetch_assoc($result)){
        if($row['attendance'] == 'present'){
            //echo $row['roll']. " present";
            $sql = "Delete FROM `atttendance` WHERE roll = '$id' AND att_time = '{$date}'";
            $result = mysqli_query($con,$sql);
            if($result){
            echo 0;
            }

        }
    }
    else{
       // echo $id. " absent";
       $sql = "insert into `atttendance` (roll,attendance,att_time,marks,att_percentage) 
     values('$id','present',now(),'','')";
     $result = mysqli_query($con,$sql);
     if($result){
      echo 1;
     }

    }
}

?>