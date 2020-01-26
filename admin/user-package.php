<?php
include '../access/db.php';
// If form submitted, insert values into the database.
if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $address = $_POST['address'];
    $gender = $_POST['customRadio'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    
    $bill_status = $_POST['bill_status'];
    $tours = $_POST['tours'];

    $query = "INSERT into `user` (uname, uaddress,  gender, contact, email, pwd) VALUES ('$uname', '$uaddress', '$gender','$contact','$email', '$pwd ')";
    $result = mysqli_query($con, $query);
    if ($result) {
        $getlastuid = mysqli_insert_id($con);

        $query2 = "INSERT INTO `user_packages` ( uid, tid, bill_status) VALUES ('$getlastuid', '$tours','$bill_status')";
        $result2 = mysqli_query($con, $query2);
        if ($result2) {
            $smsg = "User plan has been submitted!";
        } else {
            $smsg = mysqli_error($con);
        }
    } else {
        $smsg = mysqli_error($con);
    }
}

if (isset($_GET['uid'])) {
    $editid = $_GET['uid'];
    $getquery = mysqli_query($con, "SELECT * FROM user WHERE uid='$editid'");
    $editdata = mysqli_fetch_assoc($getquery);
}
if (isset($_POST['update'])) {
    $uname = $_POST['uname'];
    $add1 = $_POST['uaddress'];
    $gender = $_POST['customRadio'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];


    $bill_status= $_POST['bill_status'];
    $plans = $_POST['plans'];

    $query3 = "UPDATE user SET uname='$uname', uaddress='$uaddress', customRadio='$gender', contact='$contact', email='$email', pwd='$pwd'  WHERE uid='$editid'";
    $result3 = mysqli_query($con, $query);
    if ($result) {
        $getlastuid = mysqli_insert_id($con);
        $query4 = "UPDATE user_packages SET  bill_status='$bill_status' WHERE uid='$editid'"; 
        $result4 = mysqli_query($con, $query4);
        if($result4){
        $smsg = "Your plan has been updated successfully";
    } else {
        $smsg = mysqli_error($con);
    }
} else {
    $smsg = mysqli_error($con);
}
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include'pages/csslink.php';?>


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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">V2</a></li>
                                        <li class="breadcrumb-item active">user package</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">user package</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->
                        <div class="col-md-12 col-lg-6">
                            <div class="card ">
                                <div class="card-body">
                                    <h5 class="mt-0">xxx</h5>
                                    <p class="text-muted font-13 mb-4">xxx</p>
                                    <form>
                                        <div class="form-group row">
                                            <div class="col-sm-12 col-lg-6  mo-b-15">
                                                <input class="form-control" type="text" id="name" placeholder="Name">                                                       
                                            </div> 
                                            <div class="col-sm-12 col-lg-6">
                                                <input class="form-control" type="email" id="example-email-input3" placeholder="Email">
                                            </div>                                                   
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" id="subject2" placeholder="address">                                                       
                                            </div>
                                            <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" id="subject2" placeholder="contact">                                                       
                                            </div>
                                            <div class="form-group ">
                                        <label for="gst" class="col-form-label">Password</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['pwd']; ?>" <?php } ?>class="form-control" name="pwd" type="text" id="pwd" placeholder="Enter the password">
                                        </div>

                                    <div class="form-group ">
                                        <label for="speed" class="col-form-label">Plan Name</label>
                                        <div class="">
                                            <?php $getplansquery = mysqli_query($con, "SELECT * FROM tours"); ?>
                                            <select name="tours" class="form-control">
                                                <option selected hidden>Select Packages</option>
                                                <?php while ($getdata = mysqli_fetch_assoc($getplansquery)) { ?>
                                                    <option value="<?php echo $getdata['tid']; ?>"><?php echo $getdata['tname']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="speed" class="col-form-label">Bill Status</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['bill_status']; ?>" <?php } ?> class="form-control" name="bill_status" type="text" id="bill_status" placeholder="Enter the bill status">
                                        </div>
                                    </div>                                                
                                        <div class="custom-control custom-radio my-2">
                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked>
                                            <label class="custom-control-label" for="customRadio1">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio my-2">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">Female</label>
                                        </div>
                                        <div class="form-group ">
                                        <label for="speed" class="col-form-label">Bill Status</label>
                                        <div class="">
                                            <input <?php if (isset($editid)) { ?> value="<?php echo $editdata['bill_status']; ?>" <?php } ?> class="form-control" name="bill_status" type="text" id="bill_status" placeholder="Enter the bill status">
                                        </div>
                                    </div>
                                    <?php if (isset($editid)) { ?>
                                        <button name="update" type="submit" class="btn btn-primary px-4">Update</button>
                                    <?php } else { ?>
                                        <button name="submit" type="submit" class="btn btn-primary px-4">Submit</button>
                                    <?php } ?>
                                    </form>
                                </div>
                            </div>
                        </div>

                </div><!-- container -->

                <?php include 'pages/footer.php'; ?>
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->


        <!-- jQuery  -->
        <?php include 'pages/jslink.php'; ?>

    </body>
</html>

