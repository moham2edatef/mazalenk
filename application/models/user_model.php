<?php 
class User_model extends CI_Model
{
    public function user_login($name,$pass)
    {
     
   //$where = "u_username='$name' OR u_email='$name'";
  //$this->db->where($where);
   $this->db->where('u_username', $name);
 //$this->db->where( array('u_username' => $name ));
      $query = $this->db->get('users');
      $id_user =$query->row('u_id');
      $k_id =$query->row('k_id'); 
      $password1 =$query->row('u_pass');
      $passwords=sha1(sha1($pass.$k_id)); 
      if($query->num_rows() ==1){
      if($password1 == $passwords ){
           return $id_user;
           }
     }else{
      return false;
          }}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function select_user($id){
      $this->db->where( array('u_id' => $id));
      $query = $this->db->get('users');
      return $query->result();
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // public function check($id) {
    //  $this->db->where( array('u_id' => $id ));
    //  $query = $this->db->get('user');
    //  $id_user =$query->row('u_id');
    //  if($query->num_rows() >=1)
    //   return true;
    // else
    // return false;
    // }
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function register_user($u_id_un,$username,$email,$phon,$pass_uin,$pass,$spas,$gender,$year,$month,$day) {   
      $k_id=rand();
      $u_date=date('Y-m-d');
     $password=sha1(sha1($pass.$k_id)); 
      $data = array(
        'u_id_un' => $u_id_un,
        'u_username' => $username,
        'u_email' => $email,
        'u_phon' => $phon,
        'u_pass_uin' => $pass_uin,
        'u_pass' => $password,
        'u_spas' => $spas,
        'u_gender' => $gender,
        'u_date_now' => $u_date,
        'k_id' => $k_id,
        'u_year' => $year,
        'u_month' => $month,
        'u_day' => $day,
        'u_activty' => false );
$this->db->insert('users', $data);
return $k_id; }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function user_cod($cod,$u_email)
{
 $this->db->where('u_email', $u_email);
 $query = $this->db->get('users');
 $k_id =$query->row('k_id');
 $u_id =$query->row('u_id');
          if($cod == $k_id ){
$data = array(
  'u_activty' => 1
);
$this->db->update('users', $data, array('u_email' => $u_email));
                                     return $u_id;
                                      }else{
                                         return 0;
                                           }}}
?>