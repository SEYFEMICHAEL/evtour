<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model {

	private $table = "user";
	private $_data = array();
    public function own_hash($input_pass) {
        $secure = password_hash($input_pass, PASSWORD_DEFAULT);//PASSWORD_BCRYPT is used to create new password hashes using the CRYPT_BLOWFISH algorithm.
        return $secure;
    }
	public function validate()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->db->where("username", $username);
		$query = $this->db->get($this->table);

		if ($query->num_rows()) 
		{
			// found row by username	
			$row = $query->row_array();

            // now check for the password
            $secure_hash = $this->own_hash($password);
            // if ($row['password'] == sha1($password)) 
            if ($row['password'] == $secure_hash) 
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

}