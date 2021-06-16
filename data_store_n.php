<?php

class Resume_parser{

        private $servername = "localhost";
		private $username   = "root";
		private $password   = "";
		private $database   = "data_db";
		public  $con;

        public function __construct()
		{
		    $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
		    if(mysqli_connect_error()) {
			 trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
		    }else{
			return $this->con;
		    }
		}
        public function displayData()
		{
		    $query = "SELECT * FROM data_table";
		    $result = $this->con->query($query);
			if ($result->num_rows > 0) {
		    $data = array();
		    while ($row = $result->fetch_assoc()) {
		           $data[] = $row;
		    }
			 return $data;
		    }else{
			 echo "No found records";
		    }
		}

		public function edit_display($id)
		{
			$query = "SELECT * FROM data_table WHERE id=$id";
		    $result = $this->con->query($query);
			//$record = $result->fetch_object();
			// if($record->num_rows>0){
			// 	return $record;
			// }
    		// else{
			// 	echo "No records are found";
			// }
			if ($result->num_rows > 0) {
				$data = array();
				while ($row = $result->fetch_assoc()) {
					   	$data[] = $row;
				}
				 return $data;
				}else{
				 echo "No found records";
				}
		}

		public function insert_jobDetails(job_details $job)
        {
			$query=$job->insert_job();
            $sql = $this->con->query($query);
            if($sql==true)
            {
                header('location:view.php');
            }
            else{
                echo "Job Details Insertion Failed";
            }
        }

		public function query_execute($query)
		{
			$sql = $this->con->query($query);
            if($sql==true)
            {
                header('location:view.php');
            }
            else{
                echo "Job Details Query Execute Failed";
            }
		}


}

class job_details{

	public $title;
	public $experience;
	public $st_date;
	public $end_date;
	public $status;

	function __construct($title,$experience,$st_date,$end_date,$status){
		$this->title=$title;
		$this->experience=$experience;
		$this->st_date=$st_date;
		$this->end_date=$end_date;
		if($status=="true")
            {
                $this->status=1;
            }
            else
            {

                $this->status=0;
            }
	}

	function insert_job(){

        $query = "INSERT INTO data_table (job_title,experience,starting_date,end_date,status) VALUES ('$this->title', '$this->experience', '$this->st_date','$this->end_date',$this->status)";
    	return $query;
	}

	function update_job($id){
		$query = "UPDATE  data_table SET job_title='$this->title',experience='$this->experience',starting_date='$this->st_date',end_date=' $this->end_date',status=	$this->status WHERE  id=$id";
		return $query;
	}
        
}
?>

























