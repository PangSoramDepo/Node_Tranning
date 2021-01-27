<?php
include_once('master1.php');

?>
<style>
    .fam{
        
        width:auto;
       
       border-bottom-color: aqua;
        
        
border-bottom-color: 


</style>

    
   
<center>
    <h1> View Detail Customer</h1>
    
</center>
    



<div class = "border border-warning fam">
       <br>
<center>
    <a href = "customerlist.php" role="button" class="btn btn-primary" >Back</a>
    
</center> 
    <br>
<div class="container">
<div class="row">

<?php
 $pdo = new PDO('mysql:host=localhost;dbname=pherum_db','root'); 
  
                     
$d = $_GET['id'];
                      
$view= $pdo->prepare("select * from register_customer where Id =$d");

 $view->execute();

while($row=$view->fetch(PDO::FETCH_OBJ)){
       
       
       

    
    echo'
 
  
   
   <div class = "col-md-6" > 
   <ul class = "list-group">
        <center> <p class = "list-group-item list-group-item-success " > <b>ទិន្នន័យលំអិតអតិថិជន</b></p>       </center> 
       <li class = "list-group-item"> <b class="btn btn-primary"> លេខសំគាល់ </b> <span class="btn btn-warning"style="color:blue;font-weight:bold;float:right">'.$row->Id.'<span></li>
       <li class = "list-group-item"> <b class="btn btn-primary"> ឈ្មោះអតិថិជន</b><span class="btn btn-warning" style="color:blue;font-weight:bold;float:right">'.$row->Name.'<span></li>
       <li class = "list-group-item"> <b class="btn btn-primary">កន្លែងស្នាក់នៅ</b><span class="btn btn-warning" style="color:blue;font-weight:bold;float:right">'.$row->addr.'<span></li>
       <li class = "list-group-item"> <b class="btn btn-primary" > ទ្រព្យធានា</b><span class="btn btn-warning" class="btn btn-warning" style="color:blue;font-weight:bold;float:right">'.$row->addrr.'<span></li>
       <li class = "list-group-item"> <b class="btn btn-primary" > ថ្ងៃកម្ចី</b><span class="btn btn-warning" style="color:blue;font-weight:bold;float:right">'.$row->village.'<span></li>
       <li class = "list-group-item"> <b class="btn btn-primary" > មេភូមិ</b><span class="btn btn-warning" style="color:blue;font-weight:bold;float:right">'.$row->rigions.'<span></li>
       <li class = "list-group-item"> <b class="btn btn-primary"> ទំហំកម្ចី </b><span class="btn btn-warning" style="color:blue;font-weight:bold;float:right">'.$row->code.'<span></li>
       <li class = "list-group-item"> <b class="btn btn-primary"> ទំនាក់ទំនង</b><span class="btn btn-warning" style="color:blue;font-weight:bold;float:right">'.$row->phone.'<span></li>
     
       
       
   </ul>

   
   </div>
   

<div class = "col-md-6" > 
   <ul class = "list-group">
       
      <center ><p class = "list-group-item list-group-item-success" > <b>រូបភាព</b>  </p>          </center> 
       
       <br>
       
       <center> <img src = "ima/'.$row->photo.'" class = "img-fluid class" alt="Responsive image"/></center>
       
   </ul>
</div>
       
    
       
    ';  
    
    
}
   
?>
    
    
    
    
    </div>
</div>











