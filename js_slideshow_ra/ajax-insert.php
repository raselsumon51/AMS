<?php
 include 'connect.php';
    $id = $_POST['std_id'];
    $sql = "insert into `atttendance` (roll,attendance,att_time,marks,att_percentage) 
     values('$id','present',now(),'','')";

     $result = mysqli_query($con,$sql);
     if($result){
      echo 1;
     }
    else{
        echo 0;
    }

?>