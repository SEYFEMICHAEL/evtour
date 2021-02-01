<?php $this->load->view('core/header');

$id='3$TY9C$5';$nm='3$TY9C$5';
if(!$this->session->userdata("logged_in")) redirect(base_url('login'));
else {$id=$this->session->userdata("id");
    $nm=''.$this->session->userdata("first_name").' '.$this->session->userdata("last_name");} ?>
    <body>
    <?php $this->load->view('core/topcont');?>
    <div class="card"></div>

    <div class="container">
        <div class="row">
        <div class="col-md-6 col-lg-6">
        <div class="card effect1 sbox" style="width: 18rem;margin-top:100px;">
  <div class="card-body">
    <h5 class="card-title">Booking form</h5>
    <form method ="post" action="<?php echo base_url(); ?>booking">
            
            <!-- <h4 style="text-align:center;"></h4> -->
            <input type="hidden" value="<?php echo $id; ?>" name="user_id"/>
            <input type="hidden" value="<?php echo $nm; ?>" name="fname"/>
                <div class="form-group">
                <label class="control-label ">Date:</label>
                    <!-- <div class="col-md-9"> -->
                        <input type="text" class="form-control date-picker" name="date"   value="<?php echo set_value('email'); ?>">
                        <span class="text-danger"><?php echo form_error("date"); ?> </span>
                    <!-- </div>  -->
                </div>
                
                <div class="form-group">
                <label class="control-label ">Attraction Place </label> 
                <div class="place"  ></div> 
        <div class="text-danger"><small><?php echo form_error("place"); ?> </small></div>
                </div>
                 
                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="Book Now!" name="insert" style="width: 100%;"/>
                </div>
            </form>            
    </div>
</div>



        </div>
        <div class="col-md-6 col-lg-6">
        <div class="card effect1 sbox" style="width: 100%;margin-top:100px;">
  <div class="card-body">
    <h5 class="card-title">Bookings</h5>
    <form method ="post" action="<?php echo base_url(); ?>viewbooking">
            
            <!-- <h4 style="text-align:center;"></h4> -->
            <input type="hidden" value="<?php echo $id; ?>" name="user_id"/>
            <input type="hidden" value="<?php echo $nm; ?>" name="fname"/>
            <?php
            if(isset($views)){
            foreach($views as $data){
                
                $msg='<div class="alert alert-warning" role="alert">Booking Code: pending..</div>';
                
                $exp_date = $data['date'];
                $todays_date = date("Y-m-d");
               $today = strtotime($todays_date);
               $expiration_date = strtotime($exp_date);
               $E=(int)$expiration_date;
               $T=(int)$today;
            //    echo ($E < $T)? 'Expired!' : 'Active!';
            //    print_r('ex'.$expiration_date.' today '.$today);
             if((int)$E < (int)$T) $msg='<div class="alert alert-danger" role="alert">Expired!</div>';
               else{
                if($data['code']!='')$msg='<div class="alert alert-primary" role="alert">Booking Code: '.$data['code'].'</div>';
               }

              echo '<div class="form-group effect1"><label class="control-label "><b>'.$data['place'].'</b> booked for:'.$data['date'].$msg.'<span><a href="'.base_url().'cancelbooking/'.$data['book_id'].'">Cancel</a></span></label></div>';
            }}
            ?>
            
            <div class="form-group">
            <a href="<?php echo base_url();?>viewbooking/<?php echo $this->session->userdata('id');?>" class="btn btn-info" >View My Booking</a>
            <label class="control-label ">:</label> 
                <!-- <?=var_dump($fname);?> -->
            </div>
            
                <?php if(isset($list)){
                    print_r($list);
                }?>
            <!-- <input type="submit" class="btn btn-info" value="View My Booking" name="insert" style="width: 100%;"/> -->
                </div>
            </form>            
    </div>
</div>
        </div>    
    </div>
    </div>
     
        <?php $this->load->view('core/pagefooter');?>
        

