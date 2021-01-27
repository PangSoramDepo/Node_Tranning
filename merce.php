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

<div class = "container-fluid" >
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
    
<div class = "container-fluid">
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
    
<div class = "container-fluid">
<div class = "row">
<div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id = "menu">
<div class = "menu1">
    
    
<ul class = "menu-top">
    <li> <a href = "merce.php"> <i class = "fas fa-home"style="color:white;"></i></a></li>
    <li class = "mycart"> សំលៀកបំពាក់</li>
    <div id = "bb">1</div>
    
    <div id = "bb2">2</div>
    <li class = "mycart2">  គ្រឿងបន្លាស់</li>
    <div id = "bb3">3</div>
    <li class = "mycart3">  ថ្នាំកសិកម្ម</li>
    <div id = "bb4">4</div>
    <li class = "mycart4">  សង្ហារឹម</li>
    <div id = "bb5">5</div>
    <li class = "mycart5">  វត្ថុតុបតែង</li>
    <div id = "bb6">6</div>
    <li class = "mycart6">  អេឡិចត្រូនិច</li>
    <div id = "bb7">7</div>
   
</ul>

</div>
</div> 
</div>
</div>  
    
 
  <script>
 $(document).ready(function(){
     
    $('.mycart').hover(function(){
       var x = $(this);
 
       x.parents('.menu1').find('#bb').slideToggle();
       
    
   
   });
     
     
    $('.mycart1').hover(function(){
       var x = $(this);
 
       x.parents('.menu1').find('#bb1').slideToggle();
       

     
     });
     $('.mycart2').hover(function(){
       var x = $(this);
 
       x.parents('.menu1').find('#bb2').slideToggle();
       

     
     });
     
     $('.mycart3').hover(function(){
       var x = $(this);
 
       x.parents('.menu1').find('#bb3').slideToggle();
       

     
     });
     
   $('.mycart4').hover(function(){
       var x = $(this);
 
       x.parents('.menu1').find('#bb4').slideToggle();
       

     
     });
     
     $('.mycart5').hover(function(){
       var x = $(this);
 
       x.parents('.menu1').find('#bb5').slideToggle();
       

     
     });
     
     $('.mycart6').hover(function(){
       var x = $(this);
 
       x.parents('.menu1').find('#bb6').slideToggle();
       

     
     });
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
 });
    
</script>    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
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
    
    
    
    
    
 
<div class = "container-fluid">
        
    <div class = "row">
    <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 massa">
        
    <div class = "massa1">   
    <a href = "#"><img src ="ima/facebook-messenger-2-569346.webp"><p class = "cont">សូមចុចសាកសួរជាសារ</p> </a> 
    </div>
        
     

       
   <div class = "massa2"> 
     
     
    <a href="tel:069609008"><img src ="ima/ios-7-icons-updated-phone-green-and-white-call-icon-png-clipart (2).jpg">  </a>  
    </div>
        <p class = "contact">សូមខលសម្រាប់ការទិញ</p>
        
        </div>   
        
        
        
        
    </div>
    </div>   

   
   
    
    
    
    
    
    
    
    
    
    

<div class = "container">
<div class = "row">
<div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id = "top-serch">
    
     
        <div class = "product">
             <h6 class="btnn"><i class="fas fa-search"></i></h6>
            
								<form class = "oooo">
									<input name="search" class = "s" placeholder="ស្វែងរកផលិតផល....." type="search">
                                    <button>ស្វែងរក</button>
								</form>
            
           
            
            </div>
							
   
    
</div>
</div>
</div>
<script>
 $(document).ready(function(){
     
    $('.btnn').click(function(){
       var x = $(this);
 
       x.parent('.product').find('.oooo').slideToggle();
       
    
   
   });
   
     
     
     
 });
    
</script>  
    
    
 
<div class = "container">
<div class = "row">
<div class = "col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 top-slide">
    
    
  <div class = "top-slide1">
 
    <div class = "show">
     
    <img src="ima/slippers.jpg"  class = "active"> 
    <img src="ima/71.jpg">
    <img src="ima/beautiful-woman-with-healthy-body-white-background_1150-8490.jpg"> 
    <img src ="ima/81.jpg">
      <img src ="ima/82.jpg">   
    </div>
    <div class = "buy-top">
      <h5 class = "by">ចុចទិញ</h5>
    </div>
        <div class = "show1">
       

        <h1 class = " pre" ><i class="fas fa-chevron-left"></i> </h1> 
      
       <h1 class= "next"><i class="fas fa-chevron-right"></i> </h1> 
        </div>
          
     
    </div>  
</div>    

<div class = "col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 top-slide ">
<div class = "top-slide1">
    
    <div class = "part-slide21">
       <img src="ima/heel.jpg">
         <div class = "buy-top1">
      <h5 class = "by">ចុចទិញ</h5>
    </div>
    </div>
   
   
            
    <div class = "part-slide22">
        
       <img src="ima/73.jpg">
         <div class = "buy-top1">
      <h5 class = "by">ចុចទិញ</h5>
    </div>
        
    </div>

</div>
</div>   
</div>
</div>  
  
   
    
    
     
<div class = "container">
<div class = "row">
<div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 highly">
    
 <div class = " highly1">
  <img src ="ima/pf-e4c5d14e--womanshoes-2.webp"> 
    
</div>   
    
 
    
    
    
    
    
</div>    
    
 <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 highly">
<div class = " highly1">
  <img src ="ima/pf-cbf5427f--Clothes-1.webp"> 
    
</div>   
       
    
    
    
    
    
</div>     
    
    
</div>   
    
</div>   
    
    
 <div class = "container">
<div class = "row">
<div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 start-top2">

<h6 class = "text"> ផលិតផលលក់ដាច់ប្រចាំសប្តាហ៍</h6>   
    
</div> 

</div>
</div>  
    
    

    
<div class = "container">
<div class = "row ">

    
<div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 start-top21">
  
<div class = "item">
    
   
<div class = "view">

<div class = "close">
    
    </div>
     <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 c2">
        
        
         <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  c">
             <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg">
                 <div class = "magg1-a">
                     <br>
                 <h2>Shift Dress<span style="float:right;"><i class="fa fa-check-circle"></i> in stock</span></h2>
                     
                <div class = "star">
                  <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                    <i class="yellow fa fa-star"></i> 
                    <i class="yellow fa fa-star"></i> 
                    <br>
                    <h3>$29.00</h3>
                    
                    <p>Description Product.</p>
                    
                </div>
          
                 </div>
             
             
             
             </div>
         <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg1">
             
             
<div class = "top-slide1">
 
    <div class = "show">
     
    <img src="ima/pexels-photo-2092474.jpeg"  class = "active1"> 
    <img src="ima/83.jpg">
    <img src="ima/beautiful-woman-with-healthy-body-white-background_1150-8490.jpg">    
    </div>
    
        <div class = "show1">
       

        <h1 class = " pre1" ><i class="fas fa-chevron-left"></i> </h1> 
      
       <h1 class= "next1"><i class="fas fa-chevron-right"></i> </h1> 
        </div>
          
     
    </div>
             
             </div>
         
         </div>
         
         
    </div>
    
    

   
