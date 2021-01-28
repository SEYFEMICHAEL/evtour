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
    
//---------------------------------    
$(document).ready(function () {
    $( ".date-picker" ).datepicker({
	inline: true,
    yearRange: '2021:2021',
    minDate: '0',
    dateFormat: 'yy/mm/dd'
     

});
//-----------------------------
//   carousel start
        $('.top-banner').addClass('owl-carousel');
          $(".owl-carousel").owlCarousel({ 
            items:1, 
         loop:true,
         autoplay:true,
         autoplayTimeout:5000,
         autoplayHoverPause:true
          });
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
				$("#show-list").append('<a href="#" class="list-group-item list-group-item-action border-1">' + data[i]['name'] + '</a>');

				// $("#show-list").append('<a href="<?php //echo base_url();?>search/details/'+data[i]['tour_id']+'" class="list-group-item list-group-item-action border-1">' + data[i]['name'] + '</a>');
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
  
</script>
 
</body>
