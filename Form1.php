<?php
include("connect.php");
include("header.php")
?>

      

      


        


          <div id="view_table">
            <table class="table table-hover" id="data_table"> 
    <thead>
          <tr>
            <th scope=" col">No</th>
              <th scope="col">Job Title</th>
              <th scope="col">Experience</th>
              <th scope="col">Start Date</th>
              <th scope="col">End Date</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
              </tr>
              </thead>

              <?php
          $newId=1;
           $sql = "SELECT * FROM data_table";
           $result = $con->query($sql);
           while( $row = $result->fetch_assoc()){
            ?>
        <tr>
      <th scope="row"><?php echo "$newId" ?></th>
      <td><?php echo "$row[job_title]" ?></td>
      <td><?php echo "$row[experience]" ?></td>
      <td><?php echo "$row[starting_date]" ?></td>
      <td><?php echo "$row[end_date]" ?></td>
      <td><?php echo "$row[status]" ?></td>
      <td><button type='button' class='btn btn-outline-primary' onclick='btn_edit(event)'>Edit</button></td>
        
              <!-- <td ><button type="button" class="btn btn-outline-primary" onclick="btn_edit(this)">Edit</button></td>  -->
              <!-- <td><a href="editbackend.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-primary"
                  onclick="btn_edit(event)">Edit</a></td> -->

              
        </tr>
        <?php
        $newId++;
    }
    ?>
            </table>
          </div>


          <div id="formEdit">

            <form onsubmit="" action="editBackend.php" method="post">
            <input type="hidden" name="id" id="id"/>
              <!-- JobTitle TextBox -->
              <div class="row mb-3">
                <label for="inputJobTitle" class="col-sm-2 col-form-label">Job Title</label>
                <div class="col-sm-8">
                  <input type="text" name="username" class="form-control" id="JobTitle" required>
                </div>
                <div class="invalid-feedback">
                  Please choose a username.
                </div>
              </div>
              <!-- Experience dropdown -->
              <div class="row mb-3">
                <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                <div class="col-sm-8">
                  <select class="custom-select" name="exp" id="Experience" style="width: 130px;" required>
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
                  <input type="date" class="form-control" id="StDate" name="sdate" required onchange="validateDate(event)">
                </div>
              </div>
              <!-- End date date datepicker -->
              <div class="row mb-3">
                <label for="inputStartDate" class="col-sm-2 col-form-label">End date Date</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" id="EdDate" name="ddate" required onchange="validateUpdateEndDate()">
                </div>
              </div>
              <!-- Status access radiobutton -->
              <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Access Status</legend>
                <div class="col-sm-8">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Acstatus" id="AccessTrue" value="true" checked>
                    <label class="form-check-label" for="accessTrue">
                      Yes
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Acstatus" id="AccessFalse" value="false">
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



            </div>
          </div>
        </div>
      </div>

</body>
<script type="text/javascript" src="Form1.js"> </script>

</html>