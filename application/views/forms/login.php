<?php $this->load->view('core/header');?>
    <body>
    <?php $this->load->view('core/topcont');?>
    <div class="card"></div>
    <div class="card effect1 sbox" style="width: 18rem;margin-top:100px;">
  <div class="card-body">
    <h5 class="card-title">Login form</h5>
    <form method ="post" action="<?php echo base_url(); ?>login">
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email"  value="<?php echo set_value('email'); ?>">
                        <span class="text-danger"><?php echo form_error("email"); ?> </span>
                    </div>
                    
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <span class="text-danger"><?php echo form_error("password"); ?> </span>
                    </div>
                     
                    <div class="form-group">
                        <input type="submit" class="btn btn-info" value="Login" name="insert" style="width: 100%;"/>
                    </div>
</form>                
    </div>
</div> 
        <?php $this->load->view('core/pagefooter');?>
