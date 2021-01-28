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
 /* modal */
 /* Bordered form */
.mform {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
.minput {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
.mbutton {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
.mbutton:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}



/* Add padding to containers */
.mcontainer {
  padding: 16px;
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
        background-image:url('<?php  echo base_url();?>assets/qe-site/img/pbg.png');
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

<body >
<?php

if($this->session->flashdata()){ 
echo '
<div id="id03" style="position:absolute; z-index:12; padding:5%; margin-left:40%;" class="alert alert-success" role="alert">
'.$this->session->flashdata('reg').'<span onclick="document.getElementById(\'id03\').style.display=\'none\'"
class="close" title="Close Modal">&times;</span>
</div>
'; 
 }?>

<button style="width:100px;" onclick="topFunction()" id="myBtn" title="Go to top">Go<i class="fa fa-arrow-circle-up"></i></button>

 <!-- Humberger Begin -->
 <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
        <a href="<?php  echo base_url();?>" style="color:#000; font-size:32px;">
        <img style="width:100px;height:100px;" src="<?php  echo base_url();?>assets/img/logo.png" alt="logo"></a>
        </div>
        
        <div class="humberger__menu__widget">
            <div class="header__top__right__language"> 
                <div>Eng</div>
                                <span class="arrow_carrot-down"></span>
                                <ul> 
                                <li><a href="#">Eng</a></li>
                                <li><a href="#">Amh</a></li>
                                <li><a href="#">Oro</a></li>
                                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="<?php echo base_url();?>homepage">Home</a></li>
                <li><a href="#">Atractions</a>
                            <ul class="header__menu__dropdown">
                             <li><a href="#">Historic Attractions</a></li>
                             <li><a href="#">Natural Attractions</a></li>
                             <li><a href="#">National Parks</a></li>
                             <li><a href="#">Festival Attractions</a></li>
                             </ul></li> 
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul> 
             <li><a class="btn btn-danger" href="<?php  echo base_url();?>post-Ad">Book Now</a></li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->


    <div class="container" style="background-color:#fff;">
    <div class="row " style="position:fixed; z-index:10; background-color:rgba(255,255,255,.7);margin:auto;"> 
    <!-- <div class="" style="background-color:#fff;">  -->
    <div class="col-md-2">
           <a href="<?php  echo base_url();?>" style="color:#000; font-size:32px;">
            <img style="width:100px;height:100px; margin-left:-20px;" src="<?php  echo base_url();?>assets/img/logo.png" alt="logo">
            </a> 
    </div>

    <div class="col-md-10">
         <nav class="header__menu">
                <ul>
                    <li><a href="<?php  echo base_url();?>">Home</a></li>
                    <li><a href="#">Atractions</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="#">Historic Attractions</a></li>
                        <li><a href="#">Natural Attractions</a></li>
                        <li><a href="#">National Parks</a></li>
                        <li><a href="#">Festival Attractions</a></li>
                     </ul>
                    </li> 
                     <li><a href="#">Contact</a></li>
                     <li><a href="#">About</a></li>
                     <!-- onclick="document.getElementById('id01').style.display='block'" -->
         <?php if($this->session->userdata("logged_in"))
         {   echo '<li><a href="'.base_url().'book">Booking</a></li>
                  <li><a  href="'.base_url().'logout">Logout</a></li>
                  <li><a></a></li><li><a></a></li><li><a></a></li>';
            //  echo "<li><div class=\"pull-right\"><button  onclick=\"window.location.href = '".base_url()."logout'\" >Logout</button>|
            //  <button onclick=\"window.location.href = '".base_url()."booking'\">Booking</button></div></li>";
         }
         else{
             echo '<li><a href="'.base_url().'log">Login</a></li>
                   <li><a href="'.base_url().'reg">Signup</a></li>
                   <li><a></a></li><li><a></a></li><li><a></a></li>';
            // echo "<li><span class=\"pull-right\"><button  onclick=\"window.location.href = '".base_url()."log'\" >Login</button>|
            // <button onclick=\"window.location.href = '".base_url()."reg'\">Signup</button></span></li>";
         }

         ?>
        <!-- <button  onclick="window.location.href = '<?php echo base_url();?>log';"data-toggle="modal" data-target="#myModals" ><i class="fa fa-user"></i>Login</button>|
         <button onclick="window.location.href = '<?php echo base_url();?>reg';">Signup</button> -->
                 
        </ul>
          </nav>   
            
          <div class="input-group mb-3" style="width:300px; margin-top:-30px;margin-left:30px;">
                 <input class="form-control" type="text" name="search" id="search" placeholder="search here" >
                 <div class="input-group-append">
                     <button type="submit" onClick="detail();" class="input-group-text"><i class="fa fa-search" ></i></button>
                 </div>
            </div>     
            <div id="show-list"></div>
    </div><!-- col-lg-8 -->
<!-- </div> -->

<div class="humberger__open"><i class="fa fa-bars"></i></div>

</div>
</div>
  
<!--  -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel"> </h4>  
        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
      <div class="container">
  		<div class="row login-wrapper">
  			<div class="col-md-4 col-xs-6 col-md-offset-4 col-xs-offset-3">
  				<div class="panel panel-default">
  					<div class="panel-heading">
  						<strong>Login Form</strong>
  					</div>
  					<div class="panel-body">  
              <?php $error = $this->session->flashdata("error"); ?>
  						<div class="alert alert-<?php echo $error ? 'warning' : 'info' ?> alert-dismissible" role="alert">
  						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  						  <?php echo $error ? $error : 'Enter your username and password' ?>
  						</div>

  						<?php echo form_open(); ?>  
                <?php $error = form_error("username", "<p class='text-danger'>", '</p>'); ?>              
  							<div class="form-group <?php echo $error ? 'has-error' : '' ?>">
  								<label for="username">Username</label>
  								<div class="input-group">
  									<span class="input-group-addon">
  										<i class="glyphicon glyphicon-user"></i>
  									</span>
  									<input type="text" name="username" value="<?php echo set_value("username") ?>" id="username" class="form-control">
  								</div>  
                  <?php echo $error; ?>
  							</div>
                <?php $error = form_error("password", "<p class='text-danger'>", '</p>'); ?>
  							<div class="form-group <?php echo $error ? 'has-error' : '' ?>">
  								<label for="password">Password</label>
  								<div class="input-group">
  									<span class="input-group-addon">
  										<i class="glyphicon glyphicon-lock"></i>
  									</span>
  									<input type="password" name="password" id="password" class="form-control">
  								</div> 
                  <?php echo $error; ?>
  							</div>
  							<input type="submit" value="Login" class="btn btn-primary">
  						<?php echo form_close(); ?>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    

    <!-- banner start -->
    <section class="top-banner-section mt-0"> 
            <div class="top-banner">
                 <div class="item">
                 <img style="height:400px; width:100%; margin:auto;" src="<?php  echo base_url();?>assets/promo/banner/tour1.jpg" alt="banner">
                 </div>
                 <div class="item">
                 <img style="height:400px; width:100%; margin:auto;" src="<?php  echo base_url();?>assets/promo/banner/tour2.jpg" alt="banner">
                 </div>
                 <div class="item">
                 <img style="height:400px; width:100%; margin:auto;" src="<?php  echo base_url();?>assets/promo/banner/tour3.jpg" alt="banner">
                 </div>
                 <div class="item">
                 <img style="height:400px; width:100%; margin:auto;" src="<?php  echo base_url();?>assets/promo/banner/tour4.jpg" alt="banner">
                 </div>


            </div>
 
         
    </section>
    <!-- Top banner end -->

    <!-- top ads start-->
    <section class="top-ads-section mt-0" style=""> 
          
            <div class="top-banner-ads">
                 <div class="item">
                 <img src="<?php  echo base_url();?>assets/promo/banner/cb1.png" alt="ad">
                 </div>
                 <div class="item">
                 <img src="<?php  echo base_url();?>assets/promo/banner/cb2.png" alt="ad">
                 </div>
                 <div class="item">
                 <img src="<?php  echo base_url();?>assets/promo/banner/cb3.png" alt="ad">
                 </div>
                 <div class="item">
                 <img src="<?php  echo base_url();?>assets/promo/banner/cb4.png" alt="ad">
                 </div>
            </div> 

    </section>
    <!-- top ads end-->

    <!-- <section>
    <div id="panorama"></div>
    </section> -->


    <!-- Product Categories Section Begin -->
    <section class="categories"  style="margin-top:2px;background-image:url('<?php  echo base_url();?>assets/qe-site/img/pbg-default.png');">
        <div class="container">
        <div class="section-title">
                        <h2>Featured Tours</h2>
        </div>
            <div class="pc ">
                 
            </div>
 
        </div>
    </section>
   <!-- Product Categories Section End  -->
    
   <section class="categories"  style="margin-top:2px;background-image:url('<?php  echo base_url();?>assets/qe-site/img/pbg-default.png');">
   <div class="section-title">
                        <h2>Contact Us</h2>
        </div>
 
        
</section>              
   


 

    <!-- Footer Section Begin -->
     <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="<?php  echo base_url();?>">
                            <img src="<?php  echo base_url();?>assets/img/logo.png" alt=""></a>
                         </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li> 
                            <li><a href="#">Tourism Attractions</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li> 
                            <li><a href="#">Contact</a></li> 
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Social Links</h6>
                        
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                        <p> Addis Ababa, Ethiopia<br> 
                               info@evtour.com
                           </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src=" <?php echo base_url();?>assets/vendor/js/jquery-3.3.1.min.js"></script>
    <script src=" <?php echo base_url();?>assets/vendor/js/bootstrap.min.js"></script>
    <script src=" <?php echo base_url();?>assets/vendor/js/jquery.nice-select.min.js"></script>
    <script src=" <?php echo base_url();?>assets/vendor/js/jquery-ui.min.js"></script>
    <script src=" <?php echo base_url();?>assets/vendor/js/jquery.slicknav.js"></script>
    <script src=" <?php echo base_url();?>assets/vendor/js/mixitup.min.js"></script>
    <script src=" <?php echo base_url();?>assets/vendor/js/owl.carousel.min.js"></script>
    <script src=" <?php echo base_url();?>assets/vendor/js/main.js"></script>
    
    <script>
//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
    
$(document).ready(function () {
    $.ajax({
		
        url : "<?php echo base_url('Ad/premiumProduct')?>",
        type: "GET",
        dataType: "JSON",
		 
        success: function(D)
        {  
            //$("#show-list").html(data);(())
            let surl="<?php echo base_url('detail')?>";
			if (D){
                // $('.pc').addClass('categories__slider');
                D.forEach(element => {
                    console.log(element.id);
                    $(".pc").append(`<a href="${surl}/${element.id}"><div class="prd ml-2">
                        <div class="cate"><img class="img-responsive" src="<?php  echo base_url();?>assets/product/featured/${element.img1}" alt="Card image cap">
                            <h5 class="text-center pt-0"style="background-color:#fff;opacity:0.7;">${element.title}</h5>
                        </div>
                        <!-- h6 class="text-center pt-0" style="background-color:#fff;color:#f00;opacity:0.7;">${element.price} ብር</h6 -->
                    </div></a>`);
                    //$('.cata').ad=dClass('categories__item set-bg');
                    });
    
 $('.prd').css({"border-radius": "10px 10px 10px 10px","border": "1px solid #756d75","box-shadow": "-2px 9px 43px -31px rgba(0,0,0,1);"});
                $('.pc').addClass('owl-carousel');
                 $(".owl-carousel").owlCarousel({
                    loop:true,lazyLoad: true,
    margin:10,
    autoplay:true,
    // autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            // nav:true
        },
        420:{
            items:2,
            // nav:false
        },
        600:{
            items:3,
            // nav:false
        },
        1000:{
            items:4,
            // nav:true,
            // loop:false
        }}
                 });
                // $('.categories__slider').addClass('owl-carousel owl-loaded owl-drag');categories__item set-bg
                //$('.pc').owlCarousel();
                //console.log(data.length);

 
                                
				// $("#show-list").html('<p class="list-group-item border-1">No Record</p>');
			}
			// console.log(data.type());
			else{
                
		// 		for(let i=0;i<data.length;i++) {
		// 		$("#show-list").append('<a href="#" class="list-group-item list-group-item-action border-1">' + data[i]['title'] + '</a>');
       		 
        //    }
			}
            
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
             console.log('Error get data from ajax');
			//$("#show-list").html("");
        }
    });
//-----------------------------

$.ajax({
		
        url : "<?php echo base_url('Ad/premiumBusiness')?>",
        type: "GET",
        dataType: "JSON",
		 
        success: function(D)
        {  
            //$("#show-list").html(data);(())
			if (D){
                // $('.pc').addClass('categories__slider');
                D.forEach(element => {
                    console.log(element.title);
                    $(".bc").append(`<div class="ml-2">
                        <div class="cata"  style="text-align:center; background-image: url('<?php echo base_url(); ?>assets/img/${element.img1}'); background-size: contain;
background-repeat: no-repeat;height:200px;">
                             
                        </div>
                    </div>`); 
                    });
//   top banner start
        $('.top-banner').addClass('owl-carousel');
          $(".owl-carousel").owlCarousel({ 
            items:1, 
         loop:true,
         autoplay:true,
         autoplayTimeout:5000,
         autoplayHoverPause:true
          });
//   top banner end

//   top ad start
$('.top-banner-ads').addClass('owl-carousel');
          $(".owl-carousel").owlCarousel({ 
            items:4, 
         loop:true,
         margin:10,
         autoplay:true, 
         autoplayHoverPause:true
          });
          
//   top ad end

 


 


     //----------------------------
	 $("#search").keyup(function () {
		$("#show-list").html("");
		 console.log('search');
      let searchText = $(this).val();
      if (searchText != "") {
	 $.ajax({
		
        url : "<?php echo base_url('Search/action')?>",
        type: "POST",
        dataType: "JSON",
		data: {
            query: searchText,
          },
        success: function(data)
        {  console.log('search done');
            $("#show-list").html("");
            //$("#show-list").html(data);(())
			if (data==='x'){
				$("#show-list").html('<p class="list-group-item border-1">No Record</p>');
			}
			// console.log(data.type());
			else{
				for(let i=0;i<data.length;i++) {
				$("#show-list").append('<a href="#" class="list-group-item list-group-item-action border-1">' + data[i]['title'] + '</a>');
       		//  echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['title'] . '</a>';
           }
			}
            
        },
        error: function (jqXHR, textStatus, errorThrown)
        {   console.log('search error');
            //alert('Error get data from ajax');
			$("#show-list").html("");
        }
    });
	}});
	$('#show-list').on("click", "a", function () {
      $("#search").val($(this).text());
      $("#show-list").html("");
    });
	 
	});

    function detail(){
		$("#show-list").html(""); 
		let searchText = $('#search').val(); 
    	if (searchText != "") {
		$.ajax({
		
          url : "<?php echo base_url('Search/detail')?>",
          type: "POST",
          dataType: "JSON",
		   data: {
              query: searchText,
            },
          success: function(data)
        {  
            //$("#show-list").html(data);(())
			console.log('detail on');
			if (data==='x'){
				$("#detail").html('<p class="list-group-item border-1">No Record</p>');
			}
			
			else{
         //$(".lcard").html('');
        // $(".pageto").html("");
        for(let i=0;i<data['data'].length;i++) {
          console.log('lcard');
		$(".l_card").append(`
        <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php  echo base_url();?>assets/img/huawei p9.jpg">
                            <h5><a href="#">Huawei P9</a></h5>
                        </div>
                    </div>`);
        
       		//  echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['title'] . '</a>';
           }
          
		//    for(let i=0;i<data['page'].length;i++) {
		// 	$(".pageto").append(data['page'][i]);//1 2 3 4
		//    }
		  
			}
            
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            // alert('Error get data from ajax');
            // $(".lcard").html('');
            // $(".pageto").html("");
        }
    });}
  }
  
</script>
 
</body>

</html>