</div> 
    
   
    
    
    <div class = "img-box">
        <img src ="ima/360x.jpg">
    </div>
    <p class = "title">Product Title</p>
    <p class = "price">10,00</p>
   
      <a class= "add-cart"><h5>ចុចទិញ</h5></a>
  
    
   

<div class = "share-box">
         <ul>
             <li> <i class = "fab fa-facebook"></i></li>
                 
              <li id = "hide"> <i class = "fas fa-eye"></i></li>   
                 
             
             
        </ul>
</div>
</div>
</div>
    
 
<div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 start-top21">

 <div class = "item">
     
   
     
     
     
     
        
<div class = "view">

<div class = "close">
    
    </div>
     <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 c2">
        
        
         <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  c">
             <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg">
                 <div class = "magg1-a">
                     <br>
                 <h2>Shift Dress<span style="float:right;"><i class="fa fa-check-circle"></i> in stock</span></h2>
                     
                <div class = "star">
                  <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                    <i class="yellow fa fa-star"></i> 
                    <i class="yellow fa fa-star"></i> 
                    <br>
                    <h3>$29.00</h3>
                    
                    <p>Description Product.</p>
                    
                </div>
               
                 </div>
             
             
             
             </div>
         <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg1">
               <div class = "top-slide1">
 
    <div class = "show">
     
    <img src="ima/pexels-photo-2092474.jpeg"  class = "active1"> 
    <img src="ima/71.jpg">
    <img src="ima/beautiful-woman-with-healthy-body-white-background_1150-8490.jpg">    
    </div>
    
        <div class = "show1">
       

        <h1 class = " pre1" ><i class="fas fa-chevron-left"></i> </h1> 
      
       <h1 class= "next1"><i class="fas fa-chevron-right"></i> </h1> 
        </div>
          
     
    </div>
             
             </div>
         
         </div>
         
         
    </div>
    
    

   
</div> 
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     

    <div class = "img-box">
       <img src ="ima/product-284-image_93b466ba-930b-45f5-aed3-84147db90144_360x.jpg">
    </div>
     <p class = "title">Product Title</p> 
     <p class = "price">US$ 10,00</p>
        <a class= "add-cart"><h5>ចុចទិញ</h5></a>
     
      <div class = "share-box">
         <ul>
             <li> <i class = "fab fa-facebook"></i></li>
                 
              <li id = "hide"> <i class = "fas fa-eye"></i></li>   
             
             
             
        </ul>
         
         
     </div>
</div>   
</div>
    
          
 <div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 start-top21">
    
    
    
    <div class = "item">
        
       
        
                     
<div class = "view">

<div class = "close">
    
    </div>
     <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 c2">
        
        
         <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  c">
             <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg">
                 <div class = "magg1-a">
                     <br>
                 <h2>Shift Dress<span style="float:right;"><i class="fa fa-check-circle"></i> in stock</span></h2>
                     
                <div class = "star">
                  <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                    <i class="yellow fa fa-star"></i> 
                    <i class="yellow fa fa-star"></i> 
                    <br>
                    <h3>$29.00</h3>
                    
                    <p>Description Product.</p>
                    
                </div>
              
                 </div>
             
             
             
             </div>
         <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg1">
        <div class = "top-slide1">
 
    <div class = "show">
     
    <img src="ima/pexels-photo-2092474.jpeg"  class = "active1"> 
    <img src="ima/71.jpg">
    <img src="ima/beautiful-woman-with-healthy-body-white-background_1150-8490.jpg">    
    </div>
    
        <div class = "show1">
       

        <h1 class = " pre1" ><i class="fas fa-chevron-left"></i> </h1> 
      
       <h1 class= "next1"><i class="fas fa-chevron-right"></i> </h1> 
        </div>
          
     
    </div>
             
             </div>
         
         </div>
         
         
    </div>
    
    

   
</div> 
     
     
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
     <div class = "img-box">
<img src ="ima/product-698-image_c2a6067b-fcae-4a12-9aa2-2e2a51a8b94d_360x.jpg">
    </div>
      <p class = "title">Product Title</p>
     <p class = "price">US$ 10,00</p>
        <a class= "add-cart"><h5>ចុចទិញ</h5></a>
      <div class = "share-box">
         <ul>
             <li> <i class = "fab fa-facebook"></i></li>
                 
              <li id = "hide"> <i class = "fas fa-eye"></i></li>  
             
        </ul>
         
         
    
</div>   
</div>
 
    
</div>


    
     
<div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 start-top21">

 <div class = "item">
     
     
        
     
     
     
     
     
             
<div class = "view">

<div class = "close">
    
    </div>
     <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 c2">
        
        
         <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  c">
             <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg">
                 <div class = "magg1-a">
                     <br>
                 <h2>Shift Dress<span style="float:right;"><i class="fa fa-check-circle"></i> in stock</span></h2>
                     
                <div class = "star">
                  <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                    <i class="yellow fa fa-star"></i> 
                    <i class="yellow fa fa-star"></i> 
                    <br>
                    <h3>$29.00</h3>
                    
                    <p>Description Product.</p>
                    
                </div>
                
                 </div>
             
             
             
             </div>
         <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg1">
  <div class = "top-slide1">
 
    <div class = "show">
     
    <img src="ima/pexels-photo-2092474.jpeg"  class = "active1"> 
    <img src="ima/71.jpg">
    <img src="ima/beautiful-woman-with-healthy-body-white-background_1150-8490.jpg">    
    </div>
    
        <div class = "show1">
       

        <h1 class = " pre1" ><i class="fas fa-chevron-left"></i> </h1> 
      
       <h1 class= "next1"><i class="fas fa-chevron-right"></i> </h1> 
        </div>
          
     
    </div>
             
             </div>
         
         </div>
         
         
    </div>
    
    

   
</div> 
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     <div class = "img-box">
        <img src ="ima/product-608-image_f1111616-4663-41d1-956d-1ba4a0927006_360x.jpg">
    </div>
      <p class = "title">Product Title</p>
     <p class = "price">US$ 10,00</p>
       <a class= "add-cart"><h5>ចុចទិញ</h5></a>
      <div class = "share-box">
         <ul>
             <li> <i class = "fab fa-facebook"></i></li>
                 
              <li id = "hide"> <i class = "fas fa-eye"></i></li>   
            
             
             
        </ul>
         
         
     </div>
</div>  

</div>   
</div> 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class = "row ">

    
<div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 start-top21">
  
<div class = "item">
    
   
<div class = "view">

<div class = "close">
    
    </div>
     <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 c2">
        
        
         <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  c">
             <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg">
                 <div class = "magg1-a">
                     <br>
                 <h2>Shift Dress<span style="float:right;"><i class="fa fa-check-circle"></i> in stock</span></h2>
                     
                <div class = "star">
                  <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                    <i class="yellow fa fa-star"></i> 
                    <i class="yellow fa fa-star"></i> 
                    <br>
                    <h3>$29.00</h3>
                    
                    <p>Description Product.</p>
                    
                </div>
                
                 </div>
             
             
             
             </div>
         <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg1">
