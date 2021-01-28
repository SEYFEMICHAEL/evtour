<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model{
	
    // var $table = 'ad';
    var $table = 'tour';
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
        $sql ="SELECT name FROM tour WHERE name LIKE '%".$this->db->escape_like_str($search)."%' LIMIT 5 "; 
        $query = $this->db->query($sql);
        
        return $query->result();
         
    }
public function db_Read_detail($search,$page_first_result,$results_per_page)#READ
 {
     $sql ="SELECT name,detail,state,type,img FROM tour WHERE title LIKE '%".$this->db->escape_like_str($search)."%' OR descriptions LIKE '%".$this->db->escape_like_str($search)."%' LIMIT ".$page_first_result.",".$results_per_page; 
    //  $sql ="SELECT title,descriptions,state FROM ad WHERE title LIKE '%".$this->db->escape_like_str($search)."%' LIMIT 5 "; 
     $query = $this->db->query($sql);
     
     return $query->result();
      
 }
 public function db_get_detail_count($search){
    // $sql ="SELECT title,descriptions,state FROM ad WHERE title LIKE '%".$this->db->escape_like_str($search)."%' OR descriptions LIKE '%".$this->db->escape_like_str($search)."%' LIMIT 5 "; 
    //$this->db->select('title','descriptions');
    $this->db->like('name',$search);
    $this->db->or_like('detail',$search);
    $this->db->from('tour');
    //$this->db->limit(10);

    return $this->db->count_all_results();

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

 
}


?>