<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="slideshow-container">
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
?>
  <div class="mySlides fade">
  <!-- <div class="numbertext"> <span style="color:red"><?php echo $id ?></span> </div> -->
  <img onclick="myf(<?php echo $id ?>)" src="<?php echo "upload/".$img_name ?>" width="500" height="400">
  <!-- <div  class="text"><button class="btn1">PRESENT</button></div> -->
        <div> <h3>Name : <?php echo $name ?></h3>
        <h3>Student Id : <?php echo $id ?></h3>
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

<script src="./js/script1.js">
</script>
</body>
</html> 
