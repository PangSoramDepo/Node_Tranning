
<?php

include_once ('master1.php');
               
$pdo = new PDO('mysql:host=localhost;dbname=pherum_db','root');


if (isset($_POST['btnn_login'])){
    
    
    
      
    $name=$_POST['fullName'];
    $amount=$_POST['amount'];
    $interestrate=$_POST['irate']; 
    $datestart=$_POST['duration'];
    $dateend=$_POST['finish'];
    $tpay=$_POST['tpay'];
    $totalmonth=$_POST['total'];
    $totalyear=$_POST['totals'];
   
   $insert=$pdo->prepare("insert into newcustomer_db (Name,Amounts,InterestRate,Datestart,DateEnd,TypePay,TotalsMonth,TotalsYear) values(:d,:name,:add,:adde,:vil,:ri,:co,:pho)");
    
     $insert->bindparam(':d',$name);
     $insert->bindparam(':name',$amount);
     $insert->bindparam(':add',$interestrate);
     $insert->bindparam(':adde',$datestart);
     $insert->bindparam(':vil',$dateend);
     $insert->bindparam(':ri',$tpay);
     $insert->bindparam(':co',$totalmonth);
     $insert->bindparam(':pho',$totalyear);
    
    if ($insert->execute()){
      echo '<script type= "text/javascript">jQuery(function validation(){
       swal({
        title: "ការបញ្ចូលបានជោគជ័យ!",
        text: "សូមអគុណដែលបានរក្សារខ្ញុំទុក!",
        icon: "success",
        button: "ត្រូវបានបញ្ជូន!",
        });});
        </script>';  
        
        
    
         
    }else {
      echo 'fiallllll';
    
    
    }   
  
}




?>
<style>

   
</style>




<div class = "meaning">
  
         
                    <form role = "form" action="" method="post" class="well form-horizontal">
                    
                      <div class = "row"> 

                        <div class="form-group col-sm-4" >
                            <label class="col-md-8 control-label"> ឈ្មោះ អតិថិជន</label>
                            
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                   <input id="fullName" name="fullName" placeholder="" class="form-control" required="true" value="" type="text"></div>
                            
                         </div>
                         <div class="form-group col-sm-4" >
                            <label class="col-md-6 control-label">ប្រភេទការចំនាយ</label>
                           
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                   <input id="tpay" name="tpay" placeholder="" class="form-control" required="true" value="" type="text"></div>
                            </div>
                       
                         <div class="form-group col-sm-4" >
                            <label class="col-md-6 control-label">ទំហំបញ្ចាំ(XXXX)</label>
                            
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                   <input id="amount" name="amount" placeholder="" class="form-control" required="true" value="" type="number"></div>
                            </div>

                         <div class="form-group col-sm-4" >
                            <label class="col-md-4 control-label"> រយះពេលបញ្ចាំ</label>
                            
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                   <input id="time" name="fullName" placeholder="" class="form-control" required="true" value="" type="number"></div>
                            
                         </div>
                         <div class="form-group col-sm-4" >
                            <label class="col-md-6 control-label">អត្រារការប្រាក់</label>
                           
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                   <input id="irate" name="irate" placeholder="" class="form-control" required="true" value="" type="number"></div>
                            </div>
                       
                         <div class="form-group col-sm-4" >
                            <label class="col-md-8 control-label">ការប្រាក់បង់ប្រចាំខែ</label>
                            
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                   <input id="totals" name="totals" placeholder="" class="form-control" required="true" readonly  value="0.00" type="number"></div>
                            </div>
                    
                         <div class="form-group col-sm-4" >
                            <label class="col-md-4 control-label"> ថ្ងៃបញ្ចាំ</label>
                            
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                   <input id="fullName" name="duration" placeholder="" class="form-control" required="true" value="" type="date"></div>
                            
                         </div>
                         <div class="form-group col-sm-4" >
                            <label class="col-md-6 control-label">ថ្ងៃកំណត់សង</label>
                           
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                   <input id="addressLine1" name="finish" placeholder="" class="form-control" required="true" value="" type="date"></div>
                            </div>

    
                            <div class="form-group col-sm-4" >
                            <label class="col-md-8 control-label">សាច់ប្រាក់សរុបចុងកាលកំណត់</label>
                            
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                   <input id="total" name="total" placeholder="" class="form-control" required="true" readonly  value="0.00" type="number"></div>
                            </div>
    

                            <div class="form-group col-sm-4 " >
                            <label class="col-md-6 control-label"></label>
                            
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                   <input type="submit" name="btnn_login" class = "btn btn-success" value="បញ្ចូលក្នុងបញ្ចី" ></div>
                           
                         </div>  

                            


                        </div>
                       
                    
                   
                   </form>
            
</div>

  
   
    



<script>



 $("#irate" ).change(function (){
     
     
     
     
     calLoan();
     
     
  
     
 }
    
  );
    
 $("#amount" ).change(function (){
     
     
     
     
     calLoan(); 
     
     
  
     
 }
    
  );
    
 $("#time" ).change(function (){
     
  
 }
    
  );
    
   function calLoan(){
       
    if ($("#amount").val()==""){
        
        
        return false;
    }  
       
     else if ($("#time").val()==""){
        
        
        return false;
    }  
     else if ($("#irate").val()==""){
        
        
        return false;
    }     
       
     else{
         
         var amounttotal = 0;
         amounttotal=(Number($("#amount").val())*Number($("#irate").val())/100)
         $("#totals").val(amounttotal.toFixed(2));
         
         var amounttotals = 0;
         amounttotals=(Number($("#amount").val())*Number($("#irate").val())/100)*Number($("#time").val())+Number($("#amount").val())
         $("#total").val(amounttotals.toFixed(2));
         
         
         
         
     }  
       
       
       
       
   }
      
    
    

</script>




</html>


