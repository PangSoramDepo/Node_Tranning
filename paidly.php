<?php

include_once('master1.php');


?>



 <style>
  
    .up{
          
	background-color:rgba(0, 0, 0, 0.7);
	position:absolute;
	width:100%;
	height:100%;
	top:0px;
	left:0px;
	z-index:10000;
    }
    .close{
        background-image:url(ima/463-4637625_x-button-close-x-button-png-transparent-png.png);
        background-position: center;
        background-size:contain;
        background-repeat: no-repeat;
        width: 50px;
        height: 100px;
        position: absolute;
        right: 390px;
        top:300px;
        cursor: pointer;
        border-radius: 50px;
        opacity: 0.9;
        
    }
     .pherumm{
         
         width: 600px;
         height: 400px;
         margin: auto;
         background-color:aliceblue;
         margin-top: 10px;
         border-radius: 60px;
     
  
     }
     
     
     
     
    .pherumm form{
        
        margin-top: 20px;
        float: left;
     }
     .pherumm h1{
         text-align: center;
         font-size: 30px;
         padding: 20px;
     }
     .save{
         background-position: center;
        background-size:contain;
        background-repeat: no-repeat;
         
         height: 100px;
         width: 100px;
         background-image:url(ima/download.jpg);
         float: right;
         margin-left: 20px;
         border-radius: 50px;
         border-style: outset;
     }
     
     #hide{
         margin-left: 60px;
          background-position: center;
        background-size:contain;
        background-repeat: no-repeat;
        width: 50px;
        
        height: 50px;
          margin-top: 5px;
          margin-right: 0px;
        margin-bottom: 0px;
       background-image: url(ima/download.jpg);
          border-radius: 80px;
         cursor: pointer;
         
     }
     
     
     .tab3{
         
         border-style: outset;
         width: 1000px;
        
         margin-left: 80px;
         border-radius: 0px;
         background-color:azure;
     }
   
     .tab2{
         border-radius: 0px;
         
     }
     
  </style> 

  
  



   
                  
                

       <div class= "container">
                <table id= "table" class="table-responsive">
                    
                  <thead >
                    <tr >
                    <th>គណនីអតិថិជន</th>
                      <th>ឈ្មោះ អតិថិជន</th>
                    <th>ចំនួនសាច់ប្រាក់</th>
                      <th>អធិប្បាយ</th>
                    <th>ថ្ងៃទី</th>
                      <th>ប្រភេទក្រដាស់ប្រាក់</th>
                     
                      
                      <th>លុប</th> 
                       
                    </tr>
                  </thead>
                  
 <?php
                    $pdo = new PDO('mysql:host=localhost;dbname=pherum_db','root');               
                       
                       
    $select =$pdo->prepare("select * from income order by Account desc");
     $select->execute();
     while($row=$select->fetch(PDO::FETCH_OBJ)){
      echo'
      
   <tr > 
   <td>'.$row->Account.'</td>
   <td>'.$row->Customer.'</td>
      <td>'.$row->Amount.'</td>
     <td>'.$row->Date.'</td>  
   <td>'.$row->des.'</td>
     <td>'.$row->type.'</td>    
     
    
     
   <td>  <a href = "delete.php?id='.$row->Account.'" class = "btn btn-danger" role = "button"> <i class = "material icon"> Delete </i> </a> </td>
    
 </td>

 
 
 
 
   </tr> 
   
    '; 
     
         
     }
                    
                         
                      
 ?>
                    
                 </table>
        
        </div>  

    <script type="text/javascript">
    $(document).ready( function () {
    $('#table').DataTable();
} );
</script>   
           
    
    
    
    

      
  
                  

</body>

<script>

