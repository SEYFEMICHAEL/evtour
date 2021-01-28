<?php

class Product extends CI_Controller{
 
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
  
    public function lists(){
      
      // echo '4 new products';
      $this->load->view('shop-grid');
  
     }
     public function list($category=0){
      
      // echo '4 new products';
      $this->load->view('shop-grid');
  
     }
     
     public function detail($id=0){
      if ($id==0)
        redirect(base_url()); 
      else{

        $data['detail']=$this->sm->getAd($id);
        $this->load->view('shop-details',$data);
  
      }
      // echo 'Product '.$id. 'is 100ETB';

      
     }  
}
?>