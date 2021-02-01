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
          <form method='post' action="<?php echo base_url();?>test/loadRecord" >
          <div class="input-group mb-3" style="width:300px; margin-top:-30px;margin-left:30px;">
          
                 <input class="form-control" type="text" name="search" id="search" placeholder="search here" >
                 <div class="input-group-append">
                     <button type="submit" onClick="detail();" class="input-group-text"><i class="fa fa-search" ></i></button>
                 </div>
            </div>
        </form>     
            <div id="show-list"></div>
    </div><!-- col-lg-8 -->
<!-- </div> -->

<div class="humberger__open"><i class="fa fa-bars"></i></div>

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
     
    
   <section class="categories"  style="margin-top:2px;border-top:1px solid;">
   <div style="padding:20px;">
                        <h3>Panorama Tours</h3>
        </div>
<div class="panaromaview products-list" style="padding:1%; margin:auto;">
<!-- <div class="product-card">
  <div id="panorama" class="product-img panorama-view"></div>
  <div class="product-info"><h5>360 Preview</h5><h6>click to activate</h6> </div>  
</div>
<div class="product-card">
  <div id="semenmount" class="product-img panorama-view"></div>
  <div class="product-info"><h5>180 Preview</h5><h6>click to activate</h6> </div>  
</div>
<div class="product-card">
  <div id="dallol"class="product-img panorama-view"></div>
  <div class="product-info"><h5>Panorama Preview</h5><h6>click to activate</h6> </div>  
</div>
<div class="product-card">
  <div class="product-img panorama-view"><img src="<?php  echo base_url();?>assets/product/featured/3.jpg" alt=""></div>
  <div class="product-info"><h5>Panorama Preview</h5><h6>click to activate</h6> </div>  
</div>
<div class="product-card">
  <div class="product-img panorama-view"><img src="<?php  echo base_url();?>assets/product/featured/2.jpg" alt=""></div>
  <div class="product-info"><h5>Panorama Preview</h5><h6>click to activate</h6> </div>  
</div>
<div class="product-card">
  <div class="product-img panorama-view"><img src="<?php  echo base_url();?>assets/product/featured/7.jpg" alt=""></div>
  <div class="product-info"><h5>Panorama Preview</h5><h6>click to activate</h6> </div>  
</div>
<div class="product-card">
  <div class="product-img panorama-view"><img src="<?php  echo base_url();?>assets/product/featured/5.jpg" alt=""></div>
  <div class="product-info"><h5>Panorama Preview</h5><h6>click to activate</h6> </div>  
</div>
<div class="product-card">
  <div class="product-img panorama-view"><img src="<?php  echo base_url();?>assets/product/featured/6.jpg" alt=""></div>
  <div class="product-info"><h5>Panorama Preview</h5><h6> click to activate</h6> </div>  
</div> -->

</div>
</section>              

<section class="categories"  style="margin-top:2px;border-top:1px solid;">
   <div class="">
                        <h3>VR Video Tours</h3>
        </div>
<div class="vrview products-list" style="padding:1%; margin:auto;">
 
<!-- <div class="product-card">
  <iframe class="product-img panorama-view" src="https://www.youtube.com/embed/TTkUxrOXByU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div class="product-info"><h5><b>VR</b> Entoto Park</h5></div>  
</div>
<div class="product-card">
  <iframe class="product-img panorama-view" src="https://www.youtube.com/embed/TTkUxrOXByU?start=222" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div class="product-info"></div>  
</div>
<div class="product-card">
  <iframe class="product-img panorama-view" src="https://www.youtube.com/embed/TTkUxrOXByU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div class="product-info"></div>  
</div>
<div class="product-card">
  <iframe class="product-img panorama-view" src="https://www.youtube.com/embed/TTkUxrOXByU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div class="product-info"></div>  
</div> -->
 

</div>
</section>         
<section class="panaromacont">

</section>  
<section class="vrcont">

</section>     


    <!-- Footer Section Begin -->
     <footer style="border-top:1px solid;">
        <div class="container">
        <div class="text-center col-lg-12 col-md-12" style="padding:2px; margin-bottom:-40px;">
                    <div class="footer__widget">
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="text-center">
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



