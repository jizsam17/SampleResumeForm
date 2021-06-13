<?php
include("connect.php");
if($_POST){
    $user_name=$_POST["user_name"];
    $experience=$_POST["experience"];
    $date=$_POST["date"];
    $status=$_POST["status"];
    $end_date=$_POST["end_date"];
    if($status=="true")
    {
        $status_value=1;
    }
    else{

        $status_value=0;
    }

}


$sql = "INSERT INTO data_table (job_title,experience,starting_date,end_date,status)
VALUES ('$user_name', '$experience', ' $date','$end_date',$status_value)";

if (mysqli_query($con, $sql)) {
      
    echo "New record created successfully ";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }

  mysqli_close($con);
  ?>