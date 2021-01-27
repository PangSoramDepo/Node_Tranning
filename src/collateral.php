<?php
include_once('master1.php');


$msg="";

if (isset($_POST['upload'])){
    

$target = "ima/".basename($_FILES['file']['name']);
    
$p = mysqli_connect("localhost","root","","pherum_db");   

$image= ($_FILES['file']['name']);
$text=  ($_POST['text']);   
    
    
$sert= ("INSERT INTO images(image,text) VALUES('$image','$text')");
mysqli_query($p,$sert);
    
if (move_uploaded_file($_FILES['file']['tmp_name'] , $target)){
        
$msg= "yes" ;
        
        
 }else{
        $msg= "no";}    
}
           
?>


<!DOCTYPE html>
<html>
<head>
<style>
    .content{
        margin-top: 0px;
        margin-left: 260px;
        width:auto;
        height: 500px;
        background-color:azure;
        margin-bottom: 0px;
        margin-right: 0px;
       
        
        
    }
    
    .con{
        width:560px;
        
        height: 400px;
        background-color:aliceblue;
      overflow: scroll; 
        float: right;
         margin-top: 10px;
        
        
    }
       .t1{
        width:480px;
        height: 400px;
        
        word-wrap: break-word;  
        float: right;  
        margin-top: 10px;
    
        
    }  
    
      .t2{
        width:480px;
        height: 50px;
        background-color:brown;
        word-wrap: break-word;
         border-radius: 100px; 
        margin-top: 0px;
    
        
    }  
    .t2 h1{
        text-align: center;
        font-size: 20px;
        padding: 10px;
        color: aliceblue;
    }
    
     .tt{
        width:560px;
         margin-right: 0px;
        height: 400px;
        background-color:white;
       word-wrap: break-word;  
       float: left;
         margin-top: 10px;
         
        
    } 
    
    .tt h{
        border-radius: 100px;
        color:black;
        
       
        
    }
    
    .tt img{
        border-radius: 100px;
        float: left;
        width:250px;
        height: 250px;
        margin-bottom: 0px;
        border-radius: 50px;
        display: block;
        
    }
    form{
        float: left;
        margin-top: 10px;
    }
    .add{
        width: 100px;
        height: 100px;
        background-image:url(ima/%60pherum.png);
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center; 
        margin-top: 4px;
       
    }
    .fie{
       width: 100px;
        height: 100px;
        opacity:0;
        cursor: pointer;
        
    }
    
    
    
    
    
</style>
    
 <head>
 
    
</head>
    <html>
<body>
  
<div class = "meaning">
      
 
      

 
<form method="post" action= "collateral.php" enctype="multipart/form-data">
       
       <input type= "hidden" name = "size" value=" 10000000">
         <i class="fa fa-camera">Add Photos</i> 
        <div class ="add">
         
         <input type = "file" name = "file" class = "fie">
         </div>
        <div>
            <textarea  name = "text"   cols="40" row = "4" placeholder = "ពិពណ៏នាទ្រព្យដំកល់ "></textarea>
       </div>
         <div>
            <input name = "upload" type= "submit" value= "Save">
         </div>
    </form> 
      
      <div class = "con">
      
<?php
$p = mysqli_connect("localhost","root","","pherum_db"); 
      
$select = "select * from images";    
      
$re=  mysqli_query($p,$select);  
      
 while ($row = mysqli_fetch_array($re)) {
 echo " <div class = 'tt'>" ;
   echo "<h>" .$row['text']. "</h>";  
echo "<img src =  'ima/".$row['image']."'>";
echo " </div>  ";    
 }         
?>  
  </div>
      
    </div>
    
    
    
    </div>

<script>
 var i = 0;
 var images = [];
 var time = 3000;
    
images[0]= 'cadag.jpg';
images[1]='T8lRylVL.jpg';
images[2]='1000_.jpg';
     
function changimage(){
      document.slide.src = images[i];
      if (i<images.length - 1 ){
          i++;
          
      }else {
          i = 0;
      }
      
      setTimeout("changimage()",time);
      
  } 
    
    window.onload = changimage;
    
</script>

</body>
</html>
