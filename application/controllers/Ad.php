<?php

class Ad extends CI_Controller{
 
  public function __construct(){

   parent::__construct();
    $this->load->helper('url');
		$this->load->model('Ad_model','sm');

  } 
  
    public function premiumProduct(){
    header("Access-Control-Allow-Origin: *"); 
    $result = $this->sm->db_get_premiumProduct();
    echo json_encode($result);
    }
  
    public function premiumBusiness(){
      header("Access-Control-Allow-Origin: *"); 
      $result = $this->sm->db_get_premiumBusiness(); 
      echo json_encode($result);
      }  
  
  }  

?>