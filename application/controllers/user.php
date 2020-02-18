<?php 
class User extends CI_Controller
{
    public function login()
    {  $this->load->library('session');
        $this->load->helper('cookie');
        $this->form_validation->set_rules('name','الاسم','trim|required');//|min_length[2]max_length[10]
        $this->form_validation->set_rules('pass','كلمة السر','trim|required');
/* $name =$this->input->post('name');
    $cookie_login = array(
            'name'   => 'login_users',
            'value'  => $name,
            'expire' => '1000',
            'secure' => TRUE
    );
    $this->input->set_cookie($cookie_login);
 */

      if($this->form_validation->run()==FALSE){
         $data = array(
        'errors' => validation_errors());
        $this->session->set_flashdata($data);
       redirect('home');  
 }
 else {   

$name =$this->input->post('name');
    $pass =$this->input->post('pass');
    $user_id= $this->user_model->user_login($name,$pass);
   if($user_id){
        $data =array(
            'u_id' =>$user_id
        );
            $this->session->set_userdata($data);
              redirect('users'); 
             }else{     
/*          $this->form_validation->set_rules('pass','كلمة السر','trim|required|matches[neme]');
        $data = array(
                'errors2' => validation_errors());
                $this->session->set_flashdata($data); */
               redirect('home');
    }}}
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function logout()
    {
         $this->session->all_userdata();
        $this->session->sess_destroy('u_id');
        redirect('home');
    }     
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function register()
    {     $this->load->library('session');
        $this->load->library('form_validation');
         
        $this->form_validation->set_rules('u_id_un','رقم القيد الحامعي','trim|required|exact_length[7]|is_unique[users.u_id_un]');//|
        $this->form_validation->set_rules('username','اسم المستخدم ','trim|required|is_unique[users.u_username]');
        $this->form_validation->set_rules('email',' الايميل ','trim|required|is_unique[users.u_email]'); 
        $this->form_validation->set_rules('phon',' التلفون ','trim|greater_than_equal_to[9]') ;
        $this->form_validation->set_rules('pass_uin',' كلمة السر الكلية  ','trim|required');
        $this->form_validation->set_rules('pass',' كلمة السر ','trim|required');
        $this->form_validation->set_rules('c_pass','  تأكيدكلمة السر  ','trim|required|matches[pass]');
        $this->form_validation->set_rules('spas',' مكان الاقامة ','trim|required');
        $this->form_validation->set_rules('gender','الجنس','trim|required');
        $this->form_validation->set_rules('day','يوم الميلاد','trim|required');
        $this->form_validation->set_rules('year',' سنة الميلاد','trim|required');
        $this->form_validation->set_rules('month',' شهر الميلاد','trim|required');
        $u_id_un =$this->input->post('u_id_un');
        $username =$this->input->post('username');
        $email =$this->input->post('email');
         $phon =$this->input->post('phon');
         $pass_uin =$this->input->post('pass_uin');
         $pass =$this->input->post('pass');
         $c_pass =$this->input->post('c_pass');
         $spas =$this->input->post('spas');
         $gender =$this->input->post('gender');
         $year =$this->input->post('year');
         $month =$this->input->post('month');
         $day =$this->input->post('day');
      if($this->form_validation->run()==FALSE){
           $error = array(
     'error' => validation_errors(),  
    'u_id_un' => $u_id_un,
    'username' =>$username ,
    'email' =>$email ,
    'phon' =>$phon ,
    'pass_uin' =>$pass_uin ,
    'pass' =>$pass ,
    'c_pass' =>$c_pass ,
    'spas' =>$spas ,
    'gender' =>$gender ,
    'year' =>$year ,
    'month' =>$month ,
     'day' =>$day ,
            );
        $this->session->set_flashdata($error);
            redirect('home');
                }
     
    else {
          $k_id= $this->user_model->register_user($u_id_un,$username,$email,$phon,$pass_uin,$pass,$spas,$gender,$year,$month,$day);
      if($k_id != null ){
           $data =array(
               'u_d' =>$u_id_un,
               'u_email' =>$email,
               'k_id' =>$k_id,
               'logged' =>true);
               $this->session->set_userdata($data);
               redirect('cod');

       }
   }
    
    
    }

    public function cod()
    { 
         $this->load->library('session');

         $u_email=$this->session->userdata('u_email');
         $this->form_validation->set_rules('cod','رقم التفعيل خطاء','trim|required');
       if($this->form_validation->run()==FALSE){
         $data = array(
        'err' => validation_errors());
        $this->session->set_flashdata($data);
       redirect('cod');  
 }
 else {
    $cod =$this->input->post('cod');
    $user_id = $this->user_model->user_cod($cod,$u_email);
   if($user_id >0){
       
        $data =array(
            'u_id' =>$user_id
        );
        $profile = $this->user_model->select_user($user_id);
        
       $username=$profile->u_username;
       $phon=$profile->u_phon;

        $path= "assets/file/".$u_email."/img/";
        $path1= "assets/file/".$u_email."/cv/";
        $path2= "assets/file/".$u_email."/profile/";
        $cv= "assets/file/".$u_email."/cv/cv.php";
        mkdir($path, 0, true);
        mkdir($path1, 0, true);
        mkdir($path2, 0, true);
        file_put_contents($cv," <?php
         cv$user_id = array(
            'id' => '$user_id',
            'email' => '$u_email',
    );
    ?>");
        
            $this->session->set_userdata($data);
            redirect('users'); 
             }
    else{
     $this->session->set_flashdata('no','no sccefley');
     redirect('cod');
    }
}}

}
?>