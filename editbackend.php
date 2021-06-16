<?php
include("connect.php");
include("data_store_n.php");
$resume_parser_object = new Resume_parser();
$errors = [];

if($_POST){
        if(empty($_POST['username'])){
          //echo '<script> alert("empty") </script>';
          $errors['username'] = "Job title is required";
      }
      if(empty($_POST['exp'])){
        //echo '<script> alert("empty") </script>';
        $errors['experience'] = "Experience is required";
      }
      if(empty($_POST['sdate'])){
        //echo '<script> alert("empty") </script>';
        $errors['starting_date'] = "Start date is required";
      }
      if(empty($_POST['ddate'])){
        //echo '<script> alert("empty") </script>';
        $errors['end_date'] = "End date is required";
      }
      if(empty($_POST['Acstatus'])){
        //echo '<script> alert("empty") </script>';
        $errors['status'] = "Experience is required";
      }
if(!empty($errors)){
  // echo '<script type="text/javascript"> 
  // function display_error(){
  //   document.querySelector("#jobtitle").addClass("has-error");
  //   document.querySelector("#jobtitle").append(<div class="help-block"> Error </div>);
  //   }
  //   </script>';

  if($errors['username']){
          echo '<script type="text/javascript"> alert("Job title required") </script>';
        }
        if($errors['experience']){
          echo '<script type="text/javascript"> alert("Experience required") </script>';
        }
        if($errors['starting_date']){
          echo '<script type="text/javascript"> alert("Start date required") </script>';
        }
        if($errors['end_date']){
          echo '<script type="text/javascript"> alert("End date required") </script>';
        }
        if($errors['status']){
          echo '<script type="text/javascript"> alert("Status required") </script>';
        }
  }
  else{
    $job_obj = new job_details($_POST['username'],$_POST['exp'],$_POST['sdate'],$_POST['ddate'],$_POST['Acstatus']);
    $query = $job_obj->update_job($_POST['id']);
    $resume_parser_object->query_execute($query);
  }
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