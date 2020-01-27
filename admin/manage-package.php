<?php 
include '../access/db.php';
if(isset($_POST['submit']))
{
    $tname=$_POST['tname'];
    $tprice=$_POST['tprice'];
    $tdesp=$_POST['tdesp'];
    $tgst=$_POST['tgst'];

    $query="INSERT into `tours` (tname,tprice,tdesp,tgst) VALUES ('$tname','$tprice','$tdesp','$tgst')";
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
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['tname'];?>"<?php } ?>name="tname" class="form-control" type="text" id="tname" placeholder=" Enter the Name">                                                       
                                            </div> 
                                            <div class="col-sm-12 col-lg-6">
                                                <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['tname'];?>"<?php } ?>  name="tprice" class="form-control" type="text" id="tprice" placeholder="Price">
                                            </div> 
                                            <div class="col-sm-12 col-lg-6  mo-b-15">
                                                <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['tname'];?>"<?php } ?> name="tdesp" class="form-control" type="text" id="tdesp" placeholder="Description">                                                       
                                            </div> 
                                            <div class="col-sm-12 col-lg-6">
                                                <input  <?php if (isset($editid)) { ?> value="<?php echo $editdata['tname'];?>"<?php } ?>name="tgst" class="form-control" type="text" id="gst" placeholder="GST">
                                            </div>                                                   
                                        </div>
                                        <?php if (isset($editid)) { ?>
                                            <button name="Update" type="submit" class="btn btn-primary px-4">UPDATE</button>
                                        <?php } else { ?>
                                            <button name="submit" type="submit" class="btn btn-primary px-4">Submit</button>
                                            <?php } ?>  
                                        
                                        
                                                                                        
                                        
                                       
                                    </form>
                                </div>
                            </div>
                        </div>

                        
                    </div>    

                </div><!-- container -->

                <?php include 'pages/footer.php';?>
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->


        <!-- jQuery  -->
        <?php include 'pages/jslink.php'; ?>
       

</body>
</html>