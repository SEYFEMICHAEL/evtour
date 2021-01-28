<?php

class BookingCtrl extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('BookingModel', 'Book');
    }

     
    public function index(){
        $this->load->view('forms/booking');
    }     
        

     

    public function book() {

        // $this->form_validation->set_rules('user_id', 'user_id', 'trim|required|numeric|max_length[255]|exist[user.id]');
        $this->form_validation->set_rules('place', 'place', 'trim|required|max_length[15]');
        $this->form_validation->set_rules('date', 'date', 'trim|required');
       
       
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {

            $place = $this->input->post("place");
            $user_id = $this->input->post("user_id");
            $date = $this->input->post("date");
            $name= $this->input->post("fname");
            $isDone = $this->Book->getBooking($name, $user_id, $place,  $date);

            if ($isDone === TRUE) {
                //$this->session->set_flashdata("reg", "Registration Successful!");
            //    redirect(base_url());
            redirect(base_url('viewbooking/'.$id.''));
                //$this->load->view('thanks');
            }
        }
    }

    public function ajax_list()
	{
		$list = $this->Book->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $book) {
			$no++;
			$row = array();
			$row[] = $book->fname; 
			$row[] = $book->place;
			$row[] = $book->timestamp;
            $row[] = $book->date; 
            $row[] = $book->code;  
			//add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="abook('."'".$book->book_id."'".')"><i class="glyphicon glyphicon-pencil"></i>Activate</a>
            <a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$book->book_id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Remove" onclick="delete_person('."'".$book->book_id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->Book->count_all(),
						"recordsFiltered" => $this->Book->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
    public function activateBook($id){

        $code=strtoupper(substr(str_shuffle(MD5(microtime())), 0, 4));
        $this->Book->set_code($id,$code);
    }

	public function ajax_edit($id)
	{
		$data = $this->Book->get_by_id($id);
		//$data->dob = ($data->dob == '0000-00-00') ? '' : $data->dob; // if 0000-00-00 set tu empty for datepicker compatibility
		
		
	//echo '<script>alert("'.$data->user_password.'");</script>';

		echo json_encode($data);
	}

	public function ajax_add()
	{
		$this->_validate();
		//Add patient to user and Patient table at the same time
		 
		$data = array(
          
				'fname' => $this->input->post('fname'), 
				'place' => $this->input->post('place'),
				'date' => $this->input->post('date') 
			);
		 

		$insert = $this->Book->save($data);
		echo json_encode(array("status" => TRUE));	
		 
		
    }
    public function cancelBook($id='0'){
        print_r($id);
        $this->Book->delete_by_id($id);
        // $this->load->view('forms/booking');
        // $url='viewbooking/'.$this->session->userdata('');
        
        redirect(base_url('viewbooking/'.$id.''));
    }

    public function viewbook($id='0'){
        $id=($id != '0' )?$id: $this->input->post('user_id');
        $list= $this->Book->get_bookings($id);
        // print_r($list);
        // echo '<script>console.log(":-'.$list.'");</script>';
		 $data['views']=$list;
        $this->load->view('forms/booking',$data);

    }
	public function ajax_update()
	{//adminmd5->e3afed0047b08059d0fada10f400c1e5
		$this->_validate();
		$data = array(
			'fname' => $this->input->post('fname'), 
				'place' => $this->input->post('place'),
				'date' => $this->input->post('date') 
			);
			 
		$this->Book->update(array('book_id' => $this->input->post('book_id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->Book->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
    }
    
private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;
 
        if($this->input->post('fname') == '')
		{
			$data['inputerror'][] = 'fname';
			$data['error_string'][] = 'Full Name is required';
			$data['status'] = FALSE;
        }
        if($this->input->post('place') == '')
		{
			$data['inputerror'][] = 'place';
			$data['error_string'][] = 'place is required';
			$data['status'] = FALSE;
        }
        if($this->input->post('date') == '')
		{
			$data['inputerror'][] = 'date';
			$data['error_string'][] = 'date is required';
			$data['status'] = FALSE;
		}
		

		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
    }


}
