<?php
include 'connect.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 style="padding: 25px 0px;text-align:center;"> Total Classes and Student's Marks In Details</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Total Present</th>
                    <th scope="col">Total Absent</th>
                    <th scope="col">Total Class</th>
                    <th scope="col">Attendance Percentage</th>
                    <th scope="col">Marks</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql1 = "SELECT * FROM `student` order by id asc";
                $result1 = mysqli_query($con, $sql1);

                $sql2 =  "SELECT COUNT(DISTINCT att_time) as cnt FROM `atttendance`";
                $result2 = mysqli_query($con, $sql2);
                $row2 = mysqli_fetch_assoc($result2);
                $marks1=null; $marks2=null;
                $marks3=null;
                $marks4=null;
                $marks5=null;
                $marks6=null;$marks7=null;
                $marks8=null;$marks9=null;
                $sql = "SELECT * FROM marks";
                        $result =  mysqli_query($con, $sql);
                         $row8 =  mysqli_fetch_assoc($result);
                        $count1 = mysqli_num_rows($result);
                        if ($count1>0){
                        $marks1 = $row8['Marks1'];
                        $marks2 = $row8['Marks2'];
                        $marks3 = $row8['Marks3'];
                        $marks4 = $row8['Marks4'];
                        $marks5 = $row8['Marks5'];
                        $marks6 = $row8['Marks6'];
                        $marks7 = $row8['Marks7'];
                        $marks8 = $row8['Marks8'];
                        $marks9 = $row8['Marks9'];
                        }
                       // echo $marks1;
                        
                        //  echo "<pre>";
                        //  print_r($row8);
                        //  echo "</pre>";

                // if(isset($_POST['submit'])){
                //     $marks1 = $_POST['marks1'];
                //     $marks2 = $_POST['marks2'];
                //     $marks3 = $_POST['marks3'];
                //     $marks4 = $_POST['marks4'];
                //     $marks5 = $_POST['marks5'];
                //     $marks6 = $_POST['marks6'];
                //     $marks7 = $_POST['marks7'];
                //     $marks8 = $_POST['marks8'];
                //     $marks9 = $_POST['marks9'];
                //     // $sql3 = "UPDATE `student` SET `marks1`='$marks1',`marks2`='$marks2',`marks3`='$marks3',`marks4`='$marks4',`marks5`='$marks5',`marks6`='$marks6',`marks7`='$marks7',`marks8`='$marks8',`marks9`='$marks9' WHERE id=1";
                //     // $result3 = mysqli_query($con, $sql3);
                //     echo $marks3;
                // }


                if ($result1) {
                    while ($row = mysqli_fetch_assoc($result1)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $total_attd = $row2['cnt'];

                        $sql3 = "SELECT COUNT(DISTINCT att_time) as cnt3 FROM `atttendance` WHERE `roll` = '$id'";
                        $result3 = mysqli_query($con, $sql3);
                        $row3 = mysqli_fetch_assoc($result3);
                        $total_present = $row3['cnt3'];

                        


                         if($total_attd!=0)
                        {
                            $attd_percentage = ($total_present / $total_attd) * 100;
                        }
                        // else{
                        //     $attd_percentage = 0.11111;
                        // }
                        if ($attd_percentage >= 95)
                            {
                                $marks = $marks1;
                            }
                      else if ($attd_percentage >= 90 && $attd_percentage <= 94)
                            $marks = $marks2;
                      else if ($attd_percentage >= 85 && $attd_percentage <= 89)
                            $marks = $marks3;
                       else if ($attd_percentage >= 80 && $attd_percentage <= 84)
                            $marks = $marks4;
                      else if ($attd_percentage >= 75 && $attd_percentage <= 79)
                            $marks = $marks5;
                       else if ($attd_percentage >= 70 && $attd_percentage <= 74)
                            $marks = $marks6;
                            
                        else if ($attd_percentage >= 65 && $attd_percentage <= 69)
                            $marks = $marks7;
                       else if ($attd_percentage >= 60 && $attd_percentage <= 64)
                            $marks = $marks8;
                       else if($attd_percentage <=59)
                            $marks = $marks9;
                        //     echo "attd % :". $attd_percentage."<br>";
                        //   echo "marks :". $marks."<br>";

                        echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $total_present . '</td>
                    <td>' . ($total_attd - $total_present) . '</td>
                    <td>' . $total_attd . '</td>
                    <td>' . $attd_percentage . '%</td>
                    <td>' . $marks . '</td>
                       </tr>';
                    }
                } else {
                    echo "error";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>

<!-- <td>    
             <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light" >Update</a></button>
             <button  class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"  class="text-light" >Delete</a></button>
         </td> -->