<div class = "top-slide1">
 
    <div class = "show">
     
    <img src="ima/pexels-photo-2092474.jpeg"  class = "active1"> 
    <img src="ima/71.jpg">
    <img src="ima/beautiful-woman-with-healthy-body-white-background_1150-8490.jpg">    
    </div>
    
        <div class = "show1">
       

        <h1 class = " pre1" ><i class="fas fa-chevron-left"></i> </h1> 
      
       <h1 class= "next1"><i class="fas fa-chevron-right"></i> </h1> 
        </div>
          
     
    </div>
             
             </div>
         
         </div>
         
         
    </div>
    
    

   
</div> 
    
   
    
    
    <div class = "img-box">
        <img src ="ima/product-736-image_5c21bb1a-e5a7-4b8a-bb0b-85c4010393d0_360x.webp">
    </div>
    <p class = "title">Product Title</p>
    <p class = "price">10,00</p>
   
      <a class= "add-cart"><h5>ចុចទិញ</h5></a>
  
    
   

<div class = "share-box">
         <ul>
             <li> <i class = "fab fa-facebook"></i></li>
                 
              <li id = "hide"> <i class = "fas fa-eye"></i></li>   
                 
             
             
        </ul>
</div>
</div>
</div>
    
 
<div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 start-top21">

 <div class = "item">
     
   
     
     
     
     
        
<div class = "view">

<div class = "close">
    
    </div>
     <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 c2">
        
        
         <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  c">
             <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg">
                 <div class = "magg1-a">
                     <br>
                 <h2>Shift Dress<span style="float:right;"><i class="fa fa-check-circle"></i> in stock</span></h2>
                     
                <div class = "star">
                  <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                    <i class="yellow fa fa-star"></i> 
                    <i class="yellow fa fa-star"></i> 
                    <br>
                    <h3>$29.00</h3>
                    
                    <p>Description Product.</p>
                    
                </div>
               
                 </div>
             
             
             
             </div>
         <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg1">
   <div class = "top-slide1">
 
    <div class = "show">
     
    <img src="ima/pexels-photo-2092474.jpeg"  class = "active1"> 
    <img src="ima/71.jpg">
    <img src="ima/beautiful-woman-with-healthy-body-white-background_1150-8490.jpg">    
    </div>
    
        <div class = "show1">
       

        <h1 class = " pre1" ><i class="fas fa-chevron-left"></i> </h1> 
      
       <h1 class= "next1"><i class="fas fa-chevron-right"></i> </h1> 
        </div>
          
     
    </div>
             
             </div>
         
         </div>
         
         
    </div>
    
    

   
</div> 
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     

    <div class = "img-box">
       <img src ="ima/product-336-image_b54e4773-dc98-4ad8-9a45-c6fd9b8c77de_360x.jpg">
    </div>
     <p class = "title">Product Title</p> 
     <p class = "price">US$ 10,00</p>
        <a class= "add-cart"><h5>ចុចទិញ</h5></a>
     
      <div class = "share-box">
         <ul>
             <li> <i class = "fab fa-facebook"></i></li>
                 
              <li id = "hide"> <i class = "fas fa-eye"></i></li>   
             
             
             
        </ul>
         
         
     </div>
</div>   
</div>
    
          
 <div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 start-top21">
    
    
    
    <div class = "item">
        
       
        
        
                     
<div class = "view">

<div class = "close">
    
    </div>
     <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 c2">
        
        
         <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  c">
             <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg">
                 <div class = "magg1-a">
                     <br>
                 <h2>Shift Dress<span style="float:right;"><i class="fa fa-check-circle"></i> in stock</span></h2>
                     
                <div class = "star">
                  <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                    <i class="yellow fa fa-star"></i> 
                    <i class="yellow fa fa-star"></i> 
                    <br>
                    <h3>$29.00</h3>
                    
                    <p>Description Product.</p>
                    
                </div>
                
                 </div>
             
             
             
             </div>
         <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg1">
<div class = "top-slide1">
 
    <div class = "show">
     
    <img src="ima/pexels-photo-2092474.jpeg"  class = "active1"> 
    <img src="ima/71.jpg">
    <img src="ima/beautiful-woman-with-healthy-body-white-background_1150-8490.jpg">    
    </div>
    
        <div class = "show1">
       

        <h1 class = " pre1" ><i class="fas fa-chevron-left"></i> </h1> 
      
       <h1 class= "next1"><i class="fas fa-chevron-right"></i> </h1> 
        </div>
          
     
    </div>
             
             </div>
         
         </div>
         
         
    </div>
    
    

   
</div> 
     
     
       
        
        
        
        
        
        
        
        
        
        
        
        
     <div class = "img-box">
        <img src ="ima/product-254-image_1af6f408-00b0-4457-9ac0-16a00cf202d4_360x.webp">
    </div>
      <p class = "title">Product Title</p>
     <p class = "price">US$ 10,00</p>
        <a class= "add-cart"><h5>ចុចទិញ</h5></a>
      <div class = "share-box">
         <ul>
             <li> <i class = "fab fa-facebook"></i></li>
                 
              <li id = "hide"> <i class = "fas fa-eye"></i></li>  
             
        </ul>
         
         
    
</div>   
</div>
 
    
</div>


    
     
<div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 start-top21">

 <div class = "item">
     
     
        
     
     
     
     
     
             
<div class = "view">

<div class = "close">
    
    </div>
     <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 c2">
        
        
         <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  c">
             <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg">
                 <div class = "magg1-a">
                     <br>
                 <h2>Shift Dress<span style="float:right;"><i class="fa fa-check-circle"></i> in stock</span></h2>
                     
                <div class = "star">
                  <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                    <i class="yellow fa fa-star"></i> 
                    <i class="yellow fa fa-star"></i> 
                    <br>
                    <h3>$29.00</h3>
                    <p>Description Product.</p>
                    
                </div>
               			      
                        
                     
                  
                 </div>
             
             
             
             </div>
         <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg1">
 <div class = "top-slide1">
 
    <div class = "show">
     
    <img src="ima/pexels-photo-2092474.jpeg"  class = "active1"> 
    <img src="ima/71.jpg">
    <img src="ima/beautiful-woman-with-healthy-body-white-background_1150-8490.jpg">    
    </div>
    
        <div class = "show1">
       

        <h1 class = " pre1" ><i class="fas fa-chevron-left"></i> </h1> 
      
       <h1 class= "next1"><i class="fas fa-chevron-right"></i> </h1> 
        </div>
          
     
    </div>
             
             </div>
         
         </div>
         
         
    </div>
    
    

   
