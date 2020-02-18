<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Lockscreen</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">


  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="<?php echo base_url() ?>assets/dist/img/user1-128x128.jpg" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->
    <?php
    if($this->session->flashdata('err')){
        echo $this->session->flashdata('err');
     
    }   if($this->session->flashdata('no')){
        echo $this->session->flashdata('no');
     
    }
    $this->load->library('session');

    $u_email=$this->session->userdata('u_email');

    echo '<p class="login-box-msg"> اذهب اكدحسابك من الايميل التالي</p>
    <a  href="'.$u_email.'" >'.$u_email.'</a>';

$data =array('class' => 'lockscreen-credentials',
            'method' => 'post');
          
            echo form_open('user/cod',$data); 
             echo '<div class="input-group">';
            $data =array(
                'class' => 'form-control ',
                'type' => 'text',
                'name' => 'cod',
                'placeholder' => 'رمز التفعيل',
            );
            echo form_input($data);
            echo '</div> <div class="input-group-btn  form-group">
            <button type="submit" class="btn pull-right"> <i class="fa fa-arrow-right text-muted"></i></button>
          </div>
            ';
            echo form_close();

?>
 </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>


<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>