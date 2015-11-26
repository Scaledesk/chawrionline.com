
<?php
    $logout=$this->input->get('logout');
    if($logout){
        echo "<div style='text-align:center;' class=' container alert alert-success'>".'you are successfully logged out'."</div>";
    }else{
        getInformUser();
    }
    ?>

  
<div style="overflow: auto; padding: 10px 15px 10px 15px; border:2px solid #bbbbbb; border-radius: 5px; margin: 20px;">

  <table id="example" class="display " cellspacing="0" width="100%">
          <thead>
              <tr>
                <th>Email</th>
                 <th>Name</th>
                    <th>Phone</th>
                     <th>Landline</th>
                     <th>State</atth>
                     <th>Action</atth>
                   
              </tr>
          </thead>


          <tbody>
              <?php
                                  /* print_r($selles);
                                   die();*/
                                  foreach($selles as $rows){
                   ?>
                  <tr>
                   
                    <td>
                      <?php echo $rows['chawri_sellers_email']; ?>
                    </td>

                  
                    <td>
                      <?php echo $rows['chawri_sellers_company_name']; ?> 
                    </td>
                    
                    <td>
                      <?php echo $rows['chawri_sellers_phone']; ?> 
                    </td>
                    
                 <td>
                      <?php echo $rows['chawri_sellers_landline']; ?>
                    </td>
                <td>
                      <?php echo $rows['chawri_sellers_state']; ?>
                    </td>

                    <td>
                      <?php 
                        if($rows['chawri_sellers_status']==0){
                          echo "<a href='".base_url()."admin/activateSeller/".$rows['chawri_sellers_id']."'>Active</a>";
                        }
                        else{
                          echo "<a href='".base_url()."admin/inActivateSeller/".$rows['chawri_sellers_id']."'>InActive</a>"; 
                        }
                     ?>
                    </td>


                  </tr>
                                   <?php }?>

            
          </tbody>
      </table>
</div>