</div> 
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     <div class = "img-box">
        <img src ="ima/product-103-image_7d4eece0-db7f-4e42-a93b-909603ff63bf_360x.jpg">
    </div>
      <p class = "title">Product Title</p>
     <p class = "price">US$ 10,00</p>
       <a class= "add-cart"><h5>ចុចទិញ</h5></a>
      <div class = "share-box">
         <ul>
             <li> <i class = "fab fa-facebook"></i></li>
                 
              <li id = "hide"> <i class = "fas fa-eye"></i></li>   
            
             
             
        </ul>
         
         
     </div>
</div>  

</div>   
</div>  
    


</div>
    
 
    
     
<div class = "container">
<div class = "row">
<div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 highly">
    
 <div class = " highly1">
  <img src ="ima/201.webp"> 
    
</div>   
    
 
    
    
    
    
    
</div>    
    
 <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 highly">
<div class = " highly1">
  <img src ="ima/bestselling.webp"> 
    
</div>   
       
    
    
    
    
    
</div>     
    
    
</div>   
    
</div>   
    
    
    
    
    
    
<div class = "container">
<div class = "row">
<div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 start-top2">

<h6 class = "text"> ផលិតផលលក់ដាច់ប្រចាំសប្តាហ៍</h6>   
    
</div> 

</div>
</div>    
    
<div class = "container">
<div class = "row ">

    
<div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 start-top21">
  
<div class = "item">
    
   
<div class = "view">

<div class = "close">
    
    </div>
     <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 c2">
        
        
         <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  c">
             <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg">
                 <div class = "magg1-a">
                     <br>
                 <h2>Flared Shift Dress<span style="float:right;"><i class="fa fa-check-circle"></i> in stock</span></h2>
                     
                <div class = "star">
                  <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                    <i class="yellow fa fa-star"></i> 
                    <i class="yellow fa fa-star"></i> 
                    <br>
                    <h3>$29.00</h3>
                    
                    <p>Product.</p>
                    
                </div>
                
                 </div>
             
             
             
             </div>
         <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg1">
             
             
<div class = "top-slide1">
 
    <div class = "show">
     
    <img src="ima/pexels-photo-2092474.jpeg"  class = "active1"> 
    <img src="ima/83.jpg">
    <img src="ima/beautiful-woman-with-healthy-body-white-background_1150-8490.jpg">    
    </div>
    
        <div class = "show1">
       

        <h1 class = " pre1" ><i class="fas fa-chevron-left"></i> </h1> 
      
       <h1 class= "next1"><i class="fas fa-chevron-right"></i> </h1> 
        </div>
          
     
    </div>
             
             </div>
         
         </div>
         
         
    </div>
    
    

   
</div> 
    
   
    
    
    <div class = "img-box">
        <img src ="ima/product-112-image_2969eddb-7dac-428e-bd04-71926ceece99_275x.webp">
    </div>
    <p class = "title">Product Title</p>
    <p class = "price">10,00</p>
   
      <a class= "add-cart"><h5>ចុចទិញ</h5></a>
  
    
   

<div class = "share-box">
         <ul>
             <li> <i class = "fab fa-facebook"></i></li>
                 
              <li id = "hide"> <i class = "fas fa-eye"></i></li>   
                 
             
             
        </ul>
</div>
</div>
</div>
    
 
<div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 start-top21">

 <div class = "item">
     
   
     
     
     
     
        
<div class = "view">

<div class = "close">
    
    </div>
     <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 c2">
        
        
         <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  c">
             <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg">
                 <div class = "magg1-a">
                     <br>
                 <h2>Flared Shift Dress<span style="float:right;"><i class="fa fa-check-circle"></i> in stock</span></h2>
                     
                <div class = "star">
                  <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                    <i class="yellow fa fa-star"></i> 
                    <i class="yellow fa fa-star"></i> 
                    <br>
                    <h3>$29.00</h3>
                    
                    <p>Product.</p>
                    
                </div>
                
             
                 </div>
             
             </div>
         <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg1">
               <div class = "top-slide1">
 
    <div class = "show">
     
    <img src="ima/pexels-photo-2092474.jpeg"  class = "active1"> 
    <img src="ima/71.jpg">
    <img src="ima/beautiful-woman-with-healthy-body-white-background_1150-8490.jpg">    
    </div>
    
        <div class = "show1">
       

        <h1 class = " pre1" ><i class="fas fa-chevron-left"></i> </h1> 
      
       <h1 class= "next1"><i class="fas fa-chevron-right"></i> </h1> 
        </div>
          
     
    </div>
             
             </div>
         
         </div>
         
         
    </div>
    
    

   
</div> 
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     

    <div class = "img-box">
       <img src ="ima/product-251-image_9a902cf1-918e-4a47-90c3-8774b839cee6_275x.webp">
    </div>
     <p class = "title">Product Title</p> 
     <p class = "price">US$ 10,00</p>
        <a class= "add-cart"><h5>ចុចទិញ</h5></a>
     
      <div class = "share-box">
         <ul>
             <li> <i class = "fab fa-facebook"></i></li>
                 
              <li id = "hide"> <i class = "fas fa-eye"></i></li>   
             
             
             
        </ul>
         
         
     </div>
</div>   
</div>
    
          
 <div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 start-top21">
    
    
    
    <div class = "item">
        
       
        
                     
<div class = "view">

<div class = "close">
    
    </div>
     <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 c2">
        
        
         <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  c">
             <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg">
                 <div class = "magg1-a">
                     <br>
                 <h2>Flared Shift Dress<span style="float:right;"><i class="fa fa-check-circle"></i> in stock</span></h2>
                     
                <div class = "star">
                  <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                    <i class="yellow fa fa-star"></i> 
                    <i class="yellow fa fa-star"></i> 
                    <br>
                    <h3>$29.00</h3>
                    
                    <p>Product.</p>
                    
                </div>
               
                 </div>
             
             
             
             </div>
         <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg1">
        <div class = "top-slide1">
 
    <div class = "show">
     
    <img src="ima/pexels-photo-2092474.jpeg"  class = "active1"> 
    <img src="ima/71.jpg">
    <img src="ima/beautiful-woman-with-healthy-body-white-background_1150-8490.jpg">    
    </div>
    
        <div class = "show1">
       

        <h1 class = " pre1" ><i class="fas fa-chevron-left"></i> </h1> 
      
       <h1 class= "next1"><i class="fas fa-chevron-right"></i> </h1> 
        </div>
          
     
    </div>
             
             </div>
         
         </div>
         
         
    </div>
    
    

   
</div> 
     
     
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
     <div class = "img-box">
        <img src ="ima/product-329-image_b5a1fd66-82eb-44f2-985f-2759539344f6_275x.webp">
    </div>
      <p class = "title">Product Title</p>
     <p class = "price">US$ 10,00</p>
        <a class= "add-cart"><h5>ចុចទិញ</h5></a>
      <div class = "share-box">
         <ul>
             <li> <i class = "fab fa-facebook"></i></li>
                 
              <li id = "hide"> <i class = "fas fa-eye"></i></li>  
             
        </ul>
         
         
    
</div>   
</div>
 
    
</div>


    
     
<div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 start-top21">

 <div class = "item">
     
     
        
     
     
     
     
     
             
<div class = "view">

