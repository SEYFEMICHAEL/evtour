<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dubizzle</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <!-- <link href="<?php echo base_url().'/assets/vendor/font-awesome/css/font-awesome.min.css';?>" rel="stylesheet" type="text/css"> -->
     
    <!--000Plugin CSS -->
    <link href="<?php echo base_url();?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/vendor/creative.min.css" rel="stylesheet">
     <link href="<?php echo base_url();?>assets/vendor/animate.css" rel="stylesheet">
 <style>
 .contain{
   width:100%;
 }
 #show-list{
  position: absolute;
    z-index: 1;
 }
 .navbar{
  
  width:100%;
  margin:auto;
 }
 #mainNav{
  /* background-color:orange; */
  background-color:#d1bb7b;
  color:red;
 }
 #searchp{
   margin-top:20px;
 }
 .nav-item{
   /* background-color:#ccd; */
   padding-top:0px;
 }
 a .nav-link{
   color:#000;
 }
	 .detail{
		 margin-top:0px;
	 }
   ul{
    style:none;
  }
   ul #postAds{
    style:none;
    cursor:  pointer;
  }
  .faq li{
    /* font-size: 14px;
    width: 90%; */
    display: block;
    padding: 10px;
    /* margin: 10px auto; */


  }

  li.q{
    /* margin-left: 10px; */
    font-family: Roboto;
    font-size: 1.2em;
    cursor:  pointer;
    background: #ccc;
    /* text-shadow: 1px 1px #056; */
  }
  li.q::before{
    content:attr(smtm-ico);
    margin-right: 10px;
  }

  li.a{
    padding:10px auto;
    font-size: 1em;
    background: #fff;
  }
  .card{
    margin:2px auto;
    border:2px #d1bb7b solid;
  }
 </style>
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
		<a class="navbar-brand js-scroll-trigger" href="#page-top"><strong style="color:#000;">dubizzle</strong></a>
		 
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" >
          <ul class="navbar-nav ml-auto" >
           
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" id="home" href="#page-top">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"><p style=" ">Contact</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" onClick="faq();" href="#about_us"><p style=" ">About</p></a>
			</li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" onClick="" href="#postAds"><p style=" ">Post an Ad</p></a>
            </li>
          </ul>
        </div>
      </div>
	</nav>
	
     <!-- <section id="mainNav"> -->
	 <div class="container contain" id="searchp">
    <div class="row bg-light">
      <div class="col-md-12 mx-auto bg-light rounded p-4">
        <h4 class="text-center font-weight-bold">&nbsp;</h4>
        <hr class="my-1">
        <h5 class="text-center text-secondary">Write any product name in the search box</h5>
        <div class="col-md-6" style="margin:auto;"><!--p-3 form start -->
          <div class="input-group">
            <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 border-info" placeholder="Search..." autocomplete="off" required>
            <div class="input-group-append">
              <input type="button" name="submit" value="Search" onClick="detail();" class="sbtn btn btn-info btn-lg rounded-0">
			  <i class="glyphicon glyphicon-plus"></i>
            </div>
          </div>
		  </div><!-- form end -->
      </div>
      <div class="col-md-6" style="position: relative;  margin: auto; margin-top: -25px;">
        <div class="list-group" id="show-list">
          <!-- Here autocomplete list will be display -->
        </div>
      </div>
    </div>
  </div> 
	 <!-- </section>  -->
<div class="container contain"id="detail">
<div class="row">
	  <div class="col-md-3" style="background-color:#eee"><h6>Filter Results</h6>
    <hr>
    <h5>Categories</h5>
    <h6 class="mb-3">Classifieds</h6>
    <h6 class="mb-3">Classified Ad</h6>
    <hr>
    <h6 class="mb-3">Ad_1</h6>
    <h6 class="mb-3">Ad_2</h6>
    <h6 class="mb-3">Ad_3</h6>
    <h6 class="mb-3">Ad_4</h6>
    <h6 class="mb-3">Ad_5</h6>
    <h6 class="mb-3">Ad_6</h6>
    <hr>
    <h5>Locations</h5>
    <h6 class="mb-3">Ethiopia</h6>
    <p class="mb-3">Addis Ababa</p>
    <p class="mb-3">Addis Ababa</p>
    <p class="mb-3">Addis Ababa</p>
    </div>
	  <div class="col-md-7">
      <div class="lcard"></div>
      <div class="pageto"></div>
    </div>
	</div>
