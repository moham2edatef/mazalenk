<?php 
class Cod extends CI_Controller
{
    public function index()

    {  
         if($this->session->userdata('u_d')==null)
         {
             redirect('home');
        }else{
    /*     $this->load->library('email');
         $this->session->set_flashdata('login_succed','sccefley'); 
         $this->email->from('mazalenk@gmail.com', 'MAZALENK');
         $this->email->to($email);
         $this->email->cc($email);
         $this->email->bcc('them@their-example.com');
        $this->email->subject('Email Test');
         $this->email->message('كود التفعيل');
         $this->email->send(); */
             
        $this->load->view('cod_r');          

    }
    
}
}

?>