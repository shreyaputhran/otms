<?php 
include '../access/accesscontroladmin';
include '../access/db.php';
if(isset($_POST['submit']))
{
    $txname=$_POST['txname'];
    $txfrom=$_POST['txfrom'];
    $txto=$_POST['txto'];
    $txdate=$_POST['txdate'];
    $txtime=$_POST['txprice'];
    $txprice=$_POST['txprice'];

    $query="INSERT into `taxis` ('txname','txfrom','txto','txdate','txtime','txprice') VALUES ($txname,$txfrom,$txto,$txdate,$txtime,$txprice)";
    $result=mysqli_query($con,$query);
    if($result)
    {
        $smsg="your taxi plan  has been applied successfully";

    }
    else{
        $smsg=mysqli_error($con);
    }
}
if(isset($_GET['taxiid'])) {
    $editid=$_GET['taxiid'];
    $getquery=mysqli_query($con,"SELECT * FROM taxis WHERE taxiid='$editaxiid'");
    $editdata=mysqli_fetch_assoc($getquery);
}
if(isset($_POST['update']))
{
    $txname=$_POST['txname'];
    $txfrom=$_POST['txfrom'];
    $txto=$_POST['txto'];
    $txdate=$_POST['txdate'];
    $txtime=$_POST['txprice'];
    $txprice=$_POST['txprice'];
    $query="UPDATE  taxis  SET txname='$txname', txfrom='$txfrom', txto='$txto',txdate='$txdate',txtime='$txtime',txprice='$txprice'  WHERE taxiid=$editaxiid'";
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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">add taxi</a></li>
                                        
                                    </ol>
                                </div>
                                <h4 class="page-title">ADD TAXI</h4>
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
                                            <input <?php if (isset($editaxiid)) { ?> value="<?php echo $editdata['txname'];?>"<?php } ?>name="txname" class="form-control" type="text" id="txname" placeholder=" Enter the Name">                                                       
                                            </div> 
                                            <div class="col-sm-12 col-lg-6">
                                                <input <?php if (isset($editaxiid)) { ?> value="<?php echo $editdata['txfrom'];?>"<?php } ?>  name="txfrom" class="form-control" type="text" id="tfrom" placeholder="PICK UP">
                                            </div> 
                                            <div class="col-sm-12 col-lg-6  mo-b-15">
                                                <input <?php if (isset($editaxiid)) { ?> value="<?php echo $editdata['txto'];?>"<?php } ?> name="txfrom" class="form-control" type="text" id="txto" placeholder="DROP ME">                                                       
                                            </div> 
                                            <div class="col-sm-12 col-lg-6">
                                                <input  <?php if (isset($editaxiid)) { ?> value="<?php echo $editdata['txdate'];?>"<?php } ?>name="txdate" class="form-control" type="text" id="txdate" placeholder="DATE">
                                            </div> 
                                            <div class="col-sm-12 col-lg-6">
                                                <input  <?php if (isset($editaxiid)) { ?> value="<?php echo $editdata['txtime'];?>"<?php } ?>name="txtime" class="form-control" type="text" id="txtime" placeholder="TIME">
                                            </div> 
                                            <div class="col-sm-12 col-lg-6">
                                                <input  <?php if (isset($editaxiid)) { ?> value="<?php echo $editdata['txprice'];?>"<?php } ?>name="txprice" class="form-control" type="text" id="txprice" placeholder="PRICE">
                                            </div>                                                   
                                        </div>
                                        <?php if (isset($editaxiid)) { ?>
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