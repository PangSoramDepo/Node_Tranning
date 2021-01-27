<?php
include_once('master1.php');







?>
<style>

    .t2{
        
        
        background-color:antiquewhite;
        margin-left: 60px;
        border-style: none;
        width: 300px;
        height: 50px;
        font-size:20px;
    }   
        
    .t3{
        background-color:antiquewhite;
        margin-left: 60px;
        border-style: none;
        width: 300px;
        height: 50px;
        font-size:20px;
        
    }    
   
    
    
    .inp{
        
        width:160px;
        
        
        
        
    }
    .print{
        margin-left: 270px;
        margin-top: 30px;
        background-color: aquamarine;
        
        
    }
    .tprint{
        margin-left:0px;
        margin-top: 20px;
        
    }
    
    
</style>




<div id= "fullmeaning">


<div class = "tprint">
           <button onclick="window.print()">បោះពុម្ភឯកសារ</button>
            <button type="button"  >អនុម័ត
                  </button> 
              <button type="button"  >ធ្វើជាក្រដាស់PDF</button>
         
          
   

 
      
                  <h4>
                     <img src="dist/img/vv.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> 
                    <i class=""></i> CHHOEURN PHERUM, Co.,ltd.
                    <small class="float-right">ថ្ងៃទី: <input type="date" class = "inp"></small>
                  </h4>
               
           
              <br>
             <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  ស្ថាប័ន
                  <br>
                    <br>
                  
                    <strong>ភិរម្យ, ឯ.ក.</strong><br>
                    បាត់ដំបង, កំរៀង<br>
                    តាក្រី, សាមសិប<br>
                    ខល: (885) 979700520<br>
                    ផ្ញើសារ: inforpherumpawnshop@gmail.com
                  
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  អតិថិជន
                    <br>
                    <br>
                  
                    <strong><input type = "text" placeholder = "ឈ្មោះអតិថិជន"></strong><br>
                    <br>
                   
                   
                    <input type = "text" placeholder = "ស្រុក">
                    <br>
                   <br>
                    <input type = "text" placeholder = "ឃុំ">
                    <br>
                    <br>
                    <input type = "text" placeholder = "ភូមិ">
                    <br>
                    <br>
                   
                    <input type = "number" placeholder="លេខទូរសព្ធ័">
                    <br>
                    <br>
                   
                   
                  
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                   វិក័យបត្រ័
                    <br>
                    <br>
                  <b><input type = "number" placeholder = "លេខវិក័យបត្រ"></b>
                    <br>
                  <br>
                  <input type = "number" placeholder = "លេខអតិថិជន">
                    <br>
                    <br>
                   <input type = "date">
                    <br>
                    <br>
                   <input type = "number" placeholder="ផ្សេងៗ">
                    <br>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
<br>
                <br>
                
              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>ថ្ងៃត្រូវបង់</th>
                        
                       
                      <th>ប្រាក់ដើម</th>
                 
                      <th>ការប្រាក់</th>
                  
                      <th>ប្រាក់រំលោះ</th>
                   
                      <th>ការបង់ប្រចាំខែសរុប</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><input type="date" class = "inp"></td>
                      <td><input type="number"  class = "inp"></td>
                      <td><input type="number" class = "inp"></td>
                      <td><input type="number" class = "inp"></td>
                      <td><input type="number" class = "inp"></td>
                    </tr>
                    <tr>
                      <td><input type="date" class = "inp"></td>
                      <td><input type="number"  class = "inp"></td>
                      <td><input type="number" class = "inp"></td>
                      <td><input type="number" class = "inp"></td>
                      <td><input type="number" class = "inp"></td>
                    </tr>
                    <tr>
                       <td><input type="date" class = "inp"></td>
                      <td><input type="number"  class = "inp"></td>
                      <td><input type="number" class = "inp"></td>
                      <td><input type="number" class = "inp"></td>
                      <td><input type="number" class = "inp"></td>
                    </tr>
                    <tr>
                       <td><input type="date" class = "inp"></td>
                      <td><input type="number"  class = "inp"></td>
                      <td><input type="number" class = "inp"></td>
                      <td><input type="number" class = "inp"></td>
                      <td><input type="number" class = "inp"></td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">លោកអ្នកអាចបង់ប្រាក់តាមមធ្យោបាយខាងក្រោម:</p>
                    <img src="dist/img/vv.png">
                  <img src="dist/img/1.png" >
                  <img src="dist/img/2.png">
                   

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                   សូមលោកអ្នកធ្វើការជ្រើសរើសកន្លែងណាមួយដែលលោកអ្នកងាយស្រួលក្នុងការបង់ប្រាក់
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">ថ្ងៃទូទាត់<input type="date" class = "inp"></p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">ចំនួនប្រាក់កម្ចី:</th>
                        <td><input type="number" class = "inp"></td>
                      </tr>
                      <tr>
                        <th>ពន្ធ (0%)</th>
                        <td><input type="number" class = "inp"></td>
                      </tr>
                      <tr>
                        <th>សេវារដ្ឋាបាល:</th>
                        <td><input type="number" class = "inp"></td>
                      </tr>
                      <tr>
                        <th>សេវាផ្សេងៗ:</th>
                        <td><input type="number" class = "inp"></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
             
            </div>
</div>
 <?php

include_once('footer.php');

?>
</body>
</html>
