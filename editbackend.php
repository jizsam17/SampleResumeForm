<?php
include("connect.php");
include("data_store_n.php");
$resume_parser_object = new Resume_parser();

if($_POST){
  if(empty($_POST['job_title'])){
    echo '<script> alert("empty") </script>';
  }
  if(empty($_POST['experience'])){
  echo '<script> alert("empty") </script>';
  }
  if(empty($_POST['starting_date'])){
  echo '<script> alert("empty") </script>';
  }
  if(empty($_POST['end_date'])){
  echo '<script> alert("empty") </script>';
  }
  if(empty($_POST['status'])){
  echo '<script> alert("empty") </script>';
  }
  $job_obj = new job_details($_POST['username'],$_POST['exp'],$_POST['sdate'],$_POST['ddate'],$_POST['Acstatus']);
  $query = $job_obj->update_job($_POST['id']);
  $resume_parser_object->query_execute($query);
}


// if($_POST){
//     $id=$_POST["id"];
//   $user_name=$_POST["username"];
//   $experience=$_POST["exp"];
//   $date=$_POST["sdate"];
//    $end_date=$_POST["ddate"];
//    $status=$_POST["Acstatus"];
//   if($status=="true")
//   {
//       $status_value=1;
//   }
//   else{

//       $status_value=0;
//   }
//   $sql = "UPDATE  data_table SET 	job_title='$user_name',experience='$experience',starting_date='$date',end_date=' $end_date',status=	'$status_value' WHERE  id=$id";
//   $result= $con->query($sql);
//   if($result == TRUE){
//     echo "update done sucessfully";
//     header('location:Form1.php');
//   }
//   else{
//     echo "Error:" . $sql . "<br>" . $con->error;
//   }

//  }

?>