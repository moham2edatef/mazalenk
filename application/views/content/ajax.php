<script language = "javascript" type = "text/javascript">
         
            //Browser Support Code
            function pages(pages){
               var ajaxRequest; 
               var url ="<?php echo base_url() ?>";
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                  
                     var ajaxDisplay = document.getElementById("pages");
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                       // setTimeout(function(){ // استدعاء ألدالة مجددًا بعد ثانية من الإنتهاء لِتكرار طلب الajax
                       //  messa(m_id);
                        // },5000);
                  }
               }  
               ajaxRequest.open("GET",url+'/ajax/'+pages, true);
               ajaxRequest.send(); 
            }
      </script>
      

      

      

           <script>
$(document).ready(function() {

  $("#refresh1").click(function() {
     $("#messag_up").load("message.php");
    return false;
    });
});
function refresh() {
$("#refresh1").click();  
}
setInterval(refresh,4000);
</script>         

<script language = "javascript" type = "text/javascript">
         <!--
            //Browser Support Code
            function cont(m_id){
               var ajaxRequest;  // The variable that makes Ajax possible!
               try {
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        alert("Your browser broke!");
                        return false;
                     } } }
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                       var ajaxDisplay = document.getElementById("contet_message");
                       ajaxDisplay.innerHTML= ajaxRequest.responseText; 
                    // setTimeout(function(){ // استدعاء ألدالة مجددًا بعد ثانية من الإنتهاء لِتكرار طلب الajax
                       //  messa(m_id);
                        // },5000);
                         }}
                  ajaxRequest.open("GET","cont.php?id="+m_id ,true); 
               ajaxRequest.send(null);
            }
      </script>

<script>
$(document).ready(function() {

  $("#refresh3").click(function() {
     $("#contet_message").load("cont.php");
    return false;
    });
});
function refresh() {
$("#refresh3").click();  
}
setInterval(refresh,5000);
</script>         

      

        
