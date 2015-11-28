<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/15/2015
 * Time: 7:08 PM
 */
?>
<?php
    $logout=$this->input->get('logout');
    if($logout){
        echo "<div style='text-align:center;' class=' container alert alert-success'>".'you are successfully logged out'."</div>";
    }else{
        getInformUser();
    }
    ?>
<!-- 
<div class="container">
<div class="row">
<div class="col-md-3">
<div class="list-group">
  <a href="#" class="list-group-item active">
    Cras justo odio
  </a>
  <a href="<?php echo asset_url().'admin/showProducts';?>" class="list-group-item">Panding Products</a> 
  <a href="#" class="list-group-item">Morbi leo risus</a>
  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item">Vestibulum at eros</a>
</div>
</div>
<div class="col-md-9"> -->
<!-- ................data table .......................................... -->
<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>
<div style="overflow: auto; padding: 10px 15px 10px 15px; border:2px solid #bbbbbb; border-radius: 5px; margin: 20px;">

  <table id="example" class="display " cellspacing="0" width="100%">
          <thead>
              <tr>
                   <th> Product Name</th>
                    <th>Buyer Name </th>
                    <th>Seller Name</th>
                    <th>order Date</th>
                    
                    <th>Status</th>
                     <th>commission</th>
                    <th>Action</th>
                    
              </tr>
          </thead>
        

          <tbody>
              <?php           
                                  foreach($panding_products as $rows){

                   ?>
                  <tr>
                   
                    
                    <td>
                      <?php echo $rows['chawri_products_name']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_users_fname'].' '.$rows['chawri_users_lname']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_sellers_company_name']; ?>
                    </td>
                   
                   <td>
                      <?php echo $rows['chawri_products_orders_date']; ?>
                    </td>
                    <td>
                      <?php echo $rows['chawri_products_orders_status']; ?>
                    </td>
                      <form action="<?php echo base_url().'admin/approval/'.$rows['chawri_products_orders_id']; ?>" method="post">
                     <td>
                     <input type="text" name="commission" npalseholder="Amount">
                    </td>
                 
                 <td>
                      <input type="submit" name="submit" value="Approve"> 
                    </td>
                        </form>
                  </tr>
                                   <?php }?>

            
          </tbody>
      </table>
</div>

<!-- ..................end data table................................................................... -->
<!-- 
<div class="">


</div>
</div>
</div>
</div> -->
