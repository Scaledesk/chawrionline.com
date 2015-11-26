<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/15/2015
 * Time: 7:08 PM
 */
?>

<div class="container">
<div class="row">
<div class="col-md-3">
<div class="list-group">
  <a href="#" class="list-group-item active">
    Cras justo odio
  </a>
  <a href="<?php echo base_url().'admin/showProducts';?>" class="list-group-item">Panding Products</a> 
  <a href="#" class="list-group-item">Morbi leo risus</a>
  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item">Vestibulum at eros</a>
</div>
</div>
<div class="col-md-9">

<div class="">
<h1>Admin Login</h1>
<?php

echo $this->session->userdata['user_data'][0]['users_name'];
?>

</div>
</div>
</div>
