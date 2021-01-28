<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SignupModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
   
    private $table = "user";
	private $_data = array();


    public function getSignup($name, $username, $password,  $email) {

        //password shasing called
        // $secure_hash = $this->own_hash($password);
        $secure_hash = sha1($password);
        $this->db->query("INSERT INTO  `user`(`username`, `email`, `password`,`first_name`) VALUES ('$username','$email','$secure_hash','$name')");

        return TRUE;
    }

    public function own_hash($input_pass) {
        $secure = password_hash($input_pass, PASSWORD_DEFAULT);//PASSWORD_BCRYPT is used to create new password hashes using the CRYPT_BLOWFISH algorithm.
        return $secure;
    }

    public function validate()
	{
		$username = $this->input->post('email');
		$password = $this->input->post('password');

		$this->db->where("email", $username);
		$query = $this->db->get($this->table);

		if ($query->num_rows()) 
		{
			// found row by username	
			$row = $query->row_array();

			// now check for the password
            if ($row['password'] == sha1($password))
            // if ($row['password'] == $this->own_hash($password)) 
			{
				// we not need password to store in session
				unset($row['password']);
				$this->_data = $row;
				return ERR_NONE;
			}

			// password not match
			return ERR_INVALID_PASSWORD;
		}
		else {
			// not found
			return ERR_INVALID_USERNAME;
		}
    }
    public function get_data()
	{
		return $this->_data;
	}





    public function user_login($email,$pass){
        // $secure_hash = $this->own_hash($pass);
        $shp=sha1($pass);
        
        // $this->db->select('*');
        // $this->db->from('user');
        // $this->db->where('email',$email);
        // $this->db->where('password',$shp);
        $this->db->where("email", $email);
        $query = $this->db->get($this->table);
        if ($query->num_rows()) 
		{
			// found row by username	
			$row = $query->row_array();

			// now check for the password
			if ($row['password'] == sha1($password)) 
			{
				// we not need password to store in session
				unset($row['password']);
				$this->_data = $row;
				return ERR_NONE;
			}

			// password not match
			return ERR_INVALID_PASSWORD;
		}
		else {
			// not found
			return ERR_INVALID_USERNAME;
		}
	



        // if($query=$this->db->get())
        // {   echo'<script>console.log("user_row_array");</script>';
        //     return $query->row_array();

        // }
        // else{
        //     echo'<script>console.log("no data");</script>';
        //   return false;
        // }
      
      
      }
}
