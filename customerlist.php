<?php

include_once('master1.php');
           
   
                    
  // បញ្ចប់ការទាញមកបង្ងាញក្នុងតារាង និងលុបខាងក្រោមគឺ កែឯកសា
                    
  ?>
<style>


</style>


  <br>
<center>
    <a href = "register.php" role="button" class="btn btn-primary" >Register Customer</a>
    
</center> 
    <br>

<div class="container">
  
  
         
 
                <table id= "table-c" class="table-responsive">
                    
                  <thead  class = "m">
                    <tr class = "m">
                    <th class = "m">លេខសំគាល់</th>
                      <th class = "m">ឈ្មោះ អតិថិជន</th>
                    <th>កន្លែងបច្ចុប្បន្ន</th>
                      <th>ប្រភេទទ្រព្យធានា</th>
                    <th>ថ្ងៃទទួលកម្ចី</th>
                      <th>មេ ភូមិ</th>
                     <th>ទំហំកម្ចី</th>
                      <th>លេខទំនាក់ទំនង</th> 
                        <th>រូបភាព</th> 
                        <th>View</th>
                      <th>Edit</th>
                      <th>Delete</th> 
                       
                    </tr>
                  </thead>
                  
 <?php
    
     $pdo = new PDO('mysql:host=localhost;dbname=pherum_db','root'); 


//ចាប់ផ្តើមការចាប់ទិន្ន័យមកបង្ហាញ
                       
                       
    $select =$pdo->prepare("select * from register_customer order by Id desc");
     $select->execute();
     while($row=$select->fetch(PDO::FETCH_OBJ)){
      echo'
      
   <tr class = "m"> 
   <td>'.$row->Id.'</td>
   <td>'.$row->Name.'</td>
      <td>'.$row->addr.'</td>
     <td>'.$row->addrr.'</td>  
   <td>'.$row->village.'</td>
     <td>'.$row->rigions.'</td>    
     <td>'.$row->code.'</td>
    <td>'.$row->phone.'</td> 
    <td><img src = "ima/'.$row->photo.'"  width ="40px" height= "40px"/></td>
    
    <td><a href = "view.php?id='.$row->Id.'" class = "btn btn-info"><i class="fas fa-eye"></i></a></td>
    
    <td><a href = "edit.php?id='.$row->Id.'" class = "btn btn-warning">edit </a></td>
    
    
    
   <td>  <a href = "delete.php?id='.$row->Id.'" class = "btn btn-danger" role = "button"> <i class="fas fa-trash-alt"></i></a> </td>
    
 </td>

 
 
 
 
   </tr> 
   
    '; 
     
         
     }
    
    
    
    ?>  
    
    
                 </table>
              </div>

          


<script type="text/javascript">
    $(document).ready( function () {
    $('#table-c').DataTable();
} );
</script>   

  

</body>
</html>