// viewer = pannellum.viewer('panorama', ﻿{
//     "default": {
//         "author": "EVTour",
//         "firstScene": "equirectangular",
//         "autoLoad": true
//     },
    
//     "scenes": {
//         "equirectangular": {
//             "title": "Sample Road",
//             "panorama": "<?php echo base_url();?>assets/pano/pano.jpg"
//         }
//     }
// });
// viewer = pannellum.viewer('semenmount', ﻿{
//     "default": {
//         "author": "EVTour",
//         "firstScene": "equirectangular",
//         "autoLoad": true
//     },
//     "scenes": {
//     "equirectangular": {
//             "title": "Semen Mountain",
//             "panorama": "<?php echo base_url();?>assets/product/featured/panorama-sm.jpg"
//         }}
//     });    
// viewer = pannellum.viewer('dallol', ﻿{
//     "default": {
//         "author": "EVTour",
//         "firstScene": "equirectangular",
//         "autoLoad": true
//     },
//     "scenes": {
//     "equirectangular": {
//             "title": "Dallol Depression",
//             "panorama": "<?php echo base_url();?>assets/product/featured/panorama-dallol.jpg"
//         }}
//     });        
//---------------------------------    
$(document).ready(function () {
     //   top banner start
     $('.top-banner').addClass('owl-carousel');
          $(".owl-carousel").owlCarousel({ 
            items:1, 
         loop:true,
         autoplay:true,
         autoplayTimeout:4000,
         autoplayHoverPause:false
          });
//   top banner end
//-----------------------------

$.ajax({
		
        url : "<?php echo base_url('sitectrl/getPanaroma')?>",
        type: "GET",
        dataType: "JSON",
		 
        success: function(D)
        {  
            //$("#show-list").html(data);(())
			if (D){
                // $('.pc').addClass('categories__slider');
                D.forEach(element => {
                    // console.log(element.title);
                    $(".panaromaview").append(`<div class="product-card"> 
                    <div id="p_5${element.site_id}" class="product-img panorama-view"></div> 
                    </div>`); 
                    var panid=`p_5${element.site_id}`;
                    var imgurl=`<?php echo base_url();?>uploads/panaroma/${element.img}`;
                    // alert(panid);
                    viewer = pannellum.viewer(panid, ﻿{
    "default": {
        "author": "EVTour",
        "firstScene": "equirectangular",
        "autoLoad": true
    },
    
    "scenes": {
        "equirectangular": {
            "title": element.name,
            "panorama": imgurl
        }
    }
});
                    });






			}
			// console.log(data.type());
			else{ 
			}
            
        },//end ajax success====

        error: function (jqXHR, textStatus, errorThrown)
        {
             console.log('Error get carousel');
			//$("#show-list").html("");
        }
    });

     //----------------------------
     $.ajax({
		
        url : "<?php echo base_url('sitectrl/getVR')?>",
        type: "GET",
        dataType: "JSON",
		 
        success: function(D)
        {  
            //$("#show-list").html(data);(())
			if (D){
                // $('.pc').addClass('categories__slider');
                D.forEach(element => {
                    // console.log(element.title);
                    $(".vrview").append(`<div class="product-card">
                    <iframe class="product-img panorama-view"
 src="https://www.youtube.com/embed/${element.embed}" 
frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
allowfullscreen>
</iframe><div class="product-info"><b>${element.name}</b></div>  
</div>`); 
                    });


			}
			// console.log(data.type());
			else{ 
			}
            
        },//end ajax success====

        error: function (jqXHR, textStatus, errorThrown)
        {
             console.log('Error get VR');
			//$("#show-list").html("");
        }
    });
    // --------------------------

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
				$("#show-list").append('<a href="#" class="list-group-item list-group-item-action border-1">' + data[i]['name'] + '</a>');
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
    
    var stxt='';
	$('#show-list').on("click", "a", function () {
        stxt=$(this).text();
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
          
			}
            
        },
        error: function (jqXHR, textStatus, errorThrown)
        { 
        }
    });}
  }
  
</script>
 
</body>

</html> 