<?php 
class Users extends CI_Controller
{
    public function index()
    {   
        if($this->session->userdata('u_id')==null)
        {
            redirect('home');
        }else{

        $data=$this->session->userdata('u_id');
        $data_user['users']=$this->user_model->select_user($data);
         $this->load->view('content/link');       
         $this->load->view('content/header',$data_user);
         $this->load->view('content/content');
         $this->load->view('content/footer');  
        }

   
    }
    
}
?>