<?php  
session_start();
/**
 * 
 */
class users
{
	public $host="localhost";
	public $username="root";
	public $pass="";
	public $db_name="jobify_database";
	public $conn;
	public $data;
	public $cat_data;
	public $questios_details;

	public function __construct()               //it is the constructor called automatically when we create object
	{
		$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
		if ($this->conn->connect_errno) 
		{
			die("database connection failed".$this->conn->connect_errno);
		}
	}


	public function signup($data)                 //funtion for signup(called in signup_submit.php)
	{
		$this->conn->query($data);
		return true;
	}

	public function login($email,$pass)                  // funtion for login(called in login_submit.php)
	{
		
		$query=$this->conn->query("select email,password from users where email='$email' and password='$pass'");
		$query->fetch_array(MYSQLI_ASSOC);

		if ($query->num_rows>0) 
		{	
			$_SESSION['email']=$email;
			return true;
		}
		else
		{
			return false;
		}

	}

	public function show_users_profile($email)  		 //function to diaplay the users profile
	{
		$query=$this->conn->query("select * from users where email='$email'");
		$row=$query->fetch_array(MYSQLI_ASSOC);

		if ($query->num_rows>0) 
		{	
			$this->data[]=$row;

		}
	return $this->data;
	}

	public function show_courses()                //function to diaplay the course list in dropdown box
	{
		$query=$this->conn->query("select * from category");

		while($row=$query->fetch_array(MYSQLI_ASSOC))      // while loop to fetch all data one by one and store in cat_data array variable
		{	
			$this->cat_data[]=$row;
			
		}
		
	return $this->cat_data;
	}


	public function show_questions($course_id)
	{
		$query=$this->conn->query("select * from question_test where course_id='$course_id'");

		while($row=$query->fetch_array(MYSQLI_ASSOC))      // while loop to fetch all data one by one and store in cat_data array variable
		{	
			$this->questios_details[]=$row;
			

		}
		
	return $this->questios_details;
	}

	public function show_result($data)

	{
		

		$ans=implode("", $data);    // implode function to convert array to string
		$course_id=$_SESSION['course_id'];  // get course id from session variable
		$right=0;
		$wrong=0;
		$no_answer=0;

		$query=$this->conn->query("select id,answer from question_test where course_id='$course_id'");

		while($row=$query->fetch_array(MYSQLI_ASSOC))      // while loop to fetch all data one by one and store in cat_data array variable
		{	
			if ($row['answer']==$_POST[$row['id']])         // if answer is right
			 {
				$right++;
			}
			elseif ($_POST[$row['id']]=="no_attempt")   // if no answer is selected
			 {
				$no_answer++;
			}
			else
			{
				$wrong++;                          // if answer is wrong
			}

		}
		$array=array();                // array to store the result
		$array['right']=$right;         // store the result in array
		$array['wrong']=$wrong;
		$array['not_attempted']=$no_answer;
		return $array;					// return the array

	 }



	public function add_quiz($query_string)
	{
		$this->conn->query($query_string);
		return true;
	}

}













?>