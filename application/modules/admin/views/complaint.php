

<?php
    $logout=$this->input->get('logout');
    if($logout){
        echo "<div style='text-align:center;' class=' container alert alert-success'>".'you are successfully logged out'."</div>";
    }else{
        getInformUser();
    }
    ?>

  <script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>
  <div class="rows"> <h2>Buyer Details</h2> </div>

<div style="overflow: auto; padding: 10px 15px 10px 15px; border:2px solid #bbbbbb; border-radius: 5px; margin: 20px;">

  <table id="example" class="display " cellspacing="0" width="100%">
          <thead>
              <tr>
              <th>Action</th>
               <th>Buyer Name</th>
               <th>Phone No</th>
               <th>Email</th>

              <th>Raise Issue</th>

                    
                   
              </tr>
          </thead>


          <tbody>
             
                  <?php 
                                            foreach ($complaint as $row) {
                                                ?>
                                                <tr>

                                             <td>  <a  href="<?php  echo base_url().'admin/orderDetails/'.$row['chawri_complaint_order_id'];?>">Order Details</a> </td> 
                                               <td><?php echo $row['chawri_complaint_buyer_name'];?></td>
                                              
                                             
                                               <td><?php echo $row['chawri_complaint_phone_no'];?></td>
                                                <td><?php echo $row['chawri_complaint_email'];?></td>
                                               <td><?php echo $row['chawri_complaint_message'];?></td>
                                               </tr>

                                                <?php
                                            }
                                             ?>
            
          </tbody>
      </table>
</div>