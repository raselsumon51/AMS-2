
<?php
   $con = new mysqli('localhost','root','','ams');
   if(!$con){
        die("Connection failed ".mysqli_error($con));
   }
?>