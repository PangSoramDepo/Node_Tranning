
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
    
<script src="plugins/sweetalert/sweetalert.js"></script>
   
    
    
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>



<?php



$pdo = new PDO('mysql:host=localhost;dbname=pherum_db','root');


//session_start();
//if($_SESSION["useremail"]==""){
 //   header('location:ll2.php');
//}

                       
 error_reporting(0) ;
                      
$d = $_GET['id'];
                      
$delete= $pdo->prepare("delete from register_customer where Id ='$d'");
                      
if($delete->execute()){
    
   header('refresh:1,customerlist.php'); 
    
   echo '<script type= "text/javascript">jQuery(function validation(){
     swal({
       title: "ទិន្នន័យត្រូវបានលុបរួចរាល់!",
        text: "ជួបគ្នាពេលក្រោយ!",
        icon: "success",
        button: "លុបរួច!",
       });});
       </script>'; 
    
    
 
    
 
}else{
    echo'fial';
}

?>


