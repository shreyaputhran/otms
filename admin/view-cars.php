<?php
include '../access/accesscontroladmin.php';
include '../access/db.php';
$getquery = mysqli_query($con,"SELECT * FROM taxis");
if(isset($_POST['del']))
{
    $deltaxiid=$_POST['deltid'];
    $delquery=mysqli_query($con,"DELETE FROM tours WHERE taxiid='$deltaxiid'");
    if($delquery)
    {
        $getquery=mysqli_query($con,"SELECT * FROM taxis");
        echo"<scrpit>window.alert('data deleted ');</script>";

    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'pages/csslink.php';?>
        <style>
        .trashicon:hover{
            color: #007bff !important;

        } 
        </style>

    </head>

    <body>

        <!-- Top Bar Start -->
        <?php include 'pages/topbar.php';?>
        <!-- Top Bar End -->

        <div class="page-wrapper">
            <!-- Left Sidenav -->
            <?php include 'pages/leftsidebar.php';?>
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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">view Taxi</a></li>
                                         </ol>
                                </div>
                                <h4 class="page-title">View Taxis</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h5 class="mt-0">travel around </h5>
                                    <p class="text-muted font-13 mb-4">your travel partner</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>taxi name</th>
                                                <th>from</th>
                                                <th>to</th>
                                                <th>Date</th>
                                                <th>time</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php while ($getdata=mysqli_fetch_assoc($getquery))  { ?>
                                            <tr>
                                                
                                                <td><?php echo $getdata['txname']; ?></td>
                                                <td><?php echo $getdata['txfrom']; ?></td>
                                                <td><?php echo $getdata['txto']; ?></td>
                                                <td><?php echo $getdata['txdate']; ?></td>
                                                <td><?php echo $getdata['txtime']; ?></td>
                                                <td><?php echo $getdata['txprice']; ?></td>
                                                <td>
                                                <a href="manage-cars.php?taxiid=<?php echo $getdata['taxiid'];?>"class=""><i class="fa fa-edit mr-2 font-12"></i></a>
                                                <form method= "post" style="display: inline-block;">
                                                <button name="del"  type="submit"><span class="ti-trash text-danger"></span></button>
                                                <input type="hidden" values="<?php echo $getdata['taxiid']; ?>" name="deltaxiid">
                                                </form>
                                                </td>
                                              </tr>
                                            <?php } ?>
                                           
                                             
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
    
    
                   <!-- end row -->
    
    
                    <!-- end row --> 

                </div><!-- container -->

                <?php include 'pages/footer.php';
                ?>
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->


        <!-- jQuery  -->
       <?php include 'pages/jslink.php';?>

    </body>
</html>