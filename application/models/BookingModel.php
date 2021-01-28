<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BookingModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
   
    private $table = "booking";
	private $_data = array(); 
	var $column_order = array('fname','place','timestamp','date',null); //set column field database for datatable orderable
	var $column_search = array('fname','place','timestamp','date'); //set column field database for datatable searchable just firstname , lastname , address are searchable
	var $order = array('book_id' => 'desc'); // default order 

    public function getBooking($name, $user_id, $place,  $date) {
 
        $this->db->query("INSERT INTO  `booking`(`user_id`, `place`, `date`,`fname`) VALUES ('$user_id','$place','$date','$name')");

        return TRUE;
	}
	
    function set_code($id,$code){
		// $this->db->set('code', $code);
		// $this->db->where('book_id', $id);
		// $this->db->update('booking'); 

$sql = "UPDATE booking SET code = ? WHERE book_id = ?";
$this->db->query($sql, array($code, $id)); 
	}
	private function _get_datatables_query()
	{
		// $id=$this->session->userdata('id');
		$this->db->from($this->table);
		$this->db->where('state != 0');
		// $this->db->where('id !=',$id);

		$i = 0;
	
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('book_id',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function get_bookings($id)
	{
		$this->db->from($this->table);
		$this->db->where('user_id',$id);
		$query = $this->db->get();

		//return $query->row();only one row $place,$name
	    return $query->result_array();//return arrayobject result $place,$name
	}

	public function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function deletebook($id)
	{   $sql = "DELETE  FROM booking WHERE book_id = ? AND user_id = ?";
		$this->db->query($sql, [$id, $this->session->userdata('id')]);
		// $builder->where('book_id', $id);
		// $builder->delete(); 
	}

	
	public function delete_by_id($id)
	{
		
		//$this->db->delete($this->table);
		$this->db->set('state', 0);
		$this->db->where('book_id', $id);
		$this->db->update('booking'); 
	}

	public function get_del_user(){
		$this->db->from($this->table);
		$this->db->where('state',0);
		$query = $this->db->get();
	
		return $query->row();
	   }
	
	public function get_all_user(){
		$query=$this->db->count_all('booking');
		//echo '<script>alert("'.$query.'");</script>';
		return $query;
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
	  }
	  


}
