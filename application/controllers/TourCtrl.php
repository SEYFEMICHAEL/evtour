<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TourCtrl extends CI_Controller {
   
    
    
	public function __construct()
	{
		parent::__construct();
		$this->load->model('TourModel','Tour');
		$this->load->helper(array('form','url'));
		$this->load->library(array('form_validation','session'));
	}
	
// public function callbackV(){
// 	//|is_unique[]
// 	$this->form_validation->set_rules('user_fname','FirstName','trim|xss_clean|required|min_length[5]|callback__name_check');
// }
	public function index()
	{

		$this->load->helper('url');
			$this->load->view('user_view');
	}
	public function email_check($str)
	{
		return (!filter_var($str,FILTER_VALIDATE_EMAIL))? FALSE:TRUE;
	}

public function name_check($str)
{
	return (!preg_match("/^([-a-z_ ])+$/i",$str))? FALSE:TRUE;
}
	public function ajax_list()
	{
		$this->load->helper('url');

		$list = $this->Tour->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $tour) {
            $no++;
            $row = array();
			$row[] = $tour->name;
			$row[] = $tour->detail;
            $row[] = $tour->type;
            ($tour->active==1)?$row[] ='Active':$row[] ='Disabled';

			if($tour->img)
				$row[] = '<a href="'.base_url('uploads/tour/'.$tour->img).'" target="_blank"><img style="width:100px;height:50px;" src="'.base_url('uploads/tour/'.$tour->img).'" class="img-responsive" /></a>';
			else
				$row[] = '(No photo)';

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_tour('."'".$tour->tour_id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_tour('."'".$tour->tour_id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->Tour->count_all(),
						"recordsFiltered" => $this->Tour->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($user_id)
	{
		$data = $this->Tour->get_by_user_id($user_id);
		//$data->user_role = ($data->user_role == '0000-00-00') ? '' : $data->user_role; // if 0000-00-00 set tu empty for datepicker compatibility
		echo json_encode($data);
	}

	public function category_list()
	{
		$data = $this->Tour->get_category(); echo json_encode($data);
	}

	public function ajax_add()
	{
		$this->_validate(); 
        $data = array(
			    'name' => $this->input->post('name'),
				'detail' => $this->input->post('detail'),
				'type' => $this->input->post('type'),
				'active' => $this->input->post('active')			);

		if(!empty($_FILES['fileToUpload']['name']))
		{
			$upload = $this->_do_upload();
			$data['img'] = $upload;
		}

		$insert = $this->Tour->save($data);

		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{  
		$data = array(
            'name' => $this->input->post('name'),
            'detail' => $this->input->post('detail'),
            'type' => $this->input->post('type'),
            'active' => $this->input->post('active')
			);
            // print_r($data);
		if($this->input->post('remove_photo')) // if remove photo checked
		{
			if(file_exists('uploads/tour/'.$this->input->post('remove_photo')) && $this->input->post('remove_photo'))
				unlink('uploads/tour/'.$this->input->post('remove_photo'));
			$data['img'] = '';
		}

		if(!empty($_FILES['fileToUpload']['name']))
		{
			$upload = $this->_do_upload();

			//delete file
            $tp = $this->Tour->get_by_user_id($this->input->post('tour_id')); 
            // print_r('5');
        if(file_exists('uploads/tour/'.$tp->img) && $tp->img)unlink('uploads/tour/'.$tp->img);

             $data['img'] = $upload;
        }
        $idd=$this->input->post('tour_id');
        // print_r($idd);
		$this->Tour->update(array('tour_id' => $this->input->post('tour_id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	 

	public function ajax_delete($user_id)
	{
		//delete file
		$user = $this->Tour->get_by_user_id($user_id);
		if(file_exists('uploads/tour/'.$user->img) && $user->img)
			unlink('uploads/tour/'.$user->img);

		$this->Tour->delete_by_user_id($user_id);
		echo json_encode(array("status" => TRUE));
	}



public function usertype($value)
{
	$this->Tour->usercount($value);
	echo json_encode(array("status" => TRUE));
}



	private function _do_upload()
	{
		$config['upload_path']          = 'uploads/tour/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 5000;
        $config['max_width']            = 4000;
        $config['max_height']           = 4000;
        $config['file_name']            = 'Tour_'.round(microtime(true) * 1000);

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('fileToUpload'))
        {
            $data['inputerror'][] = 'fileToUpload';
			//$data['error_string'][] = 'Upload error: '.$this->upload->display_errors('','');
			$data['error_string'][] = 'Upload error: '.$this->upload->display_errors('','');
			$data['status'] = FALSE;
			echo json_encode($data);
			exit();
		}
		return $this->upload->data('file_name');
	}

	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

    $name=$this->input->post('name');
    if($name == '')
    {
        $data['inputerror'][] = 'name';
        $data['error_string'][] = 'name is required';
        $data['status'] = FALSE;
    }
		if($this->input->post('detail') == '')
		{
			$data['inputerror'][] = 'detail';
			$data['error_string'][] = 'detail is required';
			$data['status'] = FALSE;
		}

       

		if($this->input->post('type') == '')
		{
			$data['inputerror'][] = 'type';
			$data['error_string'][] = 'select type';
			$data['status'] = FALSE;
        }  
        
		if($this->input->post('active') == '')
		{
			$data['inputerror'][] = 'active';
			$data['error_string'][] = 'select active';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}

}
