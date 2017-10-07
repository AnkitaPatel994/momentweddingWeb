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
   

    <link href="<?php echo base_url(); ?>html/css/style.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Inconsolata|Raleway" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
     
    <script src="<?php echo base_url(); ?>html/js/script.js"></script>
    <?php foreach($stylesheet as $fileName){ ?>
    <link href="<?php echo base_url(); ?>html/css/<?php echo $fileName; ?>" rel="stylesheet">
    <?php } ?>
    <script src="https://use.fontawesome.com/4c9f41dc36.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 <!--      <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> -->
 
 <style type="text/css">
     /*nav a.button-collapse{
        display: block;
     }*/
     nav{
      position: fixed;
      top: 0px;
      z-index: 2;
     }
     #sidenav-overlay{
      z-index: 1;
     }
     .top-header{
      margin-top: 100px;
    }
    .sidebar-area {
        background: #630b14;
        padding: 0px;
        position: fixed;
        margin-top: 60px;
        height: 100%;
        left: 0;
        color: #fff;
        width: 200px;
        z-index: 0;
    }
    .sidebar-area h5{
      padding: 15px;
    }
    .divider{
      margin: 15px;
    }
    .quick-links{

    }
    .quick-links a {
      color: #666;
      font-size: 16px;
      font-weight: 400;
      line-height: 2;
 /*     -webkit-transition:all 0.3s ease-in-out;
      -moz-transition:all 0.3s ease-in-out;
      -o-transition:all 0.3s ease-in-out;
      transition:all 0.3s ease-in-out;*/
    }
    .quick-links a:before {
      color: #666;
      content: "\f0da";
      font-family: FontAwesome;
      font-size: 16px;
      display: block;
      float: left;
      padding: 3px 15px;
      font-weight: 400;
      line-height: 2;
    }
    .quick-links a:hover {
      color: #000;
/*      -webkit-transition:all 0.3s ease-in-out;
      -moz-transition:all 0.3s ease-in-out;
      -o-transition:all 0.3s ease-in-out;
      transition:all 0.3s ease-in-out;*/
    }
    .quick-links a:hover li {
        background: rgba(0,0,0,0.2);
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        color: rgb(195, 195, 195);
    }
    .quick-links a li {
      -webkit-transition:all 0.3s ease-in-out;
      -moz-transition:all 0.3s ease-in-out;
      -o-transition:all 0.3s ease-in-out;
      transition:all 0.3s ease-in-out;
      padding: 5px 30px;
    }
    @media(max-width: 768px){
      .sidebar-area{
        display: none;
      }
      .col.m10{
        width: 100%;
      }
    }
 </style>  

</head>

<body class="grey lighten-2" >
    <?php $this->session->set_userdata("email","abc"); ?>
    <?php if($this->session->userdata("email")){ ?>
    <nav>
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
            <li><a href="<?php echo base_url(); ?>admin/Wedding">Wedding</a></li>
            <li><a href="<?php echo base_url(); ?>admin/profile">Profile</a></li>
            <!-- <li><div class="divider"></div></li> -->
            <li><a href="<?php echo base_url(); ?>admin/admin/EventsList">Event List</a></li>
            <!-- <li><a class="waves-effect" href="#!">Third Link With Waves</a></li> -->
        </ul>
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    </nav>
   <?php }  ?>