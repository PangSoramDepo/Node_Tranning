<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="plugins/sweetalert/sweetalert.js"></script>

<?php
include_once 'connectdb.php';
session_start();
$nameErr = $emailErr = $genderErr = $websiteErr = "";
//$g=header('location:login.php');
if(isset($_POST['btn_login'])){
   // $button= $_POST['btn_login']
    $useremail= $_POST['txt_email'];
    $password=$_POST['txt_password'];
    $select =$dsn->prepare("select * from table_name where email='$useremail'AND password='$password'");
    $select->execute();
    $row=$select->fetch(PDO::FETCH_ASSOC);

    if($row['email']==$useremail AND $row['password']==$password){
        
      
         echo '<script type= "text/javascript">jQuery(function validation(){
       swal({
        title: "លោកអ្នកកំពុងចូលទៅកាន់ ទិន្នន័យ!",
        text: "សូមអគុណដែលបានចូលមក!",
        icon: "success",
        button: "តោះចូល!",
        });});
        </script>';
        header('refresh:2,headerh.php'); 
        


         $_SESSION['useremail']=$row['email']; 
      //  $_SESSION['kpassword']="kkkk";
        //$_SESSION['role']="admin";
       
     //echo $sucess = 'Login Successfully';
    //header('refresh:0,header.php');
    
    //$_SESSION['username']=$row['name'];   
    //$_SESSION['$useremail']=$row['email']; 
    //$_SESSION['$password']=$row['password'];
    //$_SESSION['role']=$row['role'];
        
    //header('refresh:1,header.php');
     // ($row['email']==$useremail AND $row['password']==$password)  
        
    }else if($row['email']!=$useremail AND $row['password']!=$password){
         header('location:ll2.php');
        
        
    }else{
        header('location:ll2.php');}
}
       // ($row['email
?>





<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="Styles/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="Styles/bootstrap-4.1.0.min.js" type="text/javascript"></script>
        <link href="Styles/bootstrap-4.1.0.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/new/n.css"rel="stylesheet" type="text/css"/>
        
        
        <link href="https://fonts.googleapis.com/css2?family=Hanuman&display=swap" rel="stylesheet"> 
    
   <style>
@import url('https://fonts.googleapis.com/css2?family=Hanuman&display=swap');
</style> 
<style>
    body{
        
        font-family: 'Hanuman', serif;
        
    }
    
</style>
    
    
        <link href="Styles/MainStyle.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
       
        
        <div class="container register">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link " id="home-tab" data-toggle="tab" href="ll.php" role="tab" aria-controls="home" aria-selected="false">សូមលោកអ្នកស្វែងរកពត៏មាន នៅទីនេះ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active " id="profile-tab" data-toggle="tab" href="ll.php" role="tab" aria-controls="profile" aria-selected="true">កិច្ចការរបស់អ្នក</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active text-align form-new" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">C_PHERUM</h3>
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <input type="text" name="txt_email" class="form-control" placeholder="Your Email *" value="" required=""/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="txt_password" class="form-control" placeholder="Your Password *" value="" required=""/>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="btn_login" class="btnContactSubmit" value="Login" />
                                            <a href="ForgetPassword.php" class="btnForgetPwd" value="Login">ភ្លេច លេខកូដ</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show text-align form-new" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3  class="register-heading">Login Form 2</h3>
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <form method="post">
                                        <div class="form-group">
                                            <input type="text" name="txt_email" class="form-control" placeholder="Your Email *" value="" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="txt_password" class="form-control" placeholder="Your Password *" value="" required=""/>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="btn_login" class="btnContactSubmit" value="Login" />
                                            <a href="ForgetPassword.php" class="btnForgetPwd" value="Login">ភ្លេច លេខកូដ</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


