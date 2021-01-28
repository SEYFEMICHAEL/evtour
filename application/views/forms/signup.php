<?php $this->load->view('core/header');?>
    <body>
    <?php $this->load->view('core/topcont');?>
    <div class="card"></div>
    <div class="card effect1 sbox" style="width: 18rem;margin-top:100px;">
  <div class="card-body">
    <h5 class="card-title">Registration form</h5>
    <form method ="post" action="<?php echo base_url(); ?>signup">
                    <div class="form-group">
                        <div><input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo set_value('name'); ?>"></div>
                        <span class="text-danger"><?php echo form_error("name"); ?> </span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email"  value="<?php echo set_value('email'); ?>">
                        <span class="text-danger"><?php echo form_error("email"); ?> </span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>">
                        <span class="text-danger"><?php echo form_error("username"); ?> </span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <span class="text-danger"><?php echo form_error("password"); ?> </span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password"  >
                        <span class="text-danger"><?php echo form_error("confirm_password"); ?> </span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-info" value="Register" name="insert" style="width: 100%;"/>
                    </div>
                </form>           
    </div>
</div> 
        <?php $this->load->view('core/pagefooter');?>

                