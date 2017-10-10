<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>Wedding - <?php echo $pageTitle; ?></title>
    <!-- CSS-->

    <!-- Compiled and minified CSS -->
    <link href="http://fonts.googleapis.com/css?family=Inconsolata|Raleway" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Compiled and minified JavaScript -->
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css">


     
     <!-- Data Table -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>

     <!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"> -->

     <!-- <script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script> -->
     <!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">

    <?php foreach($stylesheet as $fileName){ ?>
    <link href="<?php echo base_url(); ?>html/css/<?php echo $fileName; ?>" rel="stylesheet">
    <?php } ?>
    <script src="https://use.fontawesome.com/4c9f41dc36.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 <!--      <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> -->
</head>
<body>
    <?php 

      /*$this->session->unset_userdata("email");
      $this->session->sess_destroy();
      $this->session->set_userdata("email","abc"); */

    ?>
    <?php if($this->session->userdata("email")) { ?>
    <nav>
      
      <div class="nav-wrapper">
        <a href="#" class="brand-logo center"><h5>RSVP INFO</h5></a>
      
      <!-- <div class="right log-out">
        <a class="tooltipped" data-position="left" data-delay="50" data-tooltip="Log Out" href="<?php // echo base_url(); ?>Admin/logout/"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i></a>
      </div> -->
        <ul id="slide-out" class="side-nav">
            <!-- <li><div class="user-view">
              <div class="background">
                <img src="images/office.jpg">
              </div>
              <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
              <a href="#!name"><span class="white-text name">John Doe</span></a>
              <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
            </div>
            </li> -->
            <li><h5 class="black-text"><center>Menu</center></h5></li>
            <li><a href="<?php echo base_url(); ?>admin/wedding">Wedding</a></li>
            <li><a href="<?php echo base_url(); ?>admin/profile">Profile</a></li>
            <!-- <li><div class="divider"></div></li> -->
            <li><a href="<?php echo base_url(); ?>admin/admin/eventsList">Event List</a></li>
            <li><a href="<?php echo base_url(); ?>admin/guest_list">Guest List</a></li>
        </ul>
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars" aria-hidden="true"></i></a>
    </nav>
      
   <?php }  ?>
