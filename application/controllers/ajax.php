<?php 
class Ajax extends CI_Controller
{
     public function login()
     {  
              
          $this->load->view('pages/login');   
 
     }
     public function register()
     {  
              
          $this->load->view('pages/register');   
 
     }
     public function create_cv()
     {  
              
         
          $this->load->view('pages/create_cv');   
 
     }
    public function create_progact()
    {  
             
         $this->load->view('pages/create_progact');   

    }
    public function create_group()
    {  
             
         $this->load->view('pages/create_group');   

    }
    
}

?>