<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");
?>
<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EVTour</title>

    <!-- Google Font -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet"> -->
    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fa/css/fontawesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fontawesome/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/style.css" type="text/css">
     <!-- pano  -->
    <link type="text/css" rel="Stylesheet" href="<?php echo base_url();?>assets/pano/pannellum.css"/> 
    <!-- pano -->
    <script src=" <?php echo base_url();?>assets/pano/libpannellum.js"></script>
    <script src=" <?php echo base_url();?>assets/pano/pannellum.js"></script> 
    <style>

body {
  --stripe: #cfd8dc;
  --bg: #e1e1e1;

  background: linear-gradient(135deg, var(--bg) 25%, transparent 25%) -50px 0,
    linear-gradient(225deg, var(--bg) 25%, transparent 25%) -50px 0,
    linear-gradient(315deg, var(--bg) 25%, transparent 25%),
    linear-gradient(45deg, var(--bg) 25%, transparent 25%);
  background-size: 100px 100px;
  background-color: var(--stripe);
}



/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
.log-in-modal{
    padding:2%;
    margin:auto;
}
 /* modal end */
 .text-danger p{
                color: red;
                margin-top: 0;
            }

    .panorama-view {
        width: 300px;
        height: 200px;
    }  
    .sbox {
  width:80%;
  min-height:300px;
  background:#FFF;
  /* margin-left:40px;margin-left:40px;
  margin-left:40px;margin-bottom:10px; */
  margin:20px auto;
}
.effect1{
  -webkit-box-shadow: 0 10px 6px -6px #777;
     -moz-box-shadow: 0 10px 6px -6px #777;
          box-shadow: 0 10px 6px -6px #777;
}

    #myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: red; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}



    .products-list{
        display:flex;
        flex-wrap:wrap;
    }
    .products-card{
        border
        padding:2%;
        /* flex-grow:1;
        flex-basis:16%; */
        flex: 1 16%;
        

        display: flex;
    }
    .product-img iframe{
        max-width: 100%;
    }
    .product-img img{
        max-width: 100%;
    }
    .product-info{
        /* background-image:url('<?php  echo base_url();?>assets/qe-site/img/pbg.png'); */
        padding:2px;
        margin-top:auto;
        text-align:center;
    }

    @media (max-width:920px){
        .product-card{
            flex:1 21%;
            padding:2%;
        }
    }
    @media (min-width:920px){
        .product-card{
            padding:2px;
        }
    }

    .topbar{
        position:relative;
        /* top:0; */
        z-index:10;
    }
    .top-search-bar{
        position:absolute;
        /* top:0; */
        z-index:10;
    }
    </style>
</head>