<?php 
class Home extends CI_Model
{
  public function index()
  {
  $this->load->helper('form');
  $data['content']='login_view.php';
  $data['register']='register.php';
  $this->load->view('home_view',$data);
 }
}
?>