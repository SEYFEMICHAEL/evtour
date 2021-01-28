<?php 
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
                                        
                    <!--sidebar nav start-->
                    <ul class="side-navigation">
                        <li>
                            <h3 class="navigation-title">Navigation</h3>
                        </li>
                        <li class="">
                            <a href="<?php echo base_url('admin');?>"><i class="mdi mdi-gauge"></i> <span>Admin Dashboard</span></a>
                        </li>
                        
                        <li class="">
                            <a href="<?php echo base_url('admin/usermgmt');?>"><i class="mdi mdi-account-multiple-outline"></i> <span>User Managment</span></a>
                        </li>
                        
                        <li class="active">
                            <a href="<?php echo base_url('admin/bookmgmt');?>"><i class="mdi mdi-book-open-variant"></i> <span>Bookings</span></a>
                        </li>
                        
                        <li class="">
                            <a href="<?php echo base_url('admin/tourmgmt');?>"><i class="mdi mdi-google-earth"></i> <span>Tours</span></a>
                        </li>



                         
                    </ul><!--sidebar nav end-->
                </div>
            </div><!-- sidebar left end-->

            <!-- body content start-->
            <div class="body-content">
                <!-- header section start-->
                <div class="header-section">
                    <!--logo and logo icon start-->
                    <div class="logo">
                        <a href="<?php echo base_url('admin');?>">
                            <!-- <span class="logo-img">
                                <img src="<?php echo base_url();?>assets/img/logo.png" alt="" height="26">
                            </span> -->
                            <!--<i class="fa fa-maxcdn"></i>-->
                            <span class="brand-name">EVTour</span>
                        </a>
                    </div>

                    <!--toggle button start-->
                    <a class="toggle-btn"><i class="ti ti-menu"></i></a>
                    <!--toggle button end-->

                    <!--mega menu start-->
                    <div id="navbar-collapse-1" class="navbar-collapse collapse mega-menu">
                        <ul class="nav navbar-nav">                           
                            <!-- Classic dropdown -->
                             
                             <!-- Classic list -->
                             
                        </ul>
                    </div>
                    <!--mega menu end-->

                    <div class="notification-wrap">
                        
                    </div>
                </div>
                <!-- header section end-->

                <div class="container-fluid">
                    <div class="page-head">
                        <h4 class="mt-2 mb-2">Dashboard</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="row"> 
                                 
                                <div class="col-lg-3 col-sm-3">
                                    <div class="widget-box bg-white m-b-30">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-4">
                                                <div class="text-center"><i class="ti-plus"></i></div>
                                            </div>
                                            <div class="col-4">
                                                <div class="btn btn-primary" onClick="add_person()">Add</div>
                                            </div> 
                                        </div>
                                   </div> 
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="widget-box bg-white m-b-30">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-4">
                                                <div class="text-center"><i class="ti-plus"></i></div>
                                            </div>
                                            <div class="col-4">
                                                <div class="btn btn-primary" onClick="reload_table()">Refreash</div>
                                            </div> 
                                        </div>
                                   </div> 
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->
                    <div class="row"> 
                        <div class="col-lg-12 col-sm-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h5 class="header-title pb-3">Booking Table</h5>           
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table id="table" class="table table-hover m-b-0">
                                                    <thead>
                                                        <tr> 
                                                            <th>Full Name</th>
                                                            <th>Booked Place</th>
                                                            <th>Booked Date</th>
                                                            <th>Booked For</th>
                                                            <th>Booking Code</th> 
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                         
                                                    </tbody>
                                                    <tfoot>
                                                         
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>              
                                </div>
                            </div>
                        </div>

                        
                    </div>                            
                    
                </div><!--end container-->

                <!--footer section start-->
                <footer class="footer">
                    2021 &copy; EVTour.
                </footer>
                <!--footer section end-->


                
            </div>
            <!--end body content-->
        </section>

        <!-- jQuery -->
        <script src="<?php echo base_url();?>assets/dashboard/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/js/popper.min.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/js/jquery-migrate.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/js/modernizr.min.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/js/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/js/slidebars.min.js"></script>
        <!-- <script src=" <?php echo base_url();?>assets/vendor/jquery-ui/external/jquery/jquery.js"></script> -->
        <script src=" <?php echo base_url();?>assets/vendor/jquery-ui/jquery-ui.min.js"></script>

        <!--plugins js-->
        <script src="<?php echo base_url();?>assets/dashboard/plugins/counter/jquery.counterup.min.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/plugins/sparkline-chart/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/pages/jquery.sparkline.init.js"></script>

        <script src="<?php echo base_url();?>assets/dashboard/plugins/chart-js/Chart.bundle.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/plugins/morris-chart/raphael-min.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/plugins/morris-chart/morris.js"></script>
        <script src="<?php echo base_url();?>assets/dashboard/pages/dashboard-init.js"></script>


        <!--app js-->
        <script src="<?php echo base_url();?>assets/dashboard/js/jquery.app.js"></script>
        <script>
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                delay: 100,
                time: 1200
                });
            });
        </script>
        <!-- data table js -->
        <script src="<?php echo base_url('assets/vendor/datatables/js/jquery.dataTables.min.js')?>"></script>
