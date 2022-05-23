<?php
include 'connect.php';
?>

<?php
    // select roll , attedance from atttendance
    $sql = "SELECT * FROM `atttendance`";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    $sql1 =  "SELECT COUNT(DISTINCT att_time) as cnt FROM `atttendance`";
    $result1 = mysqli_query($con, $sql1);
    $row1 = mysqli_fetch_assoc($result1);

    $sql2 = "SELECT COUNT(DISTINCT att_time) as cnt2 FROM `atttendance` WHERE `roll` = '180140'";
    $result2 = mysqli_query($con, $sql2);
    $row2 = mysqli_fetch_assoc($result2);



    
    $count = mysqli_num_rows($result);
    //display row in table
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Roll</th>";
    echo "<th>Attendance</th>";
    //add Total absent
    echo "<th>Total Present</th>";
    echo "<th>Total Class</th>";
    echo "</tr>";

    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['roll']."</td>";
        echo "<td>".$row['attendance']."</td>";
        echo "<td>".$row2['cnt2']."</td>";
        echo "<td>".$row1['cnt']."</td>";
        echo "</tr>";
    }
    echo "</table>";
        
    
?>