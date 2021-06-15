<?php
include("header.php");
include("data_store_n.php");
$resume_parser_object = new Resume_parser();

if(isset($_POST['submit'])){
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

    $job_obj = new job_details($_POST['job_title'],$_POST['experience'],$_POST['starting_date'],$_POST['end_date'],$_POST['status']);
    $query=$job_obj->insert_job();
    $resume_parser_object->query_execute($query);
    
}
?>
<html>

<head>
   
    
</head>

<body>

<div id="content">
      
          <form onsubmit="" action="add.php" method="POST" id="form1">
            <!-- JobTitle TextBox -->
            <div class="row mb-3">
              <label for="inputJobTitle" class="col-sm-2 col-form-label">Job Title</label>
              <div class="col-sm-8">
                <input type="text" name="job_title" class="form-control" id="inputJobTitle" required>
              </div>
              <div class="invalid-feedback">
                Please choose a job titile.
              </div>
            </div>
            <!-- Experience dropdown -->
            <div class="row mb-3">
              <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
              <div class="col-sm-8">
                <select class="custom-select" name="experience" id="inputExperience" style="width: 130px;" required>
                  <option value="">Choose...</option>
                  <option value="1">1 year</option>
                  <option value="2">2 years</option>
                  <option value="3">6 months</option>
                </select>
              </div>
            </div>
            <!-- Start date datepicker -->
            <div class="row mb-3">
              <label for="inputStartDate" class="col-sm-2 col-form-label">Start Date</label>
              <div class="col-sm-8">
                <input type="date" class="form-control" id="inputStartDate" name="starting_date" required
                  onchange="validateDate(event)">
              </div>
            </div>
            <!-- End date date datepicker -->
            <div class="row mb-3">
              <label for="inputStartDate" class="col-sm-2 col-form-label">End date Date</label>
              <div class="col-sm-8">
                <input type="date" class="form-control" id="inputEndDate" name="end_date" required
                  onchange="validateEndDate()">
              </div>
            </div>
            <!-- Status access radiobutton -->
            <fieldset class="row mb-3">
              <legend class="col-form-label col-sm-2 pt-0">Access Status</legend>
              <div class="col-sm-8">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status" id="accessTrue" value="true" checked>
                  <label class="form-check-label" for="accessTrue">
                    Yes
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status" id="accessFalse" value="false">
                  <label class="form-check-label" for="accessFalse">
                    No
                  </label>
                </div>
              </div>
            </fieldset>
            <div class="center d-grid gap-2 col-3 mx-auto">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>

</body>
<script type="text/javascript" src="Form1.js"> </script>
</html>