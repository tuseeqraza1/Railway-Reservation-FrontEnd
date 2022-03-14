<?php 
	include "db_config.php";
	class User
	{
		public $db;
		public function __construct(){
			$this->db = new DB_con();
			$this->db = $this->db->ret_obj();

		}
		
		/*** for registration process ***/
		
		public function reg_user($full_name,$mobile_no,$emial_id,$cnic_no,$city,$password)
		{
			//echo "k";
			// $password = md5($password);

			//checking if the username or email is available in db
			$query = "SELECT * FROM user_details WHERE mobile_no='$mobile_no' OR emial_id = '$emial_id'";
			$result = $this->db->query($query) or die($this->db->error);
			$count_row = $result->num_rows;
			
			//if the username is not in db then insert to the table
			
			if($count_row == 0){
				$query = "INSERT INTO user_details SET full_name='$full_name', password ='$password', mobile_no='$mobile_no', emial_id='$emial_id',cnic_no='$cnic_no',city='$city'";
				
				$result = $this->db->query($query) or die($this->db->error);
				
				return true;
			}
			else{return false;}
				
		}
			
			
	/*** for login process ***/
		public function check_login($mobile_no, $password){
		// $password = md5($password);

		$query = "SELECT * from user_details WHERE mobile_no='$mobile_no' and password='$password'";
		$result = $this->db->query($query) or die($this->db->error);

		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		$count_row = $result->num_rows;
		
		if ($count_row == 1) {
	            $_SESSION['login'] = true; // this login var will use for the session thing
				$_SESSION['user_id'] = $user_data['user_id'];
				$_SESSION['username'] = $user_data['full_name'];
				$_SESSION['mobile_no'] = $user_data['mobile_no'];
				$_SESSION['email'] = $user_data['emial_id'];
				$_SESSION['cnic'] = $user_data['cnic_no'];
	            return true;
	        }
			
		else{return false;}
		

	}
	
	
	public function get_fullname($user_id){
		$query = "SELECT full_name FROM user_details WHERE user_id = $user_id";
		
		$result = $this->db->query($query) or die($this->db->error);
		
		$user_data = $result->fetch_array(MYSQLI_ASSOC);
		echo $user_data['full_name'];
		
	}
	
	/*** starting the session ***/
	public function get_session(){
	    return $_SESSION['login'];
	}

	public function user_logout() {
	    $_SESSION['login'] = false;
		unset($_SESSION);
		session_destroy();
		
		return true;
    }
}?>