<?php
include 'connect.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light text-white bg-info">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item ">
        <a class="nav-link text-dark" href="#">Take Attendance <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item ">
        <a class="nav-link text-dark" href="student_list.php">View Students <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-dark" href="user.php">Add Students</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="#">Edit</a>
      </li>
  
    </ul>
  </div>
</nav>
  
    
  <div class="slider-container">
    <?php
      if(isset($_POST['submit'])){
        //$attd_id = $_GET['attd_id'];
     

        $sql = "insert into `atttendance` (roll,attendance,att_time,marks,att_percentage) 
        values('5','present',now(),'','')";
        $result = mysqli_query($con,$sql);
        if($result){
        // header('location:display.php');
          //echo 'Attendance inserted';
           
        }
       //     header('location:display.php');
       // }
       else{
           die(mysqli_error($con));
       }
      }
    ?>    
  <?php 
    $sql = "SELECT * FROM `student`";
    $result = mysqli_query($con, $sql);
    if($result){
       while( $row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $img_name = $row['img_file_name'];
           echo '
           <div class="slide">';
    ?>
       
           <img src="<?php echo "upload/".$img_name ?>" alt="" />
           <?php
          echo '
          <form method="post" action="">
          <h3>Name: '.$name.' </h3>    
          <h4>Email: '.$id.' </h4>
          <h4>Email: '.$email.' </h4>
          <a  href="add_attd.php?attd_id='.$id.'" class="btn btn-primary">Present</a>
         </form>
           </div>';     
       }  
    }
    ?>
</div>
<script  src="script.js"></script>
</body>
</html>

<!-- <a href="update.php?updateid='.$id.'" class="btn btn-primary">Update</a>
          <button> <a href="delete.php?deleteid='.$id.'" class="btn btn-primary">Delete</a></button> -->

  <!--        <button  class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"  class="text-light" >Delete</a></button> -->
