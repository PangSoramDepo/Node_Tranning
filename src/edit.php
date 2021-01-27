<?php
include_once('master1.php');

$p = mysqli_connect("localhost","root","","pherum_db");   

$d = $_GET['id'];
$query = "select * from register_customer where Id ='".$d."'";
$result=mysqli_query($p,$query);

while($row = mysqli_fetch_assoc($result)){
    
    
    
      $userid=$row['Id'];
    $name=$row['Name'];
    $addr=$row['addr'];
    $addrr=$row['addrr']; 
    $village=$row['village'];
    $state=$row['rigions'];
    $code=$row['code'];
    $phone=$row['phone'];
    $image=$row['photo'];
    
    
    
    
}


?>
<style>
    .bord{
        height: 400px;
        width: 50px;
        background-color:darkgray;
        margin-left:0px;
        border-radius: 80px;
        float: left;
        margin-right: 0px;
        margin-top: 25px;
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
        margin-left: 0px;
        margin-right: 0px;
    }

    .pherum{
        border-radius: 20px;
        width: 1030px;
        height: 260px;
        float:left;
        margin-left: 10px;
        margin-top: 40px;
        padding-top: 3px;
        background-color:darkgray;
        text-align: center;
    
        
    }
     .inputp{
         background-position: center;
        background-size:contain;
        background-repeat: no-repeat;
        width: 50px;
         margin-left: 160px;
         
        height: 50px;
          margin-top: 25px;
         background-image: url(ima/download.jpg);
          border-radius: 80px;
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
    
    .w{
        
margin-top: 10px;
        margin-left: 300px;
        
    }.w form{
       
         width:400px;
        height:550px;
        background-color:blueviolet;
        padding:20px;
    }
    .n{
        background-color: brown;
        float: left;
        width: 100px;
        
        
    }
    .wh{
        
        float: left;
        
        
    }
    
    
    .meaning{
        
        float: right;
        margin-right: 200px;
        
    }

</style>

<div class = "meaning">
  

    <div class = "bord">
  
            <input type="submit" name="btnn" class = "btnh " value="" >
                          
            <input type="submit" name="btnn" class = "bth " value="" >
   <a href="customerlist.php"></a>
              
</div >  
  <div class = "w">


      <form role = "form" action="update.php?ID=<?php echo  $userid ?>" method="post" class="well form-horizontal">
      
   
      
    <div class = "wh">
                         
                       
            <div class="form-group col-sm-4" >               
              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>               
           <input id="id" name="id" value=" <?php echo $userid ?>" type="text">
                </div>    
          </div>             
                    
                           
            <div class="form-group col-sm-4" >                 
            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>                    
<input id="fullName" name="fullName" value="<?php echo $name ?>" type="text">
                </div>
                </div>                
                        
                     
                           
               <div class="form-group col-sm-4" >             
                             
        <input id="addressLine1" name="addressLine1"  value="<?php echo $addr ?>" type="text">
                         
                </div>                
                      
                        
                            
                <div class="form-group col-sm-4" >               
     <input id="addressLine2" name="addressLine2"  value="<?php echo $addrr ?>" type="text"> 
                   </div>        
                         
                       
                          
                      <div class="form-group col-sm-4" >       
                            
                    <input id="city" name="village" value="<?php echo $village ?>"type="date">
                    </div> 
                              
                     
                         
                     <div class="form-group col-sm-4" >        
                           
     <input id="state" name="state"  value="<?php echo $state ?>"type="text"> 
                          </div>
                       
              <div class="form-group col-sm-4" >              
                           
   
 <input id="postcode" name="code" value="<?php echo $code ?>" > 
                         </div>                  
                
                     
       <div class="form-group col-sm-4" > 
                             
         <input id="phoneNumber" name="phoneNumber" value="<?php echo $phone ?>" >
                  </div>
      
          </div>
          
          
             
     <div class="form-group col-sm-4" >         
                              
<input  type="text" class="fileInput" name="img_imag" value="<?php echo $image ?>"> 
          </div>
          
          <div class="form-group col-sm-4" >         
                              
<input  type="file" class="fileInput" name="img_imag" value=""> 
          </div>
          
    
          
            
          
          
    
        <input type="submit" name="update" class = "n" id = "man" value="Update" >
      
                     
             
                    
     </form>

</div>     
    </div>

