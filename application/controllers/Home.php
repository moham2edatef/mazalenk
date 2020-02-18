<?php 
class Home extends CI_Controller
{
 public function index()
 {

       $this->load->helper('form');
    $data['content']='login_view.php';
    $this->load->view('home_view',$data);
  

 


 }
}
?>