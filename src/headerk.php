
<?php



                
$pdo = new PDO('mysql:host=localhost;dbname=pherum_db','root');


if (isset($_POST['btnn_login'])){
    
    
    
      $id=$_POST['id'];
    $name=$_POST['fullName'];
    $addr=$_POST['addressLine1'];
    $addrr=$_POST['addressLine2']; 
    $village=$_POST['village'];
    $state=$_POST['state'];
    $code=$_POST['code'];
    $phone=$_POST['phoneNumber'];
   
   $insert=$pdo->prepare("insert into komreing_db(Id,Name,addr,addrr,village,rigions,code,phone) values(:d,:name,:add,:adde,:vil,:ri,:co,:pho)");
    
     $insert->bindparam(':d',$id);
     $insert->bindparam(':name',$name);
     $insert->bindparam(':add',$addr);
     $insert->bindparam(':adde',$addrr);
     $insert->bindparam(':vil',$village);
     $insert->bindparam(':ri',$state);
     $insert->bindparam(':co',$code);
     $insert->bindparam(':pho',$phone);
    
    if ($insert->execute()){
        
        
        
       
      echo '<script type= "text/javascript">jQuery(function validation(){
       swal({
        title: "ការបញ្ចូលបានជោគជ័យ!",
        text: "សូមអគុណដែលបានរក្សារខ្ញុំទុក!",
        icon: "success",
        button: "ត្រូវបានបញ្ជូន!",
        });});
        </script>'; 
        header("Location:headeruser2.php");
        
        
        
       
    }else{
      echo 'fiallllll';
    
    
    }   
  
}

include_once('master.php'); 



?>
<div class = "content-wrapper">
    
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>បញ្ចូលឈ្មោះអតិថិជនកំរៀង</h1>
          </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="headeruser2k.php">ពិនិត្យបញ្ជីត្រង់នេះ</a></li>
              <li class="breadcrumb-item active">ផ្ទះ</li>
            </ol>
          </div>
        </div>
            <br/>
          
            
            
            
      
                    <form role = "form" action="" method="post" class="well form-horizontal">
                      
                           <div class = "row">
                               
                            <div class="form-group col-sm-4" > 
                         
                            <label class="col-md-4 control-label"> លេខសំគាល់</label>
                          
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                   <input id="id" name="id" placeholder="" class="form-control" required="true" value="" type="text">
                                </div>
                            </div>
                          
                       <div class="form-group col-sm-4" > 
                            <label class="col-md-4 control-label"> ឈ្មោះ អតិថិជន</label>
                            
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                   <input id="fullName" name="fullName" placeholder="" class="form-control" required="true" value="" type="text"></div>
                            </div>
                        
                        
                         <div class="form-group col-sm-4" > 
                            <label class="col-md-4 control-label">កន្លែងបច្ចុប្បន្ន</label>
                           
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                   <input id="addressLine1" name="addressLine1" placeholder="" class="form-control" required="true" value="" type="text">
                                </div>
                            </div>
                         
                             
                         <div class="form-group col-sm-4" >
                            <label class="col-md-4 control-label">ប្រភេទទ្រព្យបញ្ចាំ</label>
                            
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                   <input id="addressLine2" name="addressLine2" placeholder="" class="form-control" required="true" value="" type="text">
                             </div>
                            </div>
                        
                          <div class="form-group col-sm-4" >     
                       
                            <label class="col-md-4 control-label">ថ្ងៃទីបញ្ចាំ</label>
                            
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                   <input id="city" name="village" placeholder="" class="form-control" required="true" value="" type="date"></div>
                            </div>
                         
                              
                        <div class="form-group col-sm-4" >
                            <label class="col-md-4 control-label">មេភូមិ</label>
                            
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                   <input id="state" name="state" placeholder="" class="form-control" required="true" value="" type="text">
                            </div>
                            </div>

                         <div class="form-group col-sm-4" >
                            <label class="col-md-4 control-label">ទំហំបញ្ចាំ</label>
                           
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                   <input id="postcode" name="code" placeholder="" class="form-control" required="true" value="" type="number" min = "1" max="100000" onchange="loan()">
                             </div>
                            </div>
                        
                
                         <div class="form-group col-sm-4" >
                            <label  >ទំនាក់ទំនង</label>
                           
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                   <input id="phoneNumber" name="phoneNumber" placeholder="" class="form-control" required="true" value="" type="number" >
                             </div>
                            </div>
                        
                        <div class="form-group col-sm-4" >
                            <label class="col-md-4 control-label"></label>
                            
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                   <input type="submit" name="btnn_login" class = "btn btn-success" value="ថតបញ្ចូល" ></div>
                            
                            </div>
                          
                       
                         </div>   
                          
                    
                   </form>
        </div>  
 
  
  </section>    
  
</div>      
    
<footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 <a href="http://adminlte.io">CHHOEURN PHERUM </a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">Version 2.1.2
     <!-- <b>Version</b> -->
    </div>
</footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<!-- ./wrapper -->

<!-- jQuery --> 
<script src="plugins/sweetalert/sweetalert.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


</body>
</html>
