<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

  public function __construct(){
 
    parent::__construct();
    $this->load->helper('url');

    // Load session
    $this->load->library('session');

    // Load Pagination library
    $this->load->library('pagination');

    // Load model
    $this->load->model('Test_model');
  }

  public function index(){
      
    $this->load->view('test/index');
    // redirect(base_url('test'));
  }

  public function loadRecord($rowno=0){

    // Search text
    $search_text = "";
    $search_text = $this->input->post('search');
    $this->session->set_userdata(array("search"=>$search_text));
    // if($this->input->post('submit') != NULL ){
    //   $search_text = $this->input->post('search');
    //   $this->session->set_userdata(array("search"=>$search_text));
    // }else{
    //   if($this->session->userdata('search') != NULL){
    //     $search_text = $this->session->userdata('search');
    //   }
    // }

    // Row per page
    $rowperpage = 2;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }
 
    // All records count
    $allcount = $this->Test_model->getrecordCount($search_text);

    // Get records
    $users_record = $this->Test_model->getData($rowno,$rowperpage,$search_text);
 
    // Pagination Configuration
    $config['base_url'] = base_url().'test/loadRecord';
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;
    
    $config['full_tag_open'] = "<ul class='pagination'>";
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li class="page-item"><p class="page-link">';
    $config['num_tag_close'] = '</p></li>';
    $config['cur_tag_open'] = '<li class="page-item active"><p class="page-link">';
    $config['cur_tag_close'] = '</p></li>';
    $config['prev_tag_open'] = '<li class="page-item"><p class="page-link">';
    $config['prev_tag_close'] = '</p></li>';
    $config['first_tag_open'] = '<li class="page-item"><p class="page-link">';
    $config['first_tag_close'] = '</p></li>';
    $config['last_tag_open'] = '<li class="page-item"><p class="page-link">';
    $config['last_tag_close'] = '</p></li>';



    $config['prev_link'] = '<p class="page-link">Previous</p>';
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';


    $config['next_link'] = '<p class="page-link" >Next</p>';
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';



    // Initialize
    $this->pagination->initialize($config);
 
    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;
    $data['search'] = $search_text;

    // Load view
    $this->load->view('test/index',$data);
 
  }

}