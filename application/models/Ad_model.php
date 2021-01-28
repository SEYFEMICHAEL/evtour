<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ad_model extends CI_Model{
	
	var $table = 'ad';
	var $column_order = array('id','title','description',null); //set column field database for datatable orderable
	var $column_search = array('title','description'); //set column field database for datatable searchable just firstname , lastname , address are searchable
	var $order = array('id' => 'desc'); // default order 
	
public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

    public function db_Read($search)#READ
    {
        // $sql ="SELECT title FROM ad WHERE title LIKE '%".$this->db->escape_like_str($search)."%' OR descriptions LIKE '%".$this->db->escape_like_str($search)."%' LIMIT 5 "; 
        $sql ="SELECT title FROM ad WHERE title LIKE '%".$this->db->escape_like_str($search)."%' LIMIT 5 "; 
        $query = $this->db->query($sql);
        
        return $query->result();
         
    }
    public function getAD($id)#READ
    {
    $this->db->select('id,title,price,img1,descriptions');
    $this->db->from('ad');
    $this->db->where('id',$id);
    return $this->db->get()->result();     
    }  
public function db_Read_detail()#READ
 { 
     $this->db->like('type',0);
     $this->db->or_like('sponsor',1);
     $this->db->from('ad');
     return $this->db->result();
      
 } 
 public function db_get_premiumProduct(){ 
    $this->db->select('id,title,price,img1');
    $this->db->from('ad');
    $this->db->where('type',0);
    // $this->db->or_where(' ');
    $this->db->where('sponsor',1);
     
    //$count= $this->db->count_all_results();
    //$val= array('count' => $this->db->count_all_results(),'content' => $this->db->result());
    return $this->db->get()->result();

 }
 public function db_get_premiumBusiness(){ 
    $this->db->select('id,title,price,img1');
    $this->db->from('ad');
    $this->db->where('type',1);
    // $this->db->or_where(' ');
    $this->db->where('sponsor',1);
     
    //$count= $this->db->count_all_results();
    //$val= array('count' => $this->db->count_all_results(),'content' => $this->db->result());
    return $this->db->get()->result();

 }
public function db_Create($data)#CREATE
{
	 
$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	 
}



public function db_Update($data,$where)#UPDATE
{	 
$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	 
}
public function db_Delete($id)#DELETE
{
	 $this->db->where('bin_id', $id); 
 $this->db->delete($this->table);
 	 
}

 
}


?>