</div>	



    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Top Products & Services</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-user text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Electronics </h3>
              <p class="text-muted mb-0" align="left">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, quasi quod. Dolor dolorem aut pariatur laboriosam a ullam, recusandae est delectus, laborum at accusamus iure magnam ex sunt obcaecati harum.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-list text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Classifieds</h3>
              <p class="text-muted mb-0" align="left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, quasi quod. Dolor dolorem aut pariatur laboriosam a ullam, recusandae est delectus, laborum at accusamus iure magnam ex sunt obcaecati harum.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-file text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Beauty Pro</h3>
              <p class="text-muted mb-0" align="left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, quasi quod. Dolor dolorem aut pariatur laboriosam a ullam, recusandae est delectus, laborum at accusamus iure magnam ex sunt obcaecati harum.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-calendar text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">House for sell</h3>
              <p class="text-muted mb-0" align="left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, quasi quod. Dolor dolorem aut pariatur laboriosam a ullam, recusandae est delectus, laborum at accusamus iure magnam ex sunt obcaecati harum.</p>
            </div>
          </div>
        </div>
      </div>
    </section>


 
 <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>123-456-6789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">feedback@dubizzle.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>


    <section id="about_us">

      <div class="container">
        <div class="jumbotron faq ">
             <h3 class="text-center">FAQs</h3>
             <hr>
             <div class="smtmFAQ"></div>
              <ul>
                <li class="q" smtm-ico="+">How to Post Ad on the trending lists?</li>
                <li class="a">first you need to register as a seller then after going through the process of creating an Ad you will net to pay based on the packages you like.<br/>then...<br/>after that..</li>
                <li class="q" smtm-ico="+">What are the requirement for Posting Ads?</li>
                <li class="a">Phone number and password to register on dubizzle<br/>and also detail info for your Ad to be posted.</li>
                <li class="q" smtm-ico="+">Where can we pay to upgrade our Ad on Dubizzle?</li>
                <li class="a">CBE<br/>M-Birr</li>
              </ul>
        </div>
</section>
<section id="postAds">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Select Category to post your Ad!</h2>
            <hr class="my-4">
            <p>
            <a href="#">Home, Garden & Kids</a></p>
            <p><a href="#">Vehicles</a></p>
            <p><a href="#">Property Sell & Rentals</a></p>
            <p><a href="#">Fashion & Beauty</a></p>
            <p><a href="#">Leisure, Sports & Travel</a></p>  
          </div>
        </div>
        <div class="row">
          
          <div class="col-lg-4 mr-auto text-center" style="margin:auto;"> 
          <h2 class="section-heading">Other Categories</h2>
            <p>
              <a href="mailto:your-email@your-domain.com">Other Categories</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <!-- <script src="<?php echo base_url();?>assets/vendor/smtm.js"></script> -->
	
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url();?>assets/vendor/creative.min.js"></script>
<footer style="text-align:center; margin-bottom:0px; padding-bottom:10px ;"class="bg-dark text-white">

  <hr> <p>{elapsed_time}<br/>Copyright 2018 &copy Addis Ababa, Ethiopia.</p>
</footer>
<script>
$(document).ready(function () {
  faq();
    // Send Search Text to the server
  //  $('#home').click(function(){
  //   $('#search').show();
  //   $('#detail').show();
  //  });
	 //Ajax Load data from ajax
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
        { $("#show-list").html("");
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
        {
            //alert('Error get data from ajax');
			$("#show-list").html("");
        }
    });
	}});
	$('#show-list').on("click", "a", function () {
      $("#search").val($(this).text());
      $("#show-list").html("");
    });
	// $('.sbn').click(function(){
	// 	alert('111');
	// });
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
        $(".lcard").html('');
        $(".pageto").html("");
        for(let i=0;i<data['data'].length;i++) {
          console.log('lcard');
		$(".lcard").append('<div class="card"><a href="#" class="list-group-item list-group-item-action border-1">' +
	    '<strong>'+ data['data'][i]['title'] +'</strong><br>'+
		''+data['data'][i]['descriptions']+'<br>'+
		''+data['data'][i]['state']+
	   '</a></div>');
       		//  echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['title'] . '</a>';
           }
          
		   for(let i=0;i<data['page'].length;i++) {
			$(".pageto").append(data['page'][i]);//1 2 3 4
		   }
		  
			}
            
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            //alert('Error get data from ajax');
            $(".lcard").html('');
            $(".pageto").html("");
        }
    });}
  }
  


    function paginate(page){
console.log('page '+page);
$("#show-list").html(""); 
		let searchText = $('#search').val(); 
		
    	if (searchText != "") {
		$.ajax({
		
          url : "<?php echo base_url('Search/paginate')?>",
          type: "POST",
          dataType: "JSON",
		   data: {
        query_w: searchText,
        query_p: page,
            },
          success: function(data)
        {
            //$("#show-list").html(data);(())
			console.log('paginate on');
			if (data==='x'){
				$("#detail").html('<p class="list-group-item border-1">No Record</p>');
			}
			
			else{
        $(".lcard").html('');
        $(".pageto").html("");
        for(let i=0;i<data['data'].length;i++) {
		$(".lcard").append('<a href="#" class="list-group-item list-group-item-action border-1">' +
	    '<strong>'+ data['data'][i]['title'] +'</strong><br>'+
		''+data['data'][i]['descriptions']+'<br>'+
		''+data['data'][i]['state']+
	   '</a>');
       		//  echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['title'] . '</a>';
           }
             
		   for(let i=0;i<data['page'].length;i++) {
			$(".pageto").append(data['page'][i]);//1 2 3 4
		   }
		  
			}
            
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            //alert('Error get data from ajax');
            $(".lcard").html('');
        $(".pageto").html("");
        }
    });}
  }
  
  function faq(){
    $('.a').hide();
      $('.q').on('click',function(){
          var answerLi=$(this).next();
    //    $(this).next().show();slideToggle()
    if ($(this).attr("smtm-ico") === "+"){
        $(this).attr("smtm-ico","-");
        answerLi.slideDown();

    }
    else{
           $(this).attr("smtm-ico","+");
            answerLi.slideUp();
    }

      });
    }
  function postAd(){
   $('#search').hide();
   $('#detail').hide();
  }
  </script>
  
  </body>

</html>
 
 