$(document).ready(function(){
    $('#hide').click(function(){
   var post = '<div class = "up"><div class = "close"></div></div>'
        var posts = '<div class = "pherumm" >'
       +'<form role = "form" action="" method="post" class="well form-horizontal">'
       +'<h1> បង្កើតវិក័យប័ត្រ</h1>'
      +' <div class = "row">'
      
      +'<div class="form-group col-sm-4" >' 
                         
                            +'<label class="col-md-12 control-label"> លេខគណនី</label>'
                          
                              +' <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>'
             +' <input id="id" name="id" placeholder="" class="form-control" required="true" value="" type="text"></div></div>'
                          
                       +'<div class="form-group col-sm-4" > '
                            +'<label class="col-md-12 control-label"> ឈ្មោះ អតិថិជន</label>'
                            
                               +'<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>'
 +'<input id="fullName" name="fullName" placeholder="" class="form-control" required="true" value="" type="text"></div></div>'
                        
                        
                         +'<div class="form-group col-sm-4" >' 
                            +'<label class="col-md-12 control-label">ចំនួនសាច់ប្រាក់</label>'
                           
                              +' <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>'
         +' <input id="addressLine1" name="addressLine1" placeholder="" class="form-control" required="true" value="" type="text"></div> </div>'
                         
                             
                         +'<div class="form-group col-sm-4" >'
                         +'<label class="col-md-12 control-label">អធិប្បាយ</label>'
                            
                              +' <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>'
      +'<input id="addressLine2" name="addressLine2" placeholder="" class="form-control" required="true" value="" type="text"> </div> </div>'
                        
                          +'<div class="form-group col-sm-4" >'     
                       
                            +'<label class="col-md-12 control-label">ថ្ងៃទីបង់ប្រាក់</label>'
                            
                              + '<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>'
                     +'<input id="city" name="village" placeholder="" class="form-control" required="true" value="" type="date"></div></div>'
                         
                              
                        +'<div class="form-group col-sm-4" >'
                           + '<label class="col-md-12 control-label">ក្រដាស់ប្រាក់</label>'
                            
                               +'<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>'
      + '<input id="state" name="state" placeholder="" class="form-control" required="true" value="" type="text"> </div> </div>'

                       
      
     +' <div class="inputp">'
     
         +'<input type="submit" name="btnn_login" class = "save" id = "man" value="រក្សារ" ></div>'
      
                        +' </div>'   
                          
                    
                  +' </form>'
    +'</div>'; 
        
        
    
    $('body').append(post);
    $('body').find('.up').append(posts);
   
    });
    $('body').on ('click','.close',function(){
        $('.up').remove();
        
    });
    
 }); 
    
  
</script>



 <?php
 


                
$pdo = new PDO('mysql:host=localhost;dbname=pherum_db','root');

if (isset($_POST['btnn_login'])){
 
      $id=$_POST['id'];
    $name=$_POST['fullName'];
    $addr=$_POST['addressLine1'];
    $addrr=$_POST['addressLine2']; 
    $village=$_POST['village'];
    $state=$_POST['state'];
    
   
   $insert=$pdo->prepare("insert into income(Account,Customer,Amount,Date,des,type)values(:d,:name,:add,:adde,:vil,:ri)");
    
     $insert->bindparam(':d',$id);
     $insert->bindparam(':name',$name);
     $insert->bindparam(':add',$addr);
     $insert->bindparam(':adde',$addrr);
     $insert->bindparam(':vil',$village);
     $insert->bindparam(':ri',$state);
    
    if ($insert->execute()){
        
        
        
       
      echo '<script type= "text/javascript">jQuery(function validation(){
       swal({
        title: "ការបញ្ចូលបានជោគជ័យ!",
        text: "សូមអគុណដែលបានរក្សារខ្ញុំទុក!",
        icon: "success",
        button: "ត្រូវបានបញ្ជូន!",
        });});
        </script>'; 
        
        
        
        
       
    }else{
      echo 'fiallllll';
    
    
    }   
  
}





?> 
    <?php

include_once('footer.php');

?>
</html>

