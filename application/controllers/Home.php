<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{ 
		$this->load->view('index');
	}
	public function msg(){
		echo 'hello';
	}
	public function about(){
		$this->load->view('about');
	}
	function book_user(){
		$this->load->view('forms/booking');
	}
  // 

  public function book_mgmt(){
	$this->load->view('dashboard/book/table');
}

public function user_mgmt(){
	$this->load->view('dashboard/user/table');
}

public function tour_mgmt(){
	$this->load->view('dashboard/tour/table');
}

public function panvr_mgmt(){
	$this->load->view('dashboard/panvr/table');
}


	// 
	public function contact(){
		$this->load->view('contact');
	}
	public function park(){
		$this->load->view('attractions/park');
	}
	public function nature(){
		$this->load->view('attractions/nature');
	}
	public function history(){
		$this->load->view('attractions/history');
	}
	public function festival(){
		$this->load->view('attractions/festival');
	}

	public function cpanel(){
		$this->load->view('dashboard/admin');
	}
	public function postad(){
		$this->load->view('dashboard/user');
	}
}
