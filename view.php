<?php
// include("connect.php");
include("header.php");
include("data_store_n.php");
$resume_parser_object = new Resume_parser();
?>
<html>

<head>
    <!-- CSS only -->
    
</head>

<body>

        <div class="row">
        <div class="col-10"></div>
        <div class="col-2">
         <button type="button" class="btn btn-outline-primary" onclick="add_view()" id="btn_add">Add</button>
        </div>
        </div>

    <div id="view_table">
        <table class="table table-hover table-bordered border-primary" id="data_table"> 
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
            $job_details = $resume_parser_object->displayData(); 
            foreach ($job_details as $job_details) {

             ?>

            <tr>
                <td><?php echo "$newId" ?></td>
                <td><?php echo "$job_details[job_title]" ?></td>
                <td><?php echo "$job_details[experience]" ?></td>
                <td><?php echo "$job_details[starting_date]" ?></td>
                <td><?php echo "$job_details[end_date]" ?></td>
                <td><?php echo "$job_details[status]" ?></td>


                <!-- <td ><button type="button" class="btn btn-outline-primary" onclick="btn_edit()">Edit</button></td> -->
                <td><a href="edit.php?id=<?php echo $newId; ?>" class="btn btn-outline-primary">Edit</a></td>
            </tr>
            <?php
        $newId++;
    }
    ?>
        </table>
    </div>
    </div>
    </body>
<script type="text/javascript" src="Form1.js"> </script>

</html>
