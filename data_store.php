<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if($_POST){
    $user_name=$_POST["user_name"];
    $experience=$_POST["experience"];
    $date=$_POST["date"];
    $status=$_POST["status"];

    if($status=="true")
    {
        $status_value=1;
    }
    else{

        $status_value=0;
    }

}


$sql = "INSERT INTO data_table (job_title,experience,starting_date,status)
VALUES ('$user_name', '$experience', ' $date',$status_value)";

if (mysqli_query($conn, $sql)) {
      
    echo "New record created successfully ";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
  ?>