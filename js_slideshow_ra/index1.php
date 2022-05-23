<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

</head>

<body id="body">
  

<nav class="navbar navbar-expand-lg ml-auto navbar-dark bg-dark text-light">
  <div class="container-fluid">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="index1.php">Home</a>
        <a class="nav-link" href="student_list.php">All Students</a>
        <a class="nav-link" href="user.php">Add Student</a>
        <a class="nav-link" href="student_list_1.php">Marks</a>
        
      </div>
    </div>
  </div>
</nav>


  <!-- <div>
    <div class="header" >
      <ul>
        <li><a href="index1.php">Home</a></li>
        <li><a href="student_list.php">Student List</a></li>
        <li><a href="user.php">Add Student</a></li>
        <li><a href="student_list_1.php">Marks</a></li>
        <li><a href="">Logout</a></li>
        
      </ul>
    </div>
  </div> -->


  <div class="slideshow-container">
    <?php
    $sql = "SELECT * FROM `student`";
    $result = mysqli_query($con, $sql);
    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $img_name = $row['img_file_name'];
    ?>
        <div class="mySlides fade">
          <img class="rounded mt-5 mx-auto d-block" onclick="myf(<?php echo $id ?>)" src="<?php echo "upload/" . $img_name ?>" width="400" height="300">
        
            <p><i id ="check" class="fa fa-check" ></i></p>
         
          <div>
            <h4 class="text-center">Name : <?php echo $name ?></h4>
            <h5 class="text-center">Student Id : <?php echo $id ?></h5>

          </div>
        </div>
    <?php
      }
    }
    ?>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
  </div>
  <br>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="./js/script1.js">
  </script>

</body>

</html>