

<body class=" sidebar-collapse ">
<div class="wrapper">
<nav class="main-header navbar navbar-expand border-bottom navbar-dark bg-info"
style="">
    <!-- Left navbar links -->
   


 
  

    <!-- Right navbar links -->
    <ul class=" nav navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
     
      <!-- Notifications Dropdown Menu -->
      <li class="dropdown user user-menu">
        <a href="#register" data-toggle="tab">
        <span class="fa fa-user-plus" id="app">{{message }} </span> </a></li>   
          <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true"  href="<?php echo base_url() ?>assets/#"></a>
      </li>
          <li class="dropdown user user-menu">
        <a href="#login"  data-toggle="tab">
        <span class="fa fa-user"> تسجيل دخول </span>
        </a> </li>  
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true"  href="<?php echo base_url() ?>assets/#"></a>
      </li>
    </ul>
  </nav>

  <div class="content-wrapper" style=" overflow-x:hidden;height:100%;" >
  <div class="tab-content">
   <div class="tab-pane   <?php  if($this->session->flashdata('error')) echo 'active show'; ?> " id="register">   
  <?php  
         $this->load->view('register'); ?>
  </div> 
    <div class=" tab-pane  <?php  if($this->session->flashdata('errors')!=null) echo 'active show'; ?> " id="login">   
  <?php  $this->load->view('login_view'); ?>

</div> </div>
  
  </div>
  
<script src="<?php echo base_url() ?>assets/vue/vue.js"></script>
<script src="<?php echo base_url() ?>assets/vue/docsearch.js"></script>
<script src="<?php echo base_url() ?>assets/vue/common.js"></script>
<script src="<?php echo base_url() ?>assets/vue/analytics.js"></script>
<script src="<?php echo base_url() ?>assets/vue/72160148.js"></script>
<script src="<?php echo base_url() ?>assets/vue/smooth-scroll.js"></script>        
<script src="<?php echo base_url() ?>assets/vue/css.js"></script>
<div class="wrapper">
<script> 
let app =new Vue({
  el :'#app',
  data(){
    return {
      message: 'انشاء حساب'
    }
  }
})
 </script> 
    




 