<?php
include("connect.php");

if($_POST){
    $id=$_POST["id"];
  $user_name=$_POST["username"];
  $experience=$_POST["exp"];
  $date=$_POST["sdate"];
   $end_date=$_POST["ddate"];
   $status=$_POST["Acstatus"];
  if($status=="true")
  {
      $status_value=1;
  }
  else{

      $status_value=0;
  }
  $sql = "UPDATE  data_table SET 	job_title='$user_name',experience='$experience',starting_date='$date',end_date=' $end_date',status=	'$status_value' WHERE  id=$id";
  $result= $con->query($sql);
  if($result == TRUE){
    echo "update done sucessfully";
    header('location:Form1.php');
  }
  else{
    echo "Error:" . $sql . "<br>" . $con->error;
  }

}

?>