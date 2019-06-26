<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Stock_db extends CI_Model {  
  
    function __construct()  
    {
        parent::__construct();
		$this->load->database();
		$this->load->library("session");
    }

    function get_all_stock()
    {
        $this->db->select('*');
		$this->db->from('stock');	 
		$query=$this->db->get();
        $q=$query->result_array();	       
		return $q;
    }
     
    function save_item()
    {
        $isbn=$this->input->post('isbn'); 
        $item_name=$this->input->post('item_name');
        $size=$this->input->post('size');
        $desc=$this->input->post('desc'); 
        $cost_price=$this->input->post('cost_price');
		$selling_price=$this->input->post('selling_price');
		$quantity=$this->input->post('quantity');
		
		 $created_by=$this->session->userdata('admin_id');
         $created_date=date('Y-m-d');		  
  
		$photo="";
		if (!empty($_FILES['avatar']['name']))
        {
			$rand_no=date("is");
			$new_name4 = $rand_no.rand(10,99).str_replace(" ","_",($_FILES["avatar"]['name']));
            $config4['upload_path'] = 'uploads/stock/';
            $config4['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc';  
			$config4['file_name'] = $new_name4;	
			$this->load->library('upload',$config4);
			$this->upload->initialize($config4);
            if($this->upload->do_upload('avatar'))
            {
				$photo="uploads/stock/".$new_name4;
			}
		}
 
		$data=array("isbn"=>$isbn,"item_name"=>$item_name,"size"=>$size,"desc"=>$desc,"avatar"=>$photo,"cost_price"=>$cost_price,"selling_price"=>$selling_price,"quantity"=>$quantity,"created_by"=>$created_by,"created_date"=>$created_date);
		$this->db->insert("stock",$data);
    }
 
    function edit_stock()
    {
        $id=$this->uri->segment(3); 
        $this->db->select('*');
        $this->db->from('stock');
        $this->db->where('id',$id);		 
		$query=$this->db->get();
        $q=$query->result_array();	       
		return $q;
    }

    function update_item()
    { 
	    $id=$this->uri->segment(3); 
	 
		$isbn=$this->input->post('isbn'); 
        $item_name=$this->input->post('item_name');
        $size=$this->input->post('size');
        $desc=$this->input->post('desc'); 
        $cost_price=$this->input->post('cost_price');
		$selling_price=$this->input->post('selling_price');
		$quantity=$this->input->post('quantity');
		
		 $created_by=$this->session->userdata('admin_id');
         $created_date=date('Y-m-d');
		
		 $created_by=$this->session->userdata('admin_id');
         $created_date=date('Y-m-d');
		 
		 
		$photo="";
		if (!empty($_FILES['avatar']['name']))
        {
			$rand_no=date("is");
			$new_name4 = $rand_no.rand(10,99).str_replace(" ","_",($_FILES["avatar"]['name']));
            $config4['upload_path'] = 'uploads/stock/';
            $config4['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc';  
			$config4['file_name'] = $new_name4;	
			$this->load->library('upload',$config4);
			$this->upload->initialize($config4);
            if($this->upload->do_upload('avatar'))
            {
				$photo="uploads/stock/".$new_name4;
            }
             
			$data=array("isbn"=>$isbn,"item_name"=>$item_name,"size"=>$size,"desc"=>$desc,"avatar"=>$photo,"cost_price"=>$cost_price,"selling_price"=>$selling_price,"quantity"=>$quantity,"created_by"=>$created_by,"created_date"=>$created_date);
        }
        else
        {
           $data=array("isbn"=>$isbn,"item_name"=>$item_name,"size"=>$size,"desc"=>$desc,"cost_price"=>$cost_price,"selling_price"=>$selling_price,"quantity"=>$quantity,"created_by"=>$created_by,"created_date"=>$created_date);
        } 
		
        $this->db->where('id',$id);
		$this->db->update("stock",$data);
    }

    function delete_stock()
	{		 	

         $id=$this->input->post('id');			
		 $this->db->where('id',$id);
		 $this->db->delete('stock');
     
    } 
	
	function view_cstock_details()
	{		 	
		$id=$this->input->post('id');	
        $this->db->select('*');
		$this->db->from('stock');	
		$this->db->where('id',$id); 
		$query=$this->db->get();
        $q=$query->result_array();	       
		return $q;      
    }
}  
?>