<?php 
include '../access/db.php';
if(isset($_POST['apply']))
{
    $tname=$_POST['tname'];
    $tprice=$_POST['tprice'];
    $tdesp=$_POST['tdesp'];
    $tgst=$_POST['tgst'];

    $query="INSERT into `tours` (tname,tprice,tdesp,tgst) VALUES ('$tname',$tprice','$tdesp','$tgst')";
    $result=mysqli_query($con,$query);
    if($result)
    {
        $smsg="your package has been applied successfully";

    }
    else{
        $smsg=mysqli_error($con);
    }
}
if(isset($_GET['tid'])) {
    $editid=$_GET['tid'];
    $getquery=mysqli_query($con,"SELECT * FROM tours WHERE tid='$editid'");
    $editdata=mysqli_fetch_assoc($getquery);
}
if(isset($_POST['update']))
{
    $tname=$_POST['tname'];
    $tprice=$_POST['tprice'];
    $tdesp=$_POST['tdesp'];
    $tgst=$_POST['tgst'];

    $query="UPDATE  tours  SET tname='$tname',tprice='$tprice',tdesp='$tdesp',tgst='$tgst' WHERE tid=$editid'";
    $result=mysqli_query($con,$query);
    if($result)
    {
        $smsg="your package has been updated successfully";

    }
    else{
        $smsg=mysqli_error($con);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'pages/csslink.php';
        ?>
    </head>

    <body>

        <!-- Top Bar Start -->
        <?php include 'pages/topbar.php';
        ?>
        <!-- Top Bar End -->

        <div class="page-wrapper">
            <!-- Left Sidenav -->


            <!-- end left-sidenav-->

            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">

                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">V2 </a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">add packages</a></li>
                                        
                                    </ol>
                                </div>
                                <h4 class="page-title">ADD PACKAGES</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->
                        <div class="col-md-12 col-lg-12">
                            <div class="card ">
                                <div class="card-body">
                                    <h5 class="mt-0">travel around the world</h5>
                                    <p class="text-muted font-13 mb-4">with best price gauranteed</p>
                                    <?php if(isset($smsg)){?>
                                          <div class="alert alert-danger" role="alert">
                                            <?php echo $smsg;?>
                                        </div>
                                    <?php } ?>
                                    <form method="POST">
                                        <div class="form-group row">
                                            <div class="col-sm-12 col-lg-6  mo-b-15">
                                                <input name="tname" class="form-control" type="text" id="name" placeholder="Name">                                                       
                                            </div> 
                                            <div class="col-sm-12 col-lg-6">
                                                <input  name="tprice" class="form-control" type="text" id="price" placeholder="Price">
                                            </div> 
                                            <div class="col-sm-12 col-lg-6  mo-b-15">
                                                <input name="tdesp" class="form-control" type="text" id="desp" placeholder="Description">                                                       
                                            </div> 
                                            <div class="col-sm-12 col-lg-6">
                                                <input  name="tgst" class="form-control" type="text" id="gst" placeholder="GST">
                                            </div>                                                   
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" id="subject2" placeholder="Subject">                                                       
                                            </div>                                                    
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Your message"></textarea>
                                        </div>                                                
                                        <div class="custom-control custom-radio my-2">
                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked>
                                            <label class="custom-control-label" for="customRadio1">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio my-2">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">Female</label>
                                        </div>
                                        <button name="apply" type="submit" class="btn btn-primary px-4">Apply</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        
                        

                </div><!-- container -->

                <?php include 'pages/footer.php';
                ?>
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->


        <!-- jQuery  -->
        <?php include 'pages/jslink.php';
        ?>


    </body>
</html>