<?php
 include '../access/accesscontroladmin.php';
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'pages/csslink.php';?>
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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->
                    
                    <div class="row">
                        
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <span class="float-right text-muted font-13">Last 3 month</span>
                                    <h5 class="mt-0 mb-3">Workloed</h5>                                    
                                    <div id="donut-example" class="morris-chart workloed-chart"></div> 
                                    <ul class="list-unstyled text-center text-muted mb-0">
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-purple mr-2"></i>External</li>
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-pink mr-2"></i>Internal</li>
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-light mr-2"></i>Other</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12 col-lg-6 col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0 mb-3">Budget Detail</h5>
                                    <div id="morris-bar-chart" class="morris-chart project-budget-detail-chart"></div>
                                    <ul class="list-unstyled text-center text-muted mb-0 mt-2">
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-primary mr-2"></i>Total Budget</li>
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-success mr-2"></i>Amount Used</li>
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-secondary mr-2"></i>Target Amount</li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-12 col-xl-3">
                            <div class="card profile">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="assets/images/users/user-3.jpg" alt="" class="rounded-circle img-thumbnail thumb-xl">
                                        <div class="online-circle">
                                            <i class="fas fa-circle text-success"></i>
                                        </div>                                        
                                        <h4 class="">Mark Kearney</h4>
                                        <p class="text-muted font-12">Project Manager</p>
                                        <p class="font-13 text-muted">There are many variations of passages 
                                            of Lorem Ipsum available, but the majority have suffered alteration in some 
                                            form,  or randomised words which don't look even slightly believable. 
                                            If you are going to use a passage.</p>
                                        <a href="#" class="btn btn-pink btn-round px-5">Follow Me</a>
                                    </div>                                    
                                </div>
                            </div>
                        </div>                                                                 
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-md-12 col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0 mb-3">Project Budget</h5>
                                    <div class="row justify-content-end">                                        
                                        <div class="col-md-12 col-xl-12 align-self-center">
                                            <ul class="list-unstyled list-inline float-right">
                                                <li class="list-inline-item px-3">
                                                    <h5 class="mt-0">$ 42,000 </h5>
                                                    <small class="font-14 text-muted">Total Budget</small>
                                                </li>
                                                <li class="list-inline-item px-3">
                                                    <h5 class="mb-2">$ 7,200 </h5>
                                                    <small class="font-14 text-muted">Remaining</small>
                                                </li>
                                                <li class="list-inline-item px-3">
                                                    <h5 class="text-danger mb-2"><i class="mdi mdi-arrow-down-bold font-14 text-danger"></i> 7.9% </h5>                                                                                
                                                    <span class="font-14 text-danger">Over Target Currently</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="extra-area-chart" class="morris-chart project-budget-chart"></div>                                    
                                    <ul class="list-unstyled text-center text-muted mb-0 mt-2">
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-primary mr-2"></i>Total Budget</li>
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-success mr-2"></i>Amount Used</li>
                                        <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-secondary mr-2"></i>Target Amount</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0">Overall Process</h5>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6 align-self-center">
                                            <div class="live-tile text-center" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="10">
                                                <div>      
                                                    <h5 class="text-primary pt-2">P1-Launch Date</h5>  
                                                    <small class="text-muted">Tuesday, 25 December 2018</small>                                                    
                                                    <h3 class="text-dark">170 Days</h3>                                                                            
                                                </div>
                                                <div>                                                            
                                                    <h5 class="text-primary pt-2">P2-Launch Date</h5>  
                                                    <small class="text-muted">Tuesday, 25 December 2018</small>                                                    
                                                    <h3 class="text-dark">180 Days</h3> 
                                                </div>
                                                <div>                                                            
                                                    <h5 class="text-primary pt-2">P3-Launch Date</h5>  
                                                    <small class="text-muted">Tuesday, 25 December 2018</small>                                                    
                                                    <h3 class="text-dark">190 Days</h3> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 align-self-center">
                                            <div class="text-center knob-Prosess">
                                                <input class="knob animated" value="0" rel="90" data-width="120" data-height="120" data-linecap=round
                                                data-fgColor="#44a2d2"  data-skin="tron" data-angleOffset="180"
                                                data-readOnly=true data-thickness=".1"/>
                                                <div class="text-center knob-prosess-btn">
                                                    <a class="btn btn-sm  btn-primary text-white px-3 mt-2 mb-0">Refresh</a>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>                                                                  
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i class="mdi mdi-diamond text-warning"></i>
                                                    </div> 
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="ml-2 text-right">
                                                        <p class="mb-1 text-muted font-13">Projects</p>
                                                        <h4 class="mt-0 mb-1 font-20">35</h4>                                                                                                                                           
                                                    </div>
                                                </div>                    
                                            </div>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar progress-animated  bg-warning" role="progressbar" style="max-width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i class="mdi mdi-account-multiple text-purple"></i>
                                                    </div> 
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="ml-2 text-right">
                                                        <p class="mb-1 text-muted font-13">Member</p>
                                                        <h4 class="mt-0 mb-1 font-20">12</h4>                                                                                                                                           
                                                    </div>
                                                </div>                    
                                            </div>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar progress-animated  bg-purple" role="progressbar" style="max-width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i class="mdi mdi-playlist-check text-success"></i>
                                                    </div> 
                                                </div>
                                                <div class="col-8 align-self-center text-center">
                                                    <div class="ml-2 text-right">
                                                        <p class="mb-0 text-muted font-13">Tasks</p>
                                                        <span class="mt-0 font-20"><strong>40</strong></span>
                                                        <span class="badge badge-soft-success mt-1 shadow-none">Active</span>                                                                                                                                     
                                                    </div>
                                                </div>                    
                                            </div>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar progress-animated  bg-success" role="progressbar" style="max-width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-4 col-4 align-self-center">
                                                    <div class="icon-info">
                                                        <i class="mdi mdi-coin text-pink"></i>
                                                    </div> 
                                                </div>
                                                <div class="col-sm-8 col-8 align-self-center text-center">
                                                    <div class="ml-2 text-right">
                                                        <p class="mb-1 text-muted font-13">Budget</p>
                                                        <h4 class="mt-0 mb-1 font-20">$18090</h4>                                                                                                                                           
                                                    </div>
                                                </div>                    
                                            </div>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar progress-animated  bg-pink" role="progressbar" style="max-width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 col-xl-9">
                            <div class="card">                                
                                <div class="card-body">
                                    <h5 class="mt-0 pb-3">All Projects</h5>           
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Project Name</th>
                                                            <th>Client Name</th>
                                                            <th>Start Date</th>
                                                            <th>Deadline</th>
                                                            <th>Status</th>
                                                            <th>Progress</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Product Devlopment</td>
                                                            <td>
                                                                <img src="assets/images/users/user-2.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                                                Kevin J. Heal
                                                            </td>
                                                            <td>20/3/2018</td>
                                                            <td>5/5/2018</td>
                                                            <td><span class="badge badge-boxed  badge-primary">Active</span></td>
                                                            <td>
                                                                <small class="float-right ml-2 pt-1 font-10">92%</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>New Office Building</td>
                                                            <td>
                                                                <img src="assets/images/users/user-3.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                                                Frank M. Lyons
                                                            </td>
                                                            <td>11/6/2018</td>
                                                            <td>15/7/2018</td>
                                                            <td><span class="badge badge-boxed  badge-warning">Panding</span></td>
                                                            <td>
                                                                <small class="float-right ml-2 pt-1 font-10">0%</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar  bg-warning" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Website &amp; Blog</td>
                                                            <td>
                                                                <img src="assets/images/users/user-4.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                                                Hyman M. Cross
                                                            </td>
                                                            <td>21/6/2018</td>
                                                            <td>3/7/2018</td>
                                                            <td><span class="badge badge-boxed  badge-warning">Panding</span></td>
                                                            <td>
                                                                <small class="float-right ml-2 pt-1 font-10">0%</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar  bg-warning" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Market Research</td>
                                                            <td>
                                                                <img src="assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                                                Angelo E. Butler
                                                            </td>
                                                            <td>30/4/2018</td>
                                                            <td>1/6/2018</td>
                                                            <td><span class="badge badge-boxed  badge-primary">Active</span></td>
                                                            <td>
                                                                <small class="float-right ml-2 pt-1 font-10">78%</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar  bg-primary" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Export Marketing</td>
                                                            <td>
                                                                <img src="assets/images/users/user-6.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                                                Robert C. Golding
                                                            </td>
                                                            <td>20/3/2018</td>
                                                            <td>5/5/2018</td>
                                                            <td><span class="badge badge-boxed  badge-primary">Active</span></td>
                                                            <td>
                                                                <small class="float-right ml-2 pt-1 font-10">45%</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar  bg-primary" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Product Devlopment</td>
                                                            <td>
                                                                <img src="assets/images/users/user-7.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                                                Kevin J. Heal
                                                            </td>
                                                            <td>14/2/2018</td>
                                                            <td>10/8/2018</td>
                                                            <td><span class="badge badge-boxed  badge-primary">Active</span></td>
                                                            <td>
                                                                <small class="float-right ml-2 pt-1 font-10">35%</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar  bg-primary" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Website &amp; Blog</td>
                                                            <td>
                                                                <img src="assets/images/users/user-8.jpg" alt="" class="thumb-sm rounded-circle mr-2">
                                                                Phillip T. Morse
                                                            </td>
                                                            <td>8/4/2018</td>
                                                            <td>2/6/2018</td>
                                                            <td><span class="badge badge-boxed  badge-danger">Complete</span></td>
                                                            <td>
                                                                <small class="float-right ml-2 pt-1 font-10">100%</small>
                                                                <div class="progress mt-2" style="height:5px;">
                                                                    <div class="progress-bar  bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                        </tr>                                                                                                  
                                                    </tbody>
                                                </table>
                                            </div><!--end table-responsive-->                                            
                                        </div>
                                    </div> 
                                </div>                                                                                                   
                            </div>
                        </div>                                
                        <div class="col-md-12 col-lg-12 col-xl-3">
                            <div class="card">                                       
                                <div class="card-body"> 
                                    <h5 class="mt-0 mb-3">Activity</h5>
                                    <div class="activity">
                                        <i class="mdi mdi-check text-primary"></i>
                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted text-right font-10">5 minutes ago</div>
                                                <h5 class="mt-0">Task finished</h5>
                                                <p class="text-muted font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    <a href="#" class="text-info">[more info]</a>
                                                </p>
                                            </div>
                                        </div>
                                        <img src="assets/images/users/user-3.jpg" alt="" class="img-activity">                                                                                                            
                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted text-right font-10">30 minutes ago</div>
                                                <h5 class="mt-0">Task Overdue</h5>
                                                <p class="text-muted font-13">Lorem ipsum dolor sit amet.
                                                    <a href="#" class="text-info">[more info]</a>
                                                </p>
                                            </div>
                                        </div>
                                        <i class="mdi mdi-alert-outline text-danger"></i>    
                                        <div class="time-item ">
                                            <div class="item-info">
                                                <div class="text-muted text-right font-10">50 minutes ago</div>
                                                <h5 class="mt-0">Task finished</h5>
                                                <p class="text-muted font-13">There are many variations of passages of Lorem Ipsum available.
                                                    <a href="#" class="text-info">[more info]</a>
                                                </p>
                                            </div>
                                        </div>
                                        <i class="mdi mdi-comment-outline text-info"></i>
                                        <div class="time-item ">
                                            <div class="item-info">
                                                <div class="text-muted text-right font-10">1 Day ago</div>
                                                <h5 class="mt-0">New Comment</h5>
                                                <p class="text-muted font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    <a href="#" class="text-info">[more info]</a>
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <img src="assets/images/users/user-2.jpg" alt="" class="img-activity"> 
                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted text-right font-10">5 minutes ago</div>
                                                <h5 class="my-0">Task Overdue</h5>
                                                <p class="text-muted font-13">Lorem ipsum dolor sit amet.
                                                    <a href="#" class="text-info">[more info]</a>
                                                </p>
                                            </div>
                                        </div>                                                                                                        
                                    </div>
                                </div>                                       
                            </div>
                        </div>
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0 mb-3">Projects Workload</h5>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-0">
                                                <img src="assets/images/project-logo/project1.jpg" alt="" class="thumb-sm rounded-circle mr-1">
                                                <span><strong>Website & Blog</strong></span>
                                            </div> 
                                            <small class="float-right text-muted ml-3 font-14">502h</small>
                                            <div class="progress mt-2 mb-4  bg-white" style="height:6px;">
                                                <div class="progress-bar bg-pink" role="progressbar" style="width: 78%; border-radius:5px;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="mb-0">
                                                <img src="assets/images/project-logo/project2.jpg" alt="" class="thumb-sm rounded-circle mr-1">
                                                <span><strong>New Office Building</strong></span>
                                            </div> 
                                            <small class="float-right text-muted ml-3 font-14">320h</small>
                                            <div class="progress mt-2 mb-4  bg-white" style="height:6px;">
                                                <div class="progress-bar bg-purple" role="progressbar" style="width: 60%; border-radius:5px;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="mb-0">
                                                <img src="assets/images/project-logo/project3.jpg" alt="" class="thumb-sm rounded-circle mr-1">
                                                <span><strong>Product Devlopment</strong></span>
                                            </div>  
                                            <small class="float-right text-muted ml-3 font-14">251h</small>
                                            <div class="progress mt-2 mb-4  bg-white" style="height:6px;">
                                                <div class="progress-bar bg-pink" role="progressbar" style="width: 45%; border-radius:5px;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="mb-0">
                                                <img src="assets/images/project-logo/project4.jpg" alt="" class="thumb-sm rounded-circle mr-1">
                                                <span><strong>Market Research</strong></span>
                                            </div>  
                                            <small class="float-right text-muted ml-3 font-14">121h</small>
                                            <div class="progress mt-2  bg-white" style="height:6px;">
                                                <div class="progress-bar bg-pink" role="progressbar" style="width: 30%; border-radius:5px;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mt-0 mb-3">Active Tasks List</h5>
                                    <div class="todo-list">                                        
                                        <div class="todo-box">
                                            <i class="remove far fa-trash-alt"></i> 
                                            <div class="todo-task">
                                                <label class="ckbox">
                                                    <input type="checkbox"><span>Icon change in Redesign App</span>
                                                </label>
                                            </div> 
                                        </div>
                                        <div class="todo-box">
                                            <i class="remove far fa-trash-alt"></i> 
                                            <div class="todo-task">
                                                <label class="ckbox">
                                                    <input type="checkbox" checked=""><span>Add search button Market Research</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="todo-box">
                                            <i class="remove far fa-trash-alt"></i> 
                                            <div class="todo-task">
                                                <label class="ckbox">
                                                    <input type="checkbox"><span>Test new features in tablets</span>
                                                </label>
                                            </div> 
                                        </div>
                                        <div class="todo-box">
                                            <i class="remove far fa-trash-alt"></i> 
                                            <div class="todo-task">
                                                <label class="ckbox">
                                                    <input type="checkbox" checked=""><span>Send IOS App documents</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="todo-box">
                                            <i class="remove far fa-trash-alt"></i> 
                                            <div class="todo-task">
                                                <label class="ckbox">
                                                    <input type="checkbox"><span>Connect API to pages</span>
                                                </label>
                                            </div> 
                                        </div>
                                        <div class="todo-box">
                                            <i class="remove far fa-trash-alt"></i> 
                                            <div class="todo-task">
                                                <label class="ckbox">
                                                    <input type="checkbox"><span>Icon change in Redesign App</span>
                                                </label>
                                            </div>
                                        </div>                                                                                                      
                                    </div>

                                    <div class="input-group custom-input">   
                                        <input type="text" class="form-control todo-list-input"  placeholder="Add task">
                                        <span class="input-group-append"></span>
                                        <button class="btn btn-primary add-new-todo-btn">Add</button>                                          
                                    </div>                                       
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->
                    
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