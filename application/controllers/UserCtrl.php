<?php
//defined('BASEPATH') OR exit('No direct script access allowed');get_all_user()

class UserCtrl extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('User_Model','User');
		 
	}
public function ajax_list()
	{
		$list = $this->User->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $person) {
			$no++;
			$row = array();
			$row[] = $person->first_name;
			$row[] = $person->last_name;
			$row[] = $person->username;
			$row[] = $person->email;
			$row[] = $person->phone;
			$row[] = $person->role;

		// 	$row[] = $person->DOM;
		// 	if($person->user_photo)
		// 	$row[] = '<a href="'.base_url('assets/users/'.$person->user_photo).'" target="_blank"><img width="50" height="50" src="'.base_url('assets/users/'.$person->user_photo).'" class="img-responsive" /></a>';
		// else
		// 	$row[] = '(No photo)';

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Remove" onclick="delete_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->User->count_all(),
						"recordsFiltered" => $this->User->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->User->get_by_id($id);
		//$data->dob = ($data->dob == '0000-00-00') ? '' : $data->dob; // if 0000-00-00 set tu empty for datepicker compatibility
		
		
	//echo '<script>alert("'.$data->user_password.'");</script>';

		echo json_encode($data);
	}

	public function ajax_add()
	{
		$this->_validate();
		//Add patient to user and Patient table at the same time
		 
		$data = array(

			    'username' => $this->input->post('user_name'),
				'first_name' => $this->input->post('user_fname'),
				'password'=>sha1($this->input->post('user_password')),
				'last_name' => $this->input->post('user_lname'),
				// 'user_sex' => $this->input->post('user_sex'),
				'role' => $this->input->post('user_role'),
				'email' => $this->input->post('user_email'),
				'phone'=>$this->input->post('user_phone')
			);
		// 	if(!empty($_FILES['user_photo']['name']))
		// {
		// 	$upload = $this->_do_upload();
		// 	$data['user_photo'] = $upload;
		// }

		$insert = $this->User->save($data);
		echo json_encode(array("status" => TRUE));	
		 
		
	}

	public function ajax_update()
	{//adminmd5->e3afed0047b08059d0fada10f400c1e5
		$this->_validate();
		$data = array(
			'username' => $this->input->post('user_name'),
            'first_name' => $this->input->post('user_fname'),
            'password'=>sha1($this->input->post('user_password')),
            'last_name' => $this->input->post('user_lname'),
            // 'user_sex' => $this->input->post('user_sex'),
            'role' => $this->input->post('user_role'),
            'email' => $this->input->post('user_email'),
            'phone'=>$this->input->post('user_phone')
			);
			 
		$this->User->update(array('id' => $this->input->post('user_id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->User->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
    }
    
private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;
 
if($this->input->post('user_fname') == '')
		{
			$data['inputerror'][] = 'user_name';
			$data['error_string'][] = 'user_name is required';
			$data['status'] = FALSE;
		}
		if($this->input->post('user_password') == '')
		{
			$data['inputerror'][] = 'user_password';
			$data['error_string'][] = 'user_password is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('user_lname') == '')
		{//
			$data['inputerror'][] = 'user_lname';
			$data['error_string'][] = 'Last name is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('user_phone') == '')
		{
			$data['inputerror'][] = 'user_phone';
			$data['error_string'][] = 'Phone is required';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
    }
    
}