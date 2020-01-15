<?php
require('../access/db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['submit'])){
 $uname = $_POST['uname'];
 $pwd=$_POST['pwd'];
 $query="SELECT * FROM user WHERE uname='$uname'AND pwd='$pwd'";
 $result=mysqli_query($con,$query);
 $rows=mysqli_num_rows($result);
 if($rows>=1){
     $_SESSION['uname']=$uname;
     echo "<script> window.location= '../index.php'; </script>";
         }else{
        $query2="SELECT * FROM `admin` WHERE auname='$uname'AND apwd='$pwd'";
        $result2=mysqli_query($con,$query2);
        $getinfo=mysqli_fetch_assoc($result2);
        $rows2=mysqli_num_rows($result2);
        if($rows2>=1){
                $_SESSION['auname']=$getinfo['auname'];
                $_SESSION['aid']=$getinfo['aid'];
                echo "<scrpit> window.location= '../admin/index.php'; </script>";
                //echo "<script>window.alert('you are logged in as admin');</script>";
        } else {
            $smsg="username/passowrd incorrect";
           echo "<div class='form'>";
           
        }
 }
 
}
?>
<!doctype html>
<html lang="en">
    <head>
        <base href="../">
        <?php include('../pages/csslink.php'); ?>
    </head>
    
    
    <body>
    <?php include('../pages/header.php'); ?>
   <!-- end sidenav-content -->
        
        
        <!--============= PAGE-COVER =============-->
        <section class="page-cover" id="cover-login">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Login Page</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Login Page</li>

                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="login" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        
                        	<div class="flex-content">
                                <div class="custom-form custom-form-fields">
                                    <h3>Login</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <?php if(isset($smsg)){?>
                                          <div class="alert alert-danger" role="alert">
                                            usrname/password invorrect
                                        </div>
                                    <?php } ?>
                                    <form method="post">
                                            
                                        <div class="form-group">
                                             <input name="uname" type="text" class="form-control" placeholder="Username"  required/>
                                             <span><i class="fa fa-user"></i></span>
                                        </div>
                                        
                                        <div class="form-group">
                                             <input name="pwd" type="password" class="form-control" placeholder="Password"  required/>
                                             <span><i class="fa fa-lock"></i></span>
                                        </div>
                                        
                                        <div class="checkbox">
                                             <label><input type="checkbox"> Remember me</label>
                                        </div>
                                        
                                        <button type="submit" name="submit" class="btn btn-orange btn-block">Login</button>
                                    </form>
                                    
                                    <div class="other-links">
                                    	<p class="link-line">New Here ? <a href="registration.php">Signup</a></p>
                                        <a class="simple-link" href="#">Forgot Password ?</a>
                                    </div><!-- end other-links -->
                                </div><!-- end custom-form -->
                                
                                <div class="flex-content-img custom-form-img">
                                    <img src="images/login.jpg" class="img-responsive" alt="registration-img" />
                                </div><!-- end custom-form-img -->
                            </div><!-- end form-content -->
                            
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->         
            </div><!-- end login -->
        </section><!-- end innerpage-wrapper -->
        
        
        <!--======================= BEST FEATURES =====================-->
        <section id="best-features" class="banner-padding black-features">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-6 col-md-3">
                    	<div class="b-feature-block">
                    		<span><i class="fa fa-dollar"></i></span>
                        	<h3>Best Price Guarantee</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-sm-6 col-md-3">
                    	<div class="b-feature-block">
                    		<span><i class="fa fa-lock"></i></span>
                        	<h3>Safe and Secure</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-sm-6 col-md-3">
                    	<div class="b-feature-block">
                    		<span><i class="fa fa-thumbs-up"></i></span>
                        	<h3>Best Travel Agents</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-sm-6 col-md-3">
                    	<div class="b-feature-block">
                    		<span><i class="fa fa-bars"></i></span>
                        	<h3>Travel Guidelines</h3>
                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                </div><!-- end row -->
        	</div><!-- end container -->
        </section><!-- end best-features -->
        
        
        <!--========================= NEWSLETTER-1 ==========================-->
        <section id="newsletter-1" class="section-padding back-size newsletter"> 
            <div class="container">
                <div class="row">
                	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <h2>Subscribe Our Newsletter</h2>
                        <p>Subscibe to receive our interesting updates</p>	
                        <form>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" class="form-control input-lg" placeholder="Enter your email address" required/>
                                    <span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                                </div>
                            </div>
                        </form>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end newsletter-1 -->
        
        
        <!--======================= FOOTER =======================-->
        <?php include('../pages/footer.php'); ?>
        <!-- end footer -->
        
        
        <!-- Page Scripts Starts -->
        <?php include('../pages/jslink.php'); ?>
        <!-- Page Scripts Ends -->
    </body>
</html>
