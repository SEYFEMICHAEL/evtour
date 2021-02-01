<?php

class SiteCtrl extends CI_Controller{
 
  public function __construct(){

   parent::__construct();
    $this->load->helper('url');
		$this->load->model('Site_model','sm');

  } 
  public function getCarousel(){
    // header("Access-Control-Allow-Origin: *"); 
    $result = $this->sm->db_get_Carousel(); 
    echo json_encode($result);
    } 
  public function getVR(){
        // header("Access-Control-Allow-Origin: *"); 
        $result = $this->sm->db_get_VR(); 
        echo json_encode($result);
        } 
  public function getPanaroma(){
            // header("Access-Control-Allow-Origin: *"); 
            $result = $this->sm->db_get_Panaroma(); 
            echo json_encode($result);
            } 

            public function ajax_list()
            {
                $this->load->helper('url');
        
                $list = $this->sm->get_datatables();
                $data = array();
                $no = $_POST['start'];
                foreach ($list as $tour) {
                    $no++;
                    $row = array();
                    $row[] = $tour->name;
                    // $row[] = $tour->detail;
                    $row[] = $tour->type;
                    if($tour->img){
                    if($tour->type=='Carousel')
                    $row[] = '<a href="'.base_url('uploads/carousel/'.$tour->img).'" target="_blank"><img style="width:100px;height:50px;" src="'.base_url('uploads/carousel/'.$tour->img).'" class="img-responsive" /></a>';
                    else
                        $row[] = '<a href="'.base_url('uploads/panaroma/'.$tour->img).'" target="_blank"><img style="width:100px;height:50px;" src="'.base_url('uploads/panaroma/'.$tour->img).'" class="img-responsive" /></a>';
                    }else
                        $row[] = '[No photo]';
                    if($tour->embed)
                    $row[] =$tour->embed;
                    else
                    $row[] = '[No Embed VR]';
        
                    
        
                        ($tour->active==1)?$row[] ='Active':$row[] ='Disabled';
                    $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_tour('."'".$tour->site_id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                          <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_tour('."'".$tour->site_id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
        
                    $data[] = $row;
                }
        
                $output = array(
                                "draw" => $_POST['draw'],
                                "recordsTotal" => $this->sm->count_all(),
                                "recordsFiltered" => $this->sm->count_filtered(),
                                "data" => $data,
                        );
                //output to json format
                echo json_encode($output);
            }
        
            public function ajax_edit($user_id)
            {
                $data = $this->sm->get_by_user_id($user_id);
                //$data->user_role = ($data->user_role == '0000-00-00') ? '' : $data->user_role; // if 0000-00-00 set tu empty for datepicker compatibility
                echo json_encode($data);
            }
        
            public function ajax_add()
            {$type=$this->input->post('type');
                // $this->_validate(); 
                $data = array(
                        'name' => $this->input->post('name'),
                        'detail' => $this->input->post('detail'),
                        'type' => $type,
                        'embed' => $this->input->post('embed'),
                        'active' => $this->input->post('active')			);
        
                if(!empty($_FILES['fileToUpload']['name']))
                {   if($type=='Carousel'){
                    $upload = $this->carousel_do_upload();
                    $data['img'] = $upload;
                    }elseif($type=='Panaroma'){
                        $upload = $this->panaroma_do_upload();
                    $data['img'] = $upload;
                    }
                    else{
                        $data['img']='';  
                    }
                    
                    
                }
        
                $insert = $this->sm->save($data);
        
                echo json_encode(array("status" => TRUE));
            }
        
            public function ajax_update()
            {   $type=$this->input->post('type');
                $data = array(
                    'name' => $this->input->post('name'),
                    'detail' => $this->input->post('detail'),
                    'type' => $type,
                    'embed' => $this->input->post('embed'),
                    'active' => $this->input->post('active')
                    );
                if($type=='Carousel'){
                    if($this->input->post('remove_photo')) // if remove photo checked
                    {
                        if(file_exists('uploads/carousel/'.$this->input->post('remove_photo')) && $this->input->post('remove_photo'))
                            unlink('uploads/carousel/'.$this->input->post('remove_photo'));
                        $data['img'] = '';
                    }
                    if(!empty($_FILES['fileToUpload']['name']))
                    {
                    $upload = $this->carousel_do_upload();
                    $tp = $this->sm->get_by_user_id($this->input->post('site_id')); 
                    if(file_exists('uploads/carousel/'.$tp->img) && $tp->img)unlink('uploads/carousel/'.$tp->img);
                     $data['img'] = $upload;
                    }
                } 
                
                elseif($type=='Panaroma'){
                    if($this->input->post('remove_photo')) // if remove photo checked
                    {
                        if(file_exists('uploads/panaroma/'.$this->input->post('remove_photo')) && $this->input->post('remove_photo'))
                            unlink('uploads/panaroma/'.$this->input->post('remove_photo'));
                        $data['img'] = '';
                    }
                    if(!empty($_FILES['fileToUpload']['name']))
                    {
                    $upload = $this->panaroma_do_upload();
                    $tp = $this->sm->get_by_user_id($this->input->post('site_id')); 
                    if(file_exists('uploads/panaroma/'.$tp->img) && $tp->img)unlink('uploads/panaroma/'.$tp->img);
                     $data['img'] = $upload;
                    }
                }
                else{

                }
                $this->sm->update(array('site_id' => $this->input->post('site_id')), $data);
                echo json_encode(array("status" => TRUE));
            }
        
             
        
            public function ajax_delete($user_id)
            {
                //delete file
                $user = $this->sm->get_by_user_id($user_id);
                if(file_exists('uploads/tour/'.$user->img) && $user->img)
                    unlink('uploads/tour/'.$user->img);
        
                $this->sm->delete_by_user_id($user_id);
                echo json_encode(array("status" => TRUE));
            }
        
        
        
        public function usertype($value)
        {
            $this->sm->usercount($value);
            echo json_encode(array("status" => TRUE));
        }
        
        
        
            private function carousel_do_upload()
            {
                $config['upload_path']          = 'uploads/carousel/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 5000;
                $config['max_width']            = 4000;
                $config['max_height']           = 4000;
                $config['file_name']            = 'Carousel_'.round(microtime(true) * 1000);
        
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
            private function panaroma_do_upload()
            {
                $config['upload_path']          = 'uploads/panaroma/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 5000;
                $config['max_width']            = 4000;
                $config['max_height']           = 4000;
                $config['file_name']            = 'Panaroma_'.round(microtime(true) * 1000);
        
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

?>