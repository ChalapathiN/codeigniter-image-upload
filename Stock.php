<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller 
{	
	public function __construct()
        {
            parent::__construct();
			$this->load->model('back_end/Stock_db','stock');
        }
		
        public function index()
        {
            if($this->session->userdata('admin_login'))
            {
                $data['active_menu']="Stock";
				$data['stock']=$this->stock->get_all_stock();
                $this->load->view('admin/back_end/stock/index',$data);
            }
            else
            {
                redirect('home/index');
            }
        }

        public function new_stock()
        {
            if($this->session->userdata('admin_login'))
            {
                $data['active_menu']="Stock"; 
                $this->load->view('admin/back_end/stock/new_stock',$data);
            }
            else
            {
                redirect('home/index');
            }
        }

		
	
        public function save_item()
        {
            if($this->session->userdata('admin_login'))
            { 
                $this->stock->save_item();
                redirect('stock/'); 
               
            }
            else
            {
                redirect('home/index');
            }
        }
	
	    function edit_stock()
		{

			 if($this->session->userdata('admin_login'))
			{ 
				$data['active_menu']="Stock"; 
				$data['stock']=$this->stock->edit_stock(); 
				$this->load->view('admin/back_end/stock/edit_stock',$data);
			}
			else
			{
				redirect('home/index');
			} 
		}
     

    function update_item()
    {
        if($this->session->userdata('admin_login'))
        { 
            $this->stock->update_item();
            redirect('stock');  
        }
        else
        {
            redirect('home/index');
        }
    }

    function delete_stock()
    {
        $this->stock->delete_stock();
    }
	
	
  function view_cstock_details()
    {
       
		if($this->session->userdata('admin_login'))
		{			
			 $data=$this->stock->view_cstock_details();
		  
		    
			$i=1;   
                                     
			foreach($data as $row)
			 {    
			 
				if($row['avatar'] !="")
				{
					$avatar=base_url().$row['avatar'];
				}
				else
				{
					$avatar=base_url()."uploads/stock/no-photo.png";
				}
				 
				 echo '
					 <div class="modal-header bg-primary">
						 <h6 class="modal-title">Item Details</h6>                     
						 <button type="button" class="close" data-dismiss="modal">&times;</button>
					 </div>
					 <div class="modal-body">
						 
						 <div class="row">
							 <div class="col-md-4 col-sm-4">							 
								 <p><b>Name :</b> <span>'.$row['isbn'].'</span></p>
								 <p><b>Email :</b> <span>'.$row['item_name'].'</span></p>		
								 <p><b>Phone :</b> <span>'.$row['size'].'</span></p>    
								  <p><b>Address :</b> <span>'.$row['desc'].'</span></p>    	
								
							 </div>    
							<div class="col-md-4 col-sm-4">	
								<p><b>City :</b> <span>'.$row['cost_price'].'</span></p>									 
								<p><b>State :</b> <span>'.$row['selling_price'].'</span></p>									 
								 <p><b>Zip :</b> <span>'.$row['quantity'].'</span></p> 							
							  </div> 
							  
							 <div class="col-md-4 col-sm-4">	
									<img src="'.$avatar.'" width="50%" height="100%" style="object-fit: contain;" />
							
							 </div>							 				
						 </div>
						 <hr/>
						  
					 <div class="modal-footer">
						 <button type="button" class="btn bg-primary" data-dismiss="modal">Close</button>
					 </div>';
				
				 $i++;
			 }  
		}
		else
		{
			redirect('home/index');
		}
    }


	function logout()
	{
		$this->session->unset_userdata('admin_login');
		redirect('home/index');
	}
}
