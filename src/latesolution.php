
<?php


include_once('admin.php');

?>




    
<style>
    
    
    
    .up{
          
	background-color:rgba(0, 0, 0, 0.7);
	position:fixed;
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
         
         width: 800px;
         height: 400px;
         margin: auto;
         background-color:aliceblue;
         margin-top: 10px;
         border-radius: 0px;
     
  
     }
     
     
     
     
    .row{
        
        margin-top: 20px;
        float: left;
        margin-left: 20px;
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
     
 
     
     .fortable{
         
         margin-left: 300px;
         width: 1000px;
        
     }
     .tab3{
         
         border-style: outset;
         width: 1000px;
        
         margin-left: 80px;
         border-radius: 0px;
         background-color:azure;
     }
     #table_c{
         border-radius: 0px;
     }
     .tab2{
         border-radius: 0px;
         
     }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    #modalContainer {
	background-color:rgba(0, 0, 0, 0.3);
	position:absolute;
	width:100%;
	height:100%;
	top:0px;
	left:0px;
	z-index:10000;
	background-image:url(tp.png); /* required by MSIE to prevent actions on lower z-index elements */
}

#alertBox {
	position:relative;
	width:400px;
	height:500px;
	margin-top:50px;
	border:1px solid #666;
	background-color:#fff;
	background-repeat:no-repeat;
	background-position:20px 30px; 
    
    
   
}

#modalContainer > #alertBox {
	position:fixed;
}

#alertBox h1 {
	margin:0;
    
	font-family: 'Hanuman', serif;
    font-size: 20px;
	background-color:#3073BB;
	color:#FFF;
	border-bottom:1px solid #000;
	padding:10px;
    text-align: center;
}

#alertBox p {
	font-family: 'Hanuman', serif;
	height:400px;
	padding:40px;
    font-size: 20px;
	margin-left:10px;
    
    padding-top: 40px;
}

#alertBox #closeBtn {
	display:block;
	position:relative;
	margin:5px auto;
    margin-bottom: 10px;
	padding:7px;
	border:0 none;
	width:70px;
	font:0.7em verdana,arial;
	text-transform:uppercase;
	text-align:center;
	color:#FFF;
	background-color:#357EBD;
	border-radius: 3px;
	text-decoration:none;
}

/* unrelated styles */

#mContainer {
	position:relative;
	width:600px;
	margin:auto;
	padding:5px;
	border-top:2px solid #000;
	border-bottom:2px solid #000;
	font-family: 'Hanuman', serif;
}

h1,h2 {
	margin:0;
	padding:4px;
	font-family: 'Hanuman', serif;
	border-bottom:1px solid #000;
}

code {
	font-size:1.2em;
	color:#069;
}

#credits {
	position:relative;
	margin:25px auto 0px auto;
	width:350px; 
	font-family: 'Hanuman', serif;
	border-top:1px solid #000;
	border-bottom:1px solid #000;
	height:90px;
	padding-top:4px;
}

#credits img {
	float:left;
	margin:5px 10px 5px 0px;
	border:1px solid #000000;
	width:80px;
	height:79px;
}

.important {
	background-color:#F5FCC8;
	padding:2px;
}

code span {
	color:green;
}
   
  .table1{
        
        
        margin-left: 10px;
    }
    .table3{
        margin-left: 0px;
        margin-bottom: 30px;
       
    }
    #btn-successt{
        margin-top: 160px;
        margin-left: 180px;
        float: right;
    }

</style>
    <br>
<center>
    <a href = "#" role="button" id = "hide" class="btn btn-primary" >Find Solution</a>
    
</center> 
   
















            
                          
                          
<div class = "container">
    
         <table id= "t" class="table-responsive" >
                    
                  
                  <thead class = "table1" >
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
      
   <tr class = "table-secondary"> 
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



</div>


</body>

   

</html>