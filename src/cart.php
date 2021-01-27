<!DOCTYPE html>
<html>
<head>
 <script src = "main.js"> </script>  
<script src="plugins/jqueryme/jquery-3.5.1.min.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>

<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!--sweetalert-->
<script src="plugins/sweetalert/sweetalert.js"></script>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Preahvihear&display=swap" rel="stylesheet">
<script src="plugins/chart.js/Chart.min.js"></script>
 
<!--my master-->



<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> 
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  
 <!--bootstarp-->
<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> 
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> 

<!--Date-->
<link rel = "stylesheet" href =//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css>
<link rel= "stylesheet" href = "plugins/datetimepicker-master/jquery.datetimepicker.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<link rel = "stylesheet" href = "plugins/datetimepicker-master/build/jquery.datetimepicker.min.css">
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script   src = "plugins/datetimepicker-master/jquery.js"> </script>

<script src = "plugins/datetimepicker-master/build/jquery.datetimepicker.full.js"></script>

<script   src="plugins/datetimepicker-master/jquery.datetimepicker.js"></script>

  

<!--responsive-->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" charset="utf8" src=https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js></script>

<!--khmer font-->


<!--my master-->

<link rel = "stylesheet" href=merce.css>

 
    
    
    
    
    
    
    
    
    
    
    
    
</head>
<body>

<div class = "container" >
<div class = "row">
<div class = "col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 " id = "top">
<div class = "top1">

<ul class="list-main">
    
<li><i class="fas fa-phone-volume"style="color:coral;"></i> +855 815-043-83</li>
<li><i class="fas fa-user-friends"style="color:coral;"></i> Toch Leak Bonan </li>
    
</ul>

 </div>   
    
    
</div> 
    
 <div class = "col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2" id= "top">
     
 <div class = "top1">
     <a href="index.php"><button class = "btn"><i class="fas fa-sign-in-alt" style="color:coral;"></i> Login</button></a>
       

</div>
 </div>      
    
</div>  
</div>
    
<div class = "container">
<div class = "row">
<div class = "col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 " id = "header">
<div class = "logo-header">
    <img src="ima/vv.png">
</div> 
</div>   
<div class = "col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 " id = "header">
<div class= "name-company">
    
<h5 class = "h5"> បូណានEshoping</h5>
</div>     
</div>
</div>
</div>
    
<div class = "container">
<div class = "row">
<div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id = "menu">
<div class = "menu1">
<ul class = "menu-top">
   <li> <a href = "merce.php"> <i class = "fas fa-home"style="color:white;"></i></a></li>
    <li> សំលៀកបំពាក់</li>
    <li> គ្រឿងអគ្គីសនី</li>
    <li> គ្រឿងបន្លាស់</li>
    <li> ថ្នាំកសិកម្ម</li>
    <li> សង្ហារឹម</li>
    <li> វត្ថុតុបតែង</li>
    <li> អេឡិចត្រូនិច</li>
    <li class = "mycart"><i class = "fas fa-cart-plus"style="color:white;"></i>
        <h7 class = "cart ">0
           
        </h7>
    </li>
</ul>

</div>
</div> 
</div>
</div>   
<div class = "menu2" > 
<img  src = "ima/menu.jpg">    
   
    
    

<div class = " menu-hidden">
    <ul class = "height">
    <li> <i class = "fas fa-home"style="color:white;"></i></li>
    <li> សំលៀកបំពាក់</li>
    <li> គ្រឿងអគ្គីសនី</li>
    <li> គ្រឿងបន្លាស់</li>
    <li> ថ្នាំកសិកម្ម</li>
    <li> សង្ហារឹម</li>
    <li> វត្ថុតុបតែង</li>
    <li> អេឡិចត្រូនិច</li>
  
</ul>
</div> 
  
    
</div>

<script>
$(document).ready(function(){
  $(".menu2").click(function(){
    $(".menu-hidden").slideToggle();
  });
    
   $(".next").click(function(){
       
       var current = $(".active");
       var nextimg = current.next();
       
       if (nextimg.length){
           
          current.removeClass("active");
           nextimg.addClass("active");
       }
   });
    
    $(".pre").click(function(){
       
       var current = $(".active");
       var preimg = current.prev();
       
       if (preimg.length){
           
          current.removeClass("active");
           preimg.addClass("active");
       }
   });
    
});

</script>    
 
     
<div class = "container">
    <div class = "row">
    
          <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 car"> 
              <div class = "mn">
              <input type="number" value="Please Fill Your Phone Number" name = "mm" class = "pp">
              <input type="number" value="Please Fill Your Phone Number" name = "mm" class = "pp1">
               <input type="number" value="Please Fill Your Phone Number" name = "mm" class = "pp2">   
               <input type="number" value="Please Fill Your Phone Number" name = "mm" class = "pp3">   
             </div>
              <div class = "nm">
                  <label>Phone Number</label><br>
                  <label>Address</label><br>
                  <label>Name</label><br>
                  <label>Facebook</label><br>
                  
                  
              </div>
              <div class = "mm">
              
              <input type="button" value="Submit">
              
              
              </div>
      </div>
             
    </div>
</div>


<div class = "container">
    <div class = "row">
        
     
        
      <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 cartsell"> 
    <div class = "productt">Product</div>
     <div class = "productt">Price</div>
      <div class = "productt">Quantity</div>    
       <div class = "productt">Totals</div>   
        
      </div> 
    
    </div>
</div>
   
    

     
    
    
    
    
    
    
    
    
    
<div class = "container">
    <div class = "row">
        
        
        
        
      <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 cartsell2"> 
   
        
      </div>       
    </div>
</div>


    
    
    
    
    
    
    
    
<script src="ecom.js"></script>

</body>
</html>
