
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
<div style="overflow: auto; padding: 10px 15px 10px 15px; border:2px solid #bbbbbb; border-radius: 5px; margin: 20px;">

  <table id="example" class="display " cellspacing="0" width="100%">
          <thead>
              <tr>
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