<!-- <script src="<?php echo base_url('assets/vendor/datatables/js/dataTables.bootstrap.min.js')?>"></script> -->
        <script type="text/javascript">

var save_method; //for save method string
var table;
var base_url = '<?php echo base_url();?>';

$(document).ready(function() {
   // alert("hello");
    //datatables
    table = $('#table').DataTable({ 
       
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('bookingctrl/ajax_list');?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
            { 
                "targets": [ -1 ], //last column
                "orderable": false, //set not orderable
            },
            { 
                "targets": [ -2 ], //2 last column (photo)
                "orderable": false, //set not orderable
            },
        ],

    });

    //datepicker
    $( ".date-picker" ).datepicker({
	inline: true,
    yearRange: '2021:2021',
    minDate: '0',
    // dateFormat: 'dd/mm/yy',
     

});

    //set input/textarea/select event when change value, remove class error and remove text help block 
    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });

});



function add_person()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add Booking'); // Set Title to Bootstrap modal title

    $('#photo-preview').hide(); // hide photo preview modal

    $('#label-photo').text('Upload Photo'); // label photo upload
}
function abook(id)
{
    $.ajax({
        url : "<?php echo site_url('bookingctrl/activateBook')?>/" + id,
        type: "POST",
        dataType: "JSON",
        success: function(data)
        {
            // $('#actbook').hide();
            // $('#actbook').hide();
                reload_table();
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}
function edit_person(id)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string


    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('bookingctrl/ajax_edit')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
 
            $('[name="book_id"]').val(data.book_id);
            $('[name="fname"]').val(data.fname);
            $('[name="place"]').val(data.place).change();
            $('[name="date"]').val(data.date);
            $('[name="timestamp"]').val(data.timestamp)
            // $('[name="code"]').val(data.code); 

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Booking'); // Set title to Bootstrap modal title

            $('#photo-preview').show(); // show photo preview modal

             
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}

function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('bookingctrl/ajax_add')?>";
    } else {
        url = "<?php echo site_url('bookingctrl/ajax_update')?>";
    }

    // ajax adding data to database

    var formData = new FormData($('#form')[0]);
    $.ajax({
        url : url,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++) 
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        }
    });
}

function delete_person(id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('bookingctrl/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
    
}

</script>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Booking Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="book_id"/> 
                    <div class="form-body">
                    <div class="form-group">
                            <label class="control-label col-md-3">Full Name</label>
                            <div class="col-md-9">
                                <input name="fname" placeholder="" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Place</label>
                            <div class="col-md-9">
                                <select name="place" class="form-control"> 
                                    <option value="Lalibela">Lalibela</option>
                                    <option value="Erta Ale">Erta Ale</option>
                                    <option value="Sof Omar">Sof Omar</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label class="control-label col-md-3">Date</label>
                            <div class="col-md-9">
                            <input name="date" placeholder="" class="form-control date-picker" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                      
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

    </body>
</html>
