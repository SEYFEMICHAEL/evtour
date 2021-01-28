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