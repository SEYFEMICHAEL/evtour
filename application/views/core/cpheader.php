<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$id='3$TY9C$5';$nm='3$TY9C$5';
if(!$this->session->userdata("logged_in") && !$this->session->userdata("role")=='Admin') redirect(base_url('login'));
else {$id=$this->session->userdata("id");
    $nm=''.$this->session->userdata("first_name").' '.$this->session->userdata("last_name");} 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mannat Themes">
        <meta name="keyword" content="">

        <title>EVTour Admin</title>

        <!-- Theme icon -->
        <!-- <link rel="shortcut icon" href="<?php echo base_url();?>assets/dashboard/images/favicon.ico"> -->

        <link href="<?php echo base_url();?>assets/dashboard/plugins/morris-chart/morris.css" rel="stylesheet">
        <!-- Theme Css -->
        <link href="<?php echo base_url();?>assets/dashboard/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/dashboard/css/slidebars.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/dashboard/css/icons.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/dashboard/css/menu.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/dashboard/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url('assets/vendor/datatables/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/jquery-ui/jquery-ui.min.css" type="text/css">

    </head>

    <body class="sticky-header">
        <section>
            <!-- sidebar left start-->
            <div class="sidebar-left">
                <div class="sidebar-left-info">

                    <div class="user-box">
                        <div class="d-flex justify-content-center">
                            <img src="<?php  echo base_url();?>assets/img/logo.png" alt="" class="img-fluid rounded-circle"> 
                        </div>
                        <div class="text-center text-white mt-2">
                            <p class="text-muted m-0">Admin</p>
                            <a href="<?php echo base_url('logout');?>">Logout</a>
                        </div>
                    </div>   