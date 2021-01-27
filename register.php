<?php
 
include_once('admin.php');

                
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
    $image=$_POST['img_imag'];
   
   $insert=$pdo->prepare("insert into register_customer(Id,Name,addr,addrr,village,rigions,code,phone,photo) values(:d,:name,:add,:adde,:vil,:ri,:co,:pho,:phot)");
    
     $insert->bindparam(':d',$id);
     $insert->bindparam(':name',$name);
     $insert->bindparam(':add',$addr);
     $insert->bindparam(':adde',$addrr);
     $insert->bindparam(':vil',$village);
     $insert->bindparam(':ri',$state);
     $insert->bindparam(':co',$code);
     $insert->bindparam(':pho',$phone);
     $insert->bindparam(':phot',$image);
    
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
<style>
    .bord{
        height: 350px;
        width: 50px;
        background-color:darkgray;
        margin-left: 10px;
        border-radius: 80px;
        float: left;
        margin-top: 20px;
         margin-bottom: 0px;
        
        
    }
    .bord a{
        background-position: center;
        background-size:contain;
        background-repeat: no-repeat;
        width: 50px;
        height: 50px;
        float:left;
        margin-top: 45px;
        background-image:url(ima/6787.jpg);
        border-radius: 80px;
        background-color: white;
       
    }

   
    
    
     .inputp{
        border-radius: 80px;
        float:right; 
        margin:auto;
        margin-top: 34px;
        background-color:brown;
        
    }
      
     
      .btnh{
          
       background-position: center;
        background-size:contain;
        background-repeat: no-repeat;
        width: 50px;
          float: left;
          margin-left: 0px;
        height: 50px;
          margin-top: 45px;
          margin-right: 0px;
        margin-bottom: 0px;
       background-image: url(ima/download.jpg);
          border-radius: 80px;
        
    }
       .bth{
        background-image: url(ima/unnamed.png);
       float:left; 
        background-position: center;
        background-size:contain;
        background-repeat: no-repeat;
        width: 50px;
        height: 50px; 
           margin-bottom: 0px;
           border-radius: 80px;
           margin-left: 0px;
           margin-top: 45px;
           margin-left: 0px;
    }
    
    
      
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
        width: 20px;
        height: 20px;
        position: absolute;
       
        cursor: pointer;
        border-radius: 50px;
        opacity: 0.9;
         transform: translate(-50%,-50%);
    }
     .pherum{
         
         overflow: hidden;
         height: auto;
         margin: auto;
         background-color:aliceblue;
         margin-top: 100px;
         border-radius: 0px;
         padding:40px;
         border-radius: 5px;
  
     }
     
     
     
     
  
     .pherumm h1{
         text-align: center;
         font-size: 30px;
         padding: 20px;
     }
  
     
    .ff{
        
        
        
    }
    .ff input{
         word-break: break-all;
        
        
    }
     
    #image{
       
       opacity: 2;
        width: 92px;
        cursor: pointer;
        height: 80
    }
   .id{
       margin: 0px;
        padding: 0px;
   
    }

    
    
.fa{
      float: right;
      color:blue;
        
        
    }
    
    .text-uppercase{
        
    }
    .in{
       width: 350px; 
        
        
    }
</style>


    
                                

   
              




<script>


  


$(document).ready(function(){
    $('.register').click(function(){
   var post = '<div class = "up"><div class = "close"></div></div>'
        var posts = '<div class = "container pherum" >'
        +'<div class = "row">'
        
       +'<form role = "form" action="register.php" method="post" class="well form-horizontal">'
      +'<div class = "row">'
    
                         +'<div class="col-sm-4" >'
                            +'<label class="col-md-10 control-label"> លេខសំគាល់</label>'
                          
             +' <input id="id" name="id" placeholder="" class="form-control" required="true" value="" type="text"></div>'
                          
                     +'<div class="col-sm-4" >'
                            +'<label class="col-md-10 control-label"> ឈ្មោះ អតិថិជន</label>'
                            
                            
 +'<input id="fullName" name="fullName" placeholder="" class="form-control" required="true" value="" type="text"></div>'
                        
                        
                    
      +'<div class="form-group col-sm-4" >'
                            +'<label class="col-md-10 control-label">កន្លែងបច្ចុប្បន្ន</label>'
                           
                              
         +' <input id="addressLine1" name="addressLine1" placeholder="" class="form-control" required="true" value="" type="text"></div>'
                         
                             
                     
      +'<div class="form-group col-sm-4" >'
                         +'<label class="col-md-10 control-label">ប្រភេទទ្រព្យបញ្ចាំ</label>'
                            
                            
      +'<input id="addressLine2" name="addressLine2" placeholder="" class="form-control" required="true" value="" type="text"></div> '
                        
                         +'<div class="form-group col-sm-4" >'
                       
                            +'<label class="col-md-10 control-label">ថ្ងៃទីបញ្ចាំ</label>'
                            
                            
                     +'<input id="city" name="village" placeholder="" class="form-control" required="true" value="" type="date"></div>'
                         
                              
                       +'<div class="form-group col-sm-4" >'
                           + '<label class="col-md-10 control-label">មេភូមិ</label>'
                            
                              
      + '<input id="state" name="state" placeholder="" class="form-control" required="true" value="" type="text"></div> '

                      +'<div class="form-group col-sm-4" >'
                            +'<label class="col-md-10 control-label">ទំហំបញ្ចាំ</label>'
                           
   
 +'<input id="postcode" name="code" placeholder="" class="form-control" required="true" value="" type="number"  onchange="loan()"></div>'
                        
                
                      +'<div class="form-group col-sm-4" >'
                           + '<label class="col-md-10 control-label" >ទំនាក់ទំនង</label>'
                           
                              
         +' <input id="phoneNumber" name="phoneNumber" placeholder="" class="form-control" required="true" value="" type="number" > </div>'
      
     
                      +'<div class="form-group col-sm-4" >'
                              
         +' <input  name="img_imag" placeholder="file"  value="" type="file" > </div>'
    
   
                                  
      
                      
                          +'</div>'
        
        +'<div class="form-group col-sm-4 id" >'
         +'<input type="submit" name="btnn_login" class="btn btn-primary"value="រក្សារទុក" >'
        
        +'</div>'
                    
                  +' </form>'
        
        
        +'</div>'
        
    +'</div>'; 
        
    
    $('body').append(post);
    $('body').find('.up').append(posts);
   
    });
    $('body').on ('click','.close',function(){
        $('.up').remove();
        
    });
    
 }); 
    
  
</script>
      
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        


</div>
</body>