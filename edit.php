<?php
include("header.php");
include("data_store_n.php");
$resume_parser_object = new Resume_parser();
?>

<html>

<head>
   
    
</head>

<body>

<div id="formEdit">

            <?php 

                  $job_detail = $resume_parser_object->edit_display($_GET['id']); 
                  foreach ($job_detail as $job_detail) {
            ?>

            <form onsubmit="" action="editbackend.php" method="post">
            <input type="hidden" name="id" id="id" value=<?php echo "$job_detail[id]" ?>>
              <!-- JobTitle TextBox -->
              <div class="row mb-3">
                <label for="inputJobTitle" class="col-sm-2 col-form-label">Job Title</label>
                <div class="col-sm-8">
                  <input type="text" name="username" class="form-control" id="JobTitle" value=<?php echo "$job_detail[job_title]" ?> required>
                </div>
                <div class="invalid-feedback">
                  Please choose a username.
                </div>
              </div>
              <!-- Experience dropdown -->
              <div class="row mb-3">
                <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                <div class="col-sm-8">
                  <select class="custom-select" name="exp" id="Experience" style="width: 130px;"required>
                    <option value="">Choose...</option>
                    <option value="1" <?php echo ($job_detail['experience']==1) ? 'selected="selected"':'';?>>1 year</option>
                    <option value="2" <?php echo ($job_detail['experience']==2) ? 'selected="selected"':'';?>>2 years</option>
                    <option value="3" <?php echo ($job_detail['experience']==3) ? 'selected="selected"':'';?>>6 months</option>
                  </select>
                </div>
              </div>
              <!-- Start date datepicker -->
              <div class="row mb-3">
                <label for="inputStartDate" class="col-sm-2 col-form-label">Start Date</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" id="StDate" name="sdate" value=<?php echo "$job_detail[starting_date]" ?> required onchange="validateDate(event)">
                </div>
              </div>
              <!-- End date date datepicker -->
              <div class="row mb-3">
                <label for="inputStartDate" class="col-sm-2 col-form-label">End date Date</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" id="EdDate" name="ddate" value=<?php echo "$job_detail[end_date]" ?> required onchange="validateUpdateEndDate()">
                </div>
              </div>
              <!-- Status access radiobutton -->
              <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Access Status</legend>
                <div class="col-sm-8">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Acstatus" id="AccessTrue" value="true" <?php echo ($job_detail['status']==1) ? 'checked="checked"':'';?>>
                    <label class="form-check-label" for="accessTrue">
                      Yes
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Acstatus" id="AccessFalse" value="false" <?php echo ($job_detail['status']==0) ? 'checked="checked"':'';?>>
                    <label class="form-check-label" for="accessFalse">
                      No
                    </label>
                  </div>
                </div>
              </fieldset>
              <div class="center d-grid gap-2 col-3 mx-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            <div>
            <?php
    }
    ?>            </div>
          </div>
        </div>
      </div>

</body>
<script type="text/javascript" src="Form1.js"> </script>

</html>
