<!-- <?php
    // echo $_GET['name'];
    // echo $_GET['age'];
    // //print server details
    // echo "<pre>";
    // print_r($_SERVER['HTTP_HOST']);
    // echo "</pre>";
    //get today date
    // date_default_timezone_set('Asia/Dhaka');
    // $date = date("Y-m-d");
    // echo $date;
    //get timezon in php
    //date_default_timezone_set('Asia/Kolkata');
    //set my timezone in php
    
    

?> -->

 <?php
include 'connect.php';
?> 
// <?php
// $id =180139;
// $date = date("Y-m-d");
// query to count distinct date
// $sql = "SELECT COUNT(DISTINCT date) FROM `attendance` WHERE `student_id` = '$id'";
// $sql = "SELECT COUNT(DISTINCT att_time) FROM `atttendance` WHERE `roll` = '180139'";//
//copilot
//add two numbers in php

$sql =  "SELECT COUNT(DISTINCT att_time) as cnt FROM `atttendance`";

 //$sql = "SELECT * FROM `atttendance` WHERE roll = '$id' AND att_time = '{$date}' limit 1";
     $result = mysqli_query($con, $sql);
     $row = mysqli_fetch_assoc($result);
     //get row count

     echo "<pre>";
    print_r($row['cnt']);
    echo "</pre>";
    // $count = $row['COUNT(DISTINCT att_time)'];
    // echo $count;
    // echo $count==$row['COUNT(DISTINCT att_time)'];
//     if ($result) {
//     if($row = mysqli_fetch_assoc($result)){
//         if($row['attendance'] == 'present'){
//             echo $row['roll']. " present";
//         }
//     }
//     else{
//         echo $id. " absent";
//     }
// }
    // $row = mysqli_fetch_assoc($result);
    // // if ($result) {
    // //   while ($row = mysqli_fetch_assoc($result)) {
    // //     $id = $row['id'];
    // //     $name = $row['name'];
    // //     $email = $row['email'];
    // //     $mobile = $row['mobile'];
    // //     $img_name = $row['img_file_name'];
    // //   }
    // echo "<pre>";
    // print_r($row['att_time']);
    // echo "</pre>";
    // $date = date("Y-m-d");
    // echo $date;

    // if($date == $row['att_time']){
    //     echo "present";
    // }

//?> 