<?php
include("connect.php");
?>
<html>

<head>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="./Form1.css">
</head>

<body>

  <style>
    <?php include "Form1.css"?>
    tbody,
    td,
    tfoot,
    th,
    thead,
    tr
    {
    border-color:
    inherit;
    border-style:
    solid;
    border-width:
    2px;
    padding-right:
    30px;
    padding-left:
    30px;
    padding-top:1%;
    padding-bottom:1%;
    }
  </style>

  <div class="containerRow">
    <div class="row">
      <div class="col-3 dashboard" style="padding: 10px">
        <h2>DashBoard</h2>
        <div class="row" style="padding: 5px">
          <button type="button" class="btn btn-outline-primary" onclick="home_view()" disabled>Home</button>
        </div>
        <div class="row" style="padding: 5px">
          <button type="button" class="btn btn-outline-primary" id="click" onclick="load_view()" disabled>View</button>
        </div>
      </div>
      <div class="col-9">

      <div class="row">
        <div class="col-10"></div>
        <div class="col-2">
      <button type="button" class="btn btn-outline-primary" onclick="home_view()" id="btn_add">Add</button>
        </div>
      </div>


        <div id="content">
          <form onsubmit="" action="data_store.php" method="post" id="form1">
            <!-- JobTitle TextBox -->
            <div class="row mb-3">
              <label for="inputJobTitle" class="col-sm-2 col-form-label">Job Title</label>
              <div class="col-sm-8">
                <input type="text" name="user_name" class="form-control" id="inputJobTitle" required>
              </div>
              <div class="invalid-feedback">
                Please choose a username.
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
                <input type="date" class="form-control" id="inputStartDate" name="date" required
                  onchange="validateDate(event)">
              </div>
            </div>
            <!-- End date date datepicker -->
            <div class="row mb-3">
              <label for="inputStartDate" class="col-sm-2 col-form-label">End date Date</label>
              <div class="col-sm-8">
                <input type="date" class="form-control" id="inputEndDate" name="end_date" required
                  onchange="validateEndDate(event)">
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
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>


          <div id="view_table">
            <table class="table-style table" id="data_table""> 
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
        
        echo "<tr>";
        echo "<td>".$newId . "</td>";
        echo "<td>".$row['job_title'] . "</td>";
        echo "<td>".$row['experience'] . "</td>";
        echo "<td>".$row['starting_date'] . "</td>";
        echo "<td>".$row['end_date'] . "</td>";
        echo "<td>".$row['status'] . "</td>";
         echo "<td><button type='button' class='btn btn-outline-primary' onclick='btn_edit(event)'>Edit</button></td>";
        ?>
              <!-- <td ><button type="button" class="btn btn-outline-primary" onclick="btn_edit(this)">Edit</button></td>  -->
              <!-- <td><a href="editbackend.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-primary"
                  onclick="btn_edit(this)">Edit</a></td> -->

              <?php
        echo "</tr>";
       
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