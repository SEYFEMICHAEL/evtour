<?php
$this->load->view('core/header');
?>

  <body>
  <?php
$this->load->view('core/topcont');
?>
   <!-- Search form (start) -->
  


   <?php 
    $sno = $row+1;
    foreach($result as $data){
       
      $content = substr($data['detail'],0, 200)." ...";
      echo '<div class="card sbox effect1" style="width: 60%;">';
      echo '<img class="card-img-top" src="'.base_url('uploads/tour/').$data['img'].'" alt="'.$data['name'].' image">';
    //   echo "<td><a href='".$data['link']."' target='_blank'>".$data['name']."</a></td>style="width: 18rem;"";
    echo '<div class="card-body">
    <h5 class="card-title">'.$data['name'].'</h5>
    <p class="card-text">'.$content.'</p>';
      echo '<a href="#" class="btn btn-primary">more</a></div></div>';
      $sno++;

    }
    if(count($result) == 0){
      echo '<div class="card sbox effect1" style="width: 60%;">
      <div class="card-body"><h5 class="card-title">No record found!</h5><p class="card-text"></p>
      </div></div>'; 
    }
    ?>
    <!-- Paginate -->
   <div style='width:70%; padding:10px; margin: auto;'>
   <nav aria-label="Page navigation example">
   <?= $pagination; ?>
  </nav>
   
   </div>
    
<?php $this->load->view('core/pagefooter'); ?>