<div class = "close">
    
    </div>
     <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 c2">
        
        
         <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  c">
             <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg">
                 <div class = "magg1-a">
                     <br>
                 <h2>Flared Shift Dress<span style="float:right;"><i class="fa fa-check-circle"></i> in stock</span></h2>
                     
                <div class = "star">
                  <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                    <i class="yellow fa fa-star"></i> 
                    <i class="yellow fa fa-star"></i> 
                    <br>
                    <h3>$29.00</h3>
                    
                    <p>Product.</p>
                    
                </div>
               
                 </div>
             
             
             
             </div>
         <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg1">
  <div class = "top-slide1">
 
    <div class = "show">
     
    <img src="ima/pexels-photo-2092474.jpeg"  class = "active1"> 
    <img src="ima/71.jpg">
    <img src="ima/beautiful-woman-with-healthy-body-white-background_1150-8490.jpg">    
    </div>
    
        <div class = "show1">
       

        <h1 class = " pre1" ><i class="fas fa-chevron-left"></i> </h1> 
      
       <h1 class= "next1"><i class="fas fa-chevron-right"></i> </h1> 
        </div>
          
     
    </div>
             
             </div>
         
         </div>
         
         
    </div>
    
    

   
</div> 
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     <div class = "img-box">
        <img src ="ima/product-152-image_29e989ae-3ce3-41e7-923a-2a8354fb941a_275x.webp">
    </div>
      <p class = "title">Product Title</p>
     <p class = "price">US$ 10,00</p>
       <a class= "add-cart"><h5>ចុចទិញ</h5></a>
      <div class = "share-box">
         <ul>
             <li> <i class = "fab fa-facebook"></i></li>
                 
              <li id = "hide"> <i class = "fas fa-eye"></i></li>   
            
             
             
        </ul>
         
         
     </div>
</div>  

</div>   
</div> 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class = "row ">

    
<div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 start-top21">
  
<div class = "item">
    
   
<div class = "view">

<div class = "close">
    
    </div>
     <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 c2">
        
        
         <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  c">
             <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg">
                 <div class = "magg1-a">
                     <br>
                 <h2>Flared Shift Dress<span style="float:right;"><i class="fa fa-check-circle"></i> in stock</span></h2>
                     
                <div class = "star">
                  <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                    <i class="yellow fa fa-star"></i> 
                    <i class="yellow fa fa-star"></i> 
                    <br>
                    <h3>$29.00</h3>
                    
                    <p>Product</p>
                    
                </div>
                
                 </div>
             
             
             
             </div>
         <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg1">
<div class = "top-slide1">
 
    <div class = "show">
     
    <img src="ima/pexels-photo-2092474.jpeg"  class = "active1"> 
    <img src="ima/71.jpg">
    <img src="ima/beautiful-woman-with-healthy-body-white-background_1150-8490.jpg">    
    </div>
    
        <div class = "show1">
       

        <h1 class = " pre1" ><i class="fas fa-chevron-left"></i> </h1> 
      
       <h1 class= "next1"><i class="fas fa-chevron-right"></i> </h1> 
        </div>
          
     
    </div>
             
             </div>
         
         </div>
         
         
    </div>
    
    

   
</div> 
    
   
    
    
    <div class = "img-box">
        <img src ="ima/product-166-image_0fcac2cc-c409-4c22-82e5-2b471c9ed796_275x.webp">
    </div>
    <p class = "title">Product Title</p>
    <p class = "price">10,00</p>
   
      <a class= "add-cart"><h5>ចុចទិញ</h5></a>
  
    
   

<div class = "share-box">
         <ul>
             <li> <i class = "fab fa-facebook"></i></li>
                 
              <li id = "hide"> <i class = "fas fa-eye"></i></li>   
                 
             
             
        </ul>
</div>
</div>
</div>
    
 
<div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 start-top21">

 <div class = "item">
     
   
     
     
     
     
        
<div class = "view">

<div class = "close">
    
    </div>
     <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 c2">
        
        
         <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  c">
             <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg">
                 <div class = "magg1-a">
                     <br>
                 <h2>Flared Shift Dress<span style="float:right;"><i class="fa fa-check-circle"></i> in stock</span></h2>
                     
                <div class = "star">
                  <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                    <i class="yellow fa fa-star"></i> 
                    <i class="yellow fa fa-star"></i> 
                    <br>
                    <h3>$29.00</h3>
                    
                    <p>Product.</p>
                    
                </div>
                
                 </div>
             
             
             
             </div>
         <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg1">
   <div class = "top-slide1">
 
    <div class = "show">
     
    <img src="ima/pexels-photo-2092474.jpeg"  class = "active1"> 
    <img src="ima/71.jpg">
    <img src="ima/beautiful-woman-with-healthy-body-white-background_1150-8490.jpg">    
    </div>
    
        <div class = "show1">
       

        <h1 class = " pre1" ><i class="fas fa-chevron-left"></i> </h1> 
      
       <h1 class= "next1"><i class="fas fa-chevron-right"></i> </h1> 
        </div>
          
     
    </div>
             
             </div>
         
         </div>
         
         
    </div>
    
    

   
</div> 
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     

    <div class = "img-box">
       <img src ="ima/product-127-image_df0ed508-8037-45c5-9355-e079350eeb99_275x.webp">
    </div>
     <p class = "title">Product Title</p> 
     <p class = "price">US$ 10,00</p>
        <a class= "add-cart"><h5>ចុចទិញ</h5></a>
     
      <div class = "share-box">
         <ul>
             <li> <i class = "fab fa-facebook"></i></li>
                 
              <li id = "hide"> <i class = "fas fa-eye"></i></li>   
             
             
             
        </ul>
         
         
     </div>
</div>   
</div>
    
          
 <div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 start-top21">
    
    
    
    <div class = "item">
        
       
        
        
                     
<div class = "view">

<div class = "close">
    
    </div>
     <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 c2">
        
        
         <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  c">
             <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg">
                 <div class = "magg1-a">
                     <br>
                 <h2>Flared Shift Dress<span style="float:right;"><i class="fa fa-check-circle"></i> in stock</span></h2>
                     
                <div class = "star">
                  <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                    <i class="yellow fa fa-star"></i> 
                    <i class="yellow fa fa-star"></i> 
                    <br>
                    <h3>$29.00</h3>
                    
                    <p>Product.</p>
                    
                </div>
                
                 </div>
             
             
             
             </div>
         <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg1">
<div class = "top-slide1">
 
    <div class = "show">
     
    <img src="ima/pexels-photo-2092474.jpeg"  class = "active1"> 
    <img src="ima/71.jpg">
    <img src="ima/beautiful-woman-with-healthy-body-white-background_1150-8490.jpg">    
    </div>
    
        <div class = "show1">
       

        <h1 class = " pre1" ><i class="fas fa-chevron-left"></i> </h1> 
      
       <h1 class= "next1"><i class="fas fa-chevron-right"></i> </h1> 
        </div>
          
     
    </div>
             
             </div>
         
         </div>
         
         
    </div>
    
    

   
