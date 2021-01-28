<?php

class Search extends CI_Controller{
 
  public function __construct(){

  	 parent::__construct();
  	    $this->load->helper('url');
		$this->load->model('Search_model','sm');

  }
  public function index(){
    $this->load->view('shop-grid');
  }
  public function action(){
    header("Access-Control-Allow-Origin: *");
    // header("Access-Control-Allow-Credentials: true");
    // header("Access-Control-Max-Age: 1000");
    // header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin,Cache-Control,Pragma, Authorization, Accept, Accept-Encoding ");
    // header("Access-Control-Allow-Methods: POST");GET,DELETE,PUT

    if (isset($_POST['query'])) { 
        $inpText =filter_var ( $_POST['query'], FILTER_SANITIZE_STRING);
        $result = $this->sm->db_Read($inpText);
        if ($result) { 
    echo json_encode($result);
          } else {
              echo json_encode('x');
          }
        
    }
    }



  public function detail(){
    header("Access-Control-Allow-Origin: *"); 
  
// //display the retrieved result on the webpage  
// while ($row = mysqli_fetch_array($result)) {  
//     echo $row['id'] . ' ' . $row['title'] . '</br>';  
// }  


// //display the link of the pages in URL  
// for($page = 1; $page<= $number_of_page; $page++) {  
//     echo '<a href = "adp.php?page=' . $page . '">' . $page . ' </a>';  
// }  


    if (isset($_POST['query'])) { 
        $inpText =filter_var ( $_POST['query'], FILTER_SANITIZE_STRING);
        //define total number of results you want per page 
        $results_per_page = 5;  
        //total num of result
       $result_count = $this->sm->db_get_detail_count($inpText); 
       $number_of_page = ceil ($result_count / $results_per_page);
       //determine which page number visitor is currently on
        if (!isset ($_GET['page']) ) {  
            $page = 1;  
        } else {  
            $page = $_GET['page'];  
        }  
        //determine the sql LIMIT starting number for the results on the displaying page  
        $page_first_result = ($page-1) * $results_per_page;  
        //retrieve the selected results from database
        $result = $this->sm->db_Read_detail($inpText,$page_first_result,$results_per_page);
        //display the retrieved result on the webpage 
        if ($result) { 
             //display the link of the pages in URL  
          $dp=array();
          for($page = 1; $page<= $number_of_page; $page++) {
            //   $dp[]='<a href = "'.base_url().'search/detail?page=' . $page . '">' . $page . ' </a>';     
            $dp[]='<a href="#" onClick="paginate('.$page.');">'.$page.'</a>';  
        } 
          $output=array(
              'page'=>$dp,
              'data'=>$result
          );
           
            echo json_encode($output);

          } else {
            echo json_encode('x');
          }
         
        
    }
  }  
  public function paginate(){
    header("Access-Control-Allow-Origin: *"); 
    if (isset($_POST['query_w']) && isset($_POST['query_p'])) {
      //echo $_POST['query_w']." ".$_POST['query_p'];
      $inpText =filter_var ( $_POST['query_w'], FILTER_SANITIZE_STRING);
      //define total number of results you want per page 
      $results_per_page = 5;  
      //total num of result
     $result_count = $this->sm->db_get_detail_count($inpText); 
     $number_of_page = ceil ($result_count / $results_per_page);
     //determine which page number visitor is currently on
      $page = filter_var ( $_POST['query_p'], FILTER_SANITIZE_STRING);   
      //determine the sql LIMIT starting number for the results on the displaying page  
      $page_first_result = ($page-1) * $results_per_page;  
      //retrieve the selected results from database
      $result = $this->sm->db_Read_detail($inpText,$page_first_result,$results_per_page);
      //display the retrieved result on the webpage 
      if ($result) { 
           //display the link of the pages in URL  
        $dp=array();
        for($page = 1; $page<= $number_of_page; $page++) {
          //   $dp[]='<a href = "'.base_url().'search/detail?page=' . $page . '">' . $page . ' </a>';     
          $dp[]='<a href="#" onClick="paginate('.$page.');">'.$page.'</a>';  
      } 
        $output=array(
            'page'=>$dp,
            'data'=>$result
        );
         
          echo json_encode($output);

        } else {
          echo json_encode('x');
        }

  }
}

}

?>