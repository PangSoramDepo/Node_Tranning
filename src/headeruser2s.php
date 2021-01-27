<?php

include_once('master.php');



?>





  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <h1>បញ្ជីឈ្មោះអតិថិជនសំពៅលូន</h1>
          </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="headers.php">បញ្ចូលឈ្មោះថ្មីត្រង់នេះ</a></li>
              <li class="breadcrumb-item active">ផ្ទះ</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
   </section>

    <!-- Main content -->
<section class="content">
      <!-- Content Wrapper. Contains page content -->
    <div class="container-fluid">
           <div class="col-md-6">
             <div class="card">
                  
              <!-- /.card-body -->
          </div>
            <!-- /.card -->
      </div>
          <!-- /.col -->
       </div> 
      
        <!-- /.row -->
      <div class="row">
          <div class="col-12">
            <div class="card">
               
             <!--  <h3 class="card-title">បញ្ជីឈ្មោះអតិថិជនសេវាផ្សេង</h3>-->

            <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  <!--  <input type="text" name="table_search" class="form-control float-right" placeholder="ស្វែងរក">-->

                   <div class="input-group-append">
                     <!-- <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>-->
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
             <div class="table table-striped" style="height: 300px;">
                <table id= "table_c" class="display">
                    
                  <thead>
                    <tr>
                    <th>លេខរៀងអតិថិជន</th>
                      <th>ឈ្មោះ អតិថិជន</th>
                    <th>កន្លែងបច្ចុប្បន្ន</th>
                      <th>កន្លែងកំណើត</th>
                    <th>មេ ភូមិ</th>
                      <th>ភូមិ ឃុំ ស្រុក </th>
                     <th>លេខកូដអតិថិជន</th>
                      <th>លេខទំនាក់ទំនង</th> 
                      <th>លុប</th> 
                       
                    </tr>
                  </thead>
                  
 <?php
                    $pdo = new PDO('mysql:host=localhost;dbname=pherum_db','root');               
                       
                       
    $select =$pdo->prepare("select * from sompov_db order by Id desc");
     $select->execute();
     while($row=$select->fetch(PDO::FETCH_OBJ)){
      echo'
      
   <tr> 
   <td>'.$row->Id.'</td>
   <td>'.$row->Name.'</td>
      <td>'.$row->addr.'</td>
     <td>'.$row->addrr.'</td>  
   <td>'.$row->village.'</td>
     <td>'.$row->rigions.'</td>    
     <td>'.$row->code.'</td>
    <td>'.$row->phone.'</td> 
   <td>  <a href = "delete.php?id='.$row->Id.'" class = "btn btn-danger" role = "button"> <i class = "material icon"> Delete </i> </a> </td>
    
 </td>
 
   </tr> 
   
    '; 
     
         
     }
                      
 ?>
                    
                 </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        
        <!-- /.row -->
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
 
    
    </div>
      


  <footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 <a href="http://adminlte.io">CHHOEURN PHERUM </a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
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
      
<script>
      
      
     $(document).ready( function () {
    $('#table_c').DataTable();
} ); 
      
</script>      
    
 
    
</body>
</html>