</div> 
     
     
       
        
        
        
        
        
        
        
        
        
        
        
        
     <div class = "img-box">
        <img src ="ima/product-232-image_e76e0b30-6e99-4644-bece-e322db3f2049_275x.jpg">
    </div>
      <p class = "title">Product Title</p>
     <p class = "price">US$ 10,00</p>
        <a class= "add-cart"><h5>ចុចទិញ</h5></a>
      <div class = "share-box">
         <ul>
             <li> <i class = "fab fa-facebook"></i></li>
                 
              <li id = "hide"> <i class = "fas fa-eye"></i></li>  
             
        </ul>
         
         
    
</div>   
</div>
 
    
</div>


    
     
<div class = "col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 start-top21">

 <div class = "item">
     
     
        
     
     
     
     
     
             
<div class = "view">

<div class = "close">
    
    </div>
     <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 c2">
        
        
         <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  c">
             <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg">
                 <div class = "magg1-a">
                     <br>
                 <h2>Flared Shift Dress<span style="float:right;"><i class="fa fa-check-circle"></i> in stock</span></h2>
                     
                <div class = "star">
                  <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                   <i class="yellow fa fa-star"></i>  
                    <i class="yellow fa fa-star"></i> 
                    <i class="yellow fa fa-star"></i> 
                    <br>
                    <h3>$29.00</h3>
                    
                    <p>Product.</p>
                    
                </div>
               
                 </div>
             
             
             
             </div>
         <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 magg1">
 <div class = "top-slide1">
 
    <div class = "show">
     
    <img src="ima/pexels-photo-2092474.jpeg"  class = "active1"> 
    <img src="ima/71.jpg">
    <img src="ima/beautiful-woman-with-healthy-body-white-background_1150-8490.jpg">    
    </div>
    
        <div class = "show1">
       

        <h1 class = " pre1" ><i class="fas fa-chevron-left"></i> </h1> 
      
       <h1 class= "next1"><i class="fas fa-chevron-right"></i> </h1> 
        </div>
          
     
    </div>
             
             </div>
         
         </div>
         
         
    </div>
    
    

   
</div> 
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     <div class = "img-box">
        <img src ="ima/product-914-image_d67b752c-11a0-438d-bf4b-72d66437d04a_275x.jpg">
    </div>
      <p class = "title">Product Title</p>
     <p class = "price">US$ 10,00</p>
       <a class= "add-cart"><h5>ចុចទិញ</h5></a>
      <div class = "share-box">
         <ul>
             <li> <i class = "fab fa-facebook"></i></li>
                 
              <li id = "hide"> <i class = "fas fa-eye"></i></li>   
            
             
             
        </ul>
         
         
     </div>
</div>  

</div>   
</div>  
    


</div>
       
    
<div class = "container">
     <div class = "row">
         <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 specail-menu">
     សំភារះកសិម្ម បែបទំនើប
         </div>
      
     </div>
    
</div>    
    
    
<div class = "container">
         <div class = "row active-menu">
         <div class = "col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 menu-chif">
      
           <ul>
               <li class = "next-menu">ម៉ាស៊ីនបាញ់ថ្នាំ</li>
               
               <li class = "next-menu1">ម៉ាស៊ីនកាត់ស្មៅ</li>
              <li class = "next-menu2">ម៉ាស៊ីនស្រោចដំណាំ</li>
              <li class = "next-menu3">ដំបូលរោងទំនើប</li>
                <li class = "next-menu4">សោមូលទំនើប</li>
                <li class = "next-menu5">ម៉ាស៊ីនកាត់ឈើ</li>
                <li class = "next-menu6">ម៉ាស៊ីនកាត់ដែក</li>
               
               
               
               
               
               
               
      
             </ul>
         </div>
        <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-1">
            
            
            
            <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/photo_2020-12-27_04-06-24.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/photo_2020-12-27_04-04-23.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/a1.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/a2.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-1">
              <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/a3.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/a4.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/a5.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/a6.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
             
             
             
             
             
             
         <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-77">
           <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/b1.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/b2.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/b3.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/b4.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-77">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/b5.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/b6.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/b7.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/b8.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
        <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-777">
           <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/c1.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/c2.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/c3.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/c4.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-777">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/c5.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/c6.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/c7.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/c8.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
        
             
             
             
             
         <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-7777">
            <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/d1.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/d2.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/d3.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/d4.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-7777">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/d5.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/d6.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/d7.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/d8.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
             
             
             
         <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-77777">
            <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/e1.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/e2.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/e3.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/e4.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-77777">
              <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/e5.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/e6.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/e7.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/e8.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
            <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-777777">
            <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/f1.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/f2.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/f3.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/f4.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-777777">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/f5.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/f6.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/f7.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/f8.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
             
             
             
             
          <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-771">
           <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/g1.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/g2.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/g3.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/g4.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-771">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/g5.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/g6.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/g7.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/g8.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
 
         </div>
         
         
          
         
         
         
         
         
         
         
         
         
    </div> 
         
    
    
  <br>
    

       
<div class = "container">
<div class = "row">
<div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 highly">
    
 <div class = " highly1">
  <img src ="ima/pf-e4c5d14e--womanshoes-2.webp"> 
    
</div>   
    
 
    
    
    
    
    
</div>    
    
 <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 highly">
<div class = " highly1">
  <img src ="ima/pf-cbf5427f--Clothes-1.webp"> 
    
</div>   
       
    
    
    
    
    
</div>     
    
    
</div>   
    
</div>   
      
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  
<div class = "container">
     <div class = "row">
         <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 specail-menu">
     សំភារះអគ្គីសនី បែបទំនើប
         </div>
      
     </div>
    
</div>    
     
<div class = "container">
         <div class = "row active-menu">
         <div class = "col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 menu-chif">
      
           <ul>
               <li class = "next-menu">ម៉ាស៊ីនបាញ់ថ្នាំ</li>
               
               <li class = "next-menu1">ម៉ាស៊ីនកាត់ស្មៅ</li>
              <li class = "next-menu2">ម៉ាស៊ីនស្រោចដំណាំ</li>
              <li class = "next-menu3">ដំបូលរោងទំនើប</li>
                <li class = "next-menu4">សោមូលទំនើប</li>
                <li class = "next-menu5">ម៉ាស៊ីនកាត់ឈើ</li>
                <li class = "next-menu6">ម៉ាស៊ីនកាត់ដែក</li>
               
               
               
               
               
               
               
      
             </ul>
         </div>
        <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-1">
            
            
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/b5.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/b6.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/b7.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/b8.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
        </div>
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-1">
              <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/c5.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/g4.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/c7.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/d7.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
             
             
             
             
             
             
         <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-77">
           <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/f2.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/81.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-77">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
        <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-777">
           <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/81.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/81.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-777">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
        
             
             
             
             
         <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-7777">
            <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/81.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/81.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-7777">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
             
             
             
         <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-77777">
            <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/81.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/81.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-77777">
              <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
            <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-777777">
            <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/81.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/81.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-777777">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
             
             
             
             
          <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-771">
           <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/81.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/81.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-771">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
 
         </div>
         
         
          
         
         
         
         
         
         
         
         
         
    </div> 
         
    
    
  <br>
    
    
    
    
    
    
    
    
    
    
    
    
    
      
