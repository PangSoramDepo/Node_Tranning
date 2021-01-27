<?php

$p = mysqli_connect("localhost","root","","pherum_db");   
if (isset($_POST['update'])){
    
    
    
      $userid=$_GET['ID'];
    $name=$_POST['fullName'];
    $addr=$_POST['addressLine1'];
    $addrr=$_POST['addressLine2']; 
    $village=$_POST['village'];
    $state=$_POST['state'];
    $code=$_POST['code'];
    $phone=$_POST['phoneNumber'];
     $image=$_POST['img_imag'];
    
    
  
$query="update register_customer set Name ='".$name."',addr='".$addr."',addrr='".$addrr."',village='".$village."',rigions='".$state."',code='".$code."',phone='".$phone."',photo='".$image."' where Id='".$userid."'";
    
$result=mysqli_query($p,$query);
    if($result){
        
        header("location:customerlist.php");
        
        
    }
    else{
        
        
        echo ('Please Check Your Query!');
    }

}
else
{
    
    header("location:customerlist.php");
    
    
}











?>