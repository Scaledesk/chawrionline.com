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
              <th>Status</th>
                <th>Email</th>
                 <th>Name</th>
                    <th>Phone</th>
                    
                   
              </tr>
          </thead>


          <tbody>
              <?php
                                   /*print_r($buyer);
                                   die();*/
                                  foreach($buyer as $rows){
                   ?>
                  <tr>
                  <td>
                   <?php 
                        if($rows['chawri_users_status']==0){
                         ?><a onclick="return confirm('Are you sure you want to Activate Buyers?')" href="<?php echo base_url().'admin/activateBuyer/'.$rows['chawri_users_id']?>"> Activate</a>
                       <?php  }
                        else{
                          ?>
                          <a onclick="return confirm('Are you sure you want to Deactivate Buyers?')" href="<?php echo base_url().'admin/inActivateBuyer/'.$rows['chawri_users_id']?>">Deactivate</a> 
                       <?php  } ?>
                     </td>
                    <td>
                      <?php echo $rows['chawri_users_username']; ?>
                    </td>

                  
                    <td>
                      <?php echo $rows['chawri_users_fname'].' '.$rows['chawri_users_lname']; ?>
                    </td>
                    
                    <td>
                      <?php echo $rows['chawri_users_phone']; ?>
                    </td>
                    

                


                  </tr>
                                   <?php }?>

            
          </tbody>
      </table>
</div>