<div class = "container">
<div class = "row">
<div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 highly">
    
 <div class = " highly1">
  <img src ="ima/pf-e4c5d14e--womanshoes-2.webp"> 
    
</div>   
    
 
    
    
    
    
    
</div>    
    
 <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 highly">
<div class = " highly1">
  <img src ="ima/pf-cbf5427f--Clothes-1.webp"> 
    
</div>   
       
    
    
    
    
    
</div>     
    
    
</div>   
    
</div>   
       
    
    
    
    
    
    
  
<div class = "container">
     <div class = "row">
         <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 specail-menu">
     សំភារះអគ្គីសនី បែបទំនើប
         </div>
      
     </div>
    
</div>    
    
    
<div class = "container">
         <div class = "row active-menu">
         <div class = "col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 menu-chif">
      
           <ul>
               <li class = "next-menu">ម៉ូទ័រ</li>
               
               <li class = "next-menu1">អំពូលភ្លើង</li>
              <li class = "next-menu2">ម៉ាស៊ីន</li>
              <li class = "next-menu3">ចង្រ្កានអគ្គីសនី</li>
                <li class = "next-menu4">កង្ហារ</li>
                <li class = "next-menu5">ទូរទឹកកក</li>
                <li class = "next-menu6">ម៉ាស៊ីន បោក</li>
               
               
               
               
               
               
               
      
             </ul>
         </div>
        <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-1">
            
            <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/b1.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/b2.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/b3.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/b4.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
        </div>
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-1">
              <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/c1.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/c2.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/c3.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/c4.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
             
             
             
             
             
             
         <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-77">
           <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/f5.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/g5.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/c5.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/c7.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-77">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
        <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-777">
           <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/81.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/81.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-777">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
        
             
             
             
             
         <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-7777">
            <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/81.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/81.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-7777">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
             
             
             
         <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-77777">
            <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/81.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/81.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-77777">
              <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
            <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-777777">
            <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/81.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/81.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-777777">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
             
             
             
             
          <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-771">
            <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-771">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
 
         </div>
         
         
          
         
         
         
         
         
         
         
         
         
    </div> 
         
    
    
  <br>
    
    
    
    
    
          
<div class = "container">
     <div class = "row">
         <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 specail-menu">
     សំភារះអគ្គីសនី បែបទំនើប
         </div>
      
     </div>
    
</div>    
    
    
<div class = "container">
         <div class = "row active-menu">
         <div class = "col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 menu-chif">
      
           <ul>
               <li class = "next-menu">ម៉ូទ័រ</li>
               
               <li class = "next-menu1">អំពូលភ្លើង</li>
              <li class = "next-menu2">ម៉ាស៊ីន</li>
              <li class = "next-menu3">ចង្រ្កានអគ្គីសនី</li>
                <li class = "next-menu4">កង្ហារ</li>
                <li class = "next-menu5">ទូរទឹកកក</li>
                <li class = "next-menu6">ម៉ាស៊ីន បោក</li>
               
               
               
               
               
               
               
      
             </ul>
         </div>
        <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-1">
            
            
            
            <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/d1.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/d2.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/d3.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/d4.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-1">
              <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/d5.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/f1.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
             
             
             
             
             
             
         <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-77">
           <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/81.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/81.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-77">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
        <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-777">
           <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/81.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/81.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-777">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
        
             
             
             
             
         <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-7777">
            <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/81.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/81.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-7777">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
             
             
             
         <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-77777">
            <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/81.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/81.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-77777">
              <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
            <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-777777">
            <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/81.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/81.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-777777">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
             
             
             
             
          <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-771">
           <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/81.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/81.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-771">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
 
         </div>
         
         
          
         
         
         
         
         
         
         
         
         
    </div> 
         
    
    
  <br>
    
    
    
     
<div class = "container">
<div class = "row">
<div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 highly">
    
 <div class = " highly1">
  <img src ="ima/pf-e4c5d14e--womanshoes-2.webp"> 
    
</div>   
    
 
    
    
    
    
    
</div>    
    
 <div class = "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 highly">
<div class = " highly1">
  <img src ="ima/pf-cbf5427f--Clothes-1.webp"> 
    
</div>   
       
    
    
    
    
    
</div>     
    
    
</div>   
    
</div>   
        
    
          
<div class = "container">
     <div class = "row">
         <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 specail-menu">
     សំភារះអគ្គីសនី បែបទំនើប
         </div>
      
     </div>
    
</div>    
    
    
<div class = "container">
         <div class = "row active-menu">
         <div class = "col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 menu-chif">
      
           <ul>
               <li class = "next-menu">ម៉ូទ័រ</li>
               
               <li class = "next-menu1">អំពូលភ្លើង</li>
              <li class = "next-menu2">ម៉ាស៊ីន</li>
              <li class = "next-menu3">ចង្រ្កានអគ្គីសនី</li>
                <li class = "next-menu4">កង្ហារ</li>
                <li class = "next-menu5">ទូរទឹកកក</li>
                <li class = "next-menu6">ម៉ាស៊ីន បោក</li>
               
               
               
               
               
               
               
      
             </ul>
         </div>
        <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-1">
            
            
            
            <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/f1.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/f2.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/g4.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/f3.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-1">
              <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/a2.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/g6.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/d4.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/f8.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
             
             
             
             
             
             
         <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-77">
           <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/81.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/81.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-77">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
        <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-777">
           <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/81.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/81.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-777">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
        
             
             
             
             
         <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-7777">
            <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/81.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/81.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-7777">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
             
             
             
         <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-77777">
            <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/81.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/81.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-77777">
              <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
            <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-777777">
            <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/81.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/81.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-777777">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
             
             
             
             
          <div class = "col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 chif-771">
           <div class = "chif-11">
                
                
           <div class = "c11">
                <img src="ima/81.jpg">
               <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>  
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c11">
                <img src="ima/81.jpg">
                <div class= "share" >
               <ul >
               <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
            
           <div class = "chif-11">
               
            
            <div class = "c12">
                
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div> 
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                </div>
            </div>
             
        </div>
         
         
         
         
        <div class = "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 chif-771">
             <div class = "chif-11">
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>   
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                             <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                
                
                </div>
            </div>
             <div class = "chif-12">
             <div class = "c12">
                 <img src="ima/72.jpg">
                 <div class= "share" >
               <ul >
                              <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
               </ul>
                 </div>
                 <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                 
                 
                </div>
            <div class = "c12">
                 <img src="ima/72.jpg">
                <div class= "share" >
               <ul >
                            <li>Share</li>
                <li>មើល</li> 
                   <li>ទិញ</li>  
                
               </ul>
                 </div>
               <div class = "share2">
                 <p>$20.00</p>
                <p>Product Title</p>
                </div>
               
                </div>
            </div>
             
        </div>
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
 
         </div>
         
         
          
         
         
         
         
         
         
         
         
         
    </div> 
         
    
    
  <br>
          
                     
         
         

    
<div class="container-fluid">
				<div class="row">
					<div class="col-lg-5 col-md-12 col-12 footer">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="1"><img src="vv.png" alt="#"></a>
							</div>
							
							<p class="call">មានសំនួរ? ទំនាក់ទំនងមកកាន់ក្រុមការងារ<span><a href="tel:+855 69609008"> 069 609008</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-12 col-12 footer">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4><i class="fas fa-rss-square"></i> ពត៏មាន</h4>
							<ul>
								<li><a href="#">អំពីខ្ញុំ</a></li>
								
								<li><a href="#">លក្ខ័ន្តិកះ</a></li>
								<li><a href="#">ទាក់ទងទៅកាន់យើង</a></li>
								<li><a href="#">ជំនួយ</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-12 col-12 footer">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4><i class="fas fa-sign"></i> ទូទៅ</h4>
							<ul>
								<li><a href="#">មធ្យោបាយបង់ប្រាក់</a></li>
								
								<li><a href="#">ការផ្ទេរត្រលប់មកវិញ</a></li>
								
								<li><a href="#">គោលការណ័</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-12 col-12 footer ">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4><i class="fas fa-map-marked"></i> អាស័យដ្ឋាន</h4>
							<!-- Single Widget -->
							<div class="links">
								<ul>
									<li>ផ្លូវ. 2.5 - បាត់ដំបង.</li>
									<li>បាត់ដំបង.</li>
									<li>infopherumpawnshop@.com</li>
									<li>+855 9797 00520</li>
								</ul>
							</div>

					</div>
				</div>
			</div>
		</div>
<div class="container-fluid">
				
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-12 footer2">
							<div class="left">
								<p class = "call">Copyright © 2020 <a href="http://www.wpthemesgrid.com/" target="_blank">Chhoeurn Pherum</a>  -  All Rights Reserved.</p>
							</div>
						</div>
						
					</div>
				
			</div>  
    
    
    
    
    
    
    
    
</body>   
    
<script src = "ecom.js"></script>

 <script>
$(document).ready(function(){
    
 
   $('[id="hide"]').click(function(){
       var x = $(this);
 
       x.parents('.item').find('.view').fadeIn(200);
       
    
   
   });
   $('.close').click(function(){
  var ethis = $(this);
       ethis.parents('.item').find('.view').fadeOut(200);
   }); 
    
    
    
    
    

    
  $(".menu2").click(function(){
    $(".menu-hidden").slideToggle();
  });
    
    
    
   
   $(".next1").click(function(){
       var ethis = $(this);
       var current = $(".active1");
       var nextimg = current.next();
       
       if (nextimg.length){
           
         current.removeClass("active1");
          nextimg.addClass("active1");
       }
   });
    
    $(".pre1").click(function(){
       
       var current = $(".active1");
       var preimg = current.prev();
       
       if (preimg.length){
           
         current.removeClass("active1");
           preimg.addClass("active1");
       }
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
    
    
    
    
    
    
    
    
    
   $(".next-menu").click(function(){
       
     var x = $(this);
       
     x.parents('.active-menu').find('.chif-1').slideToggle();  
    x.parents('.active-menu').find('.chif-77').hide();  
    x.parents('.active-menu').find('.chif-777').hide();  
   x.parents('.active-menu').find('.chif-7777').hide();  
    x.parents('.active-menu').find('.chif-77777').hide();  
   x.parents('.active-menu').find('.chif-777777').hide();  
    x.parents('.active-menu').find('.chif-771').hide();  
   
      
       
   });
    
      
   $(".next-menu1").click(function(){
       
     var x = $(this);
       
        
    x.parents('.active-menu').find('.chif-771').hide();  
   x.parents('.active-menu').find('.chif-777777').hide();  
    x.parents('.active-menu').find('.chif-77777').hide();  
   x.parents('.active-menu').find('.chif-7777').hide();  
    x.parents('.active-menu').find('.chif-777').hide();  
       x.parents('.active-menu').find('.chif-1').hide();   
     x.parents('.active-menu').find('.chif-77').slideToggle();  
   
      
       
   }); 
    
    
  
     $(".next-menu2").click(function(){
       
     var x = $(this);
       
        
    x.parents('.active-menu').find('.chif-777777').hide();  
   x.parents('.active-menu').find('.chif-77777').hide();  
    x.parents('.active-menu').find('.chif-7777').hide();  
   x.parents('.active-menu').find('.chif-77').hide();  
    x.parents('.active-menu').find('.chif-771').hide();  
       x.parents('.active-menu').find('.chif-1').hide();   
     x.parents('.active-menu').find('.chif-777').slideToggle();  
   
      
       
   }); 
     
      $(".next-menu3").click(function(){
       
     var x = $(this);
       
      
    x.parents('.active-menu').find('.chif-77').hide();  
   x.parents('.active-menu').find('.chif-777777').hide();  
    x.parents('.active-menu').find('.chif-77777').hide();  
   x.parents('.active-menu').find('.chif-777').hide();  
    x.parents('.active-menu').find('.chif-771').hide();  
       x.parents('.active-menu').find('.chif-1').hide();   
     x.parents('.active-menu').find('.chif-7777').slideToggle();  
   
      
       
   }); 
    
      $(".next-menu4").click(function(){
       
     var x = $(this);
       
        
    x.parents('.active-menu').find('.chif-77').hide();  
   x.parents('.active-menu').find('.chif-777777').hide();  
    x.parents('.active-menu').find('.chif-7777').hide();  
   x.parents('.active-menu').find('.chif-777').hide();  
    x.parents('.active-menu').find('.chif-771').hide();  
       x.parents('.active-menu').find('.chif-1').hide();   
     x.parents('.active-menu').find('.chif-77777').slideToggle();  
   
      
       
   }); 
    
      $(".next-menu5").click(function(){
       
     var x = $(this);
       
         
    x.parents('.active-menu').find('.chif-77777').hide();  
   x.parents('.active-menu').find('.chif-7777').hide();  
    x.parents('.active-menu').find('.chif-777').hide();  
   x.parents('.active-menu').find('.chif-771').hide();  
    x.parents('.active-menu').find('.chif-77').hide();  
       x.parents('.active-menu').find('.chif-1').hide();   
     x.parents('.active-menu').find('.chif-777777').slideToggle();  
   
      
       
   }); 
    
    
      $(".next-menu6").click(function(){
       
     var x = $(this);
       
        
    x.parents('.active-menu').find('.chif-777777').hide();  
   x.parents('.active-menu').find('.chif-77777').hide();  
    x.parents('.active-menu').find('.chif-7777').hide();  
   x.parents('.active-menu').find('.chif-777').hide();  
    x.parents('.active-menu').find('.chif-77').hide();  
       x.parents('.active-menu').find('.chif-1').hide();   
     x.parents('.active-menu').find('.chif-771').slideToggle();  
   
      
       
   }); 
    
 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
});

</script>    
     
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

</html>