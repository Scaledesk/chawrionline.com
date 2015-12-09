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
    $('.display').DataTable();
} );
  </script>


  
  <div class="container">
  <h2>Manage Order</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Pending</a></li>
    <li><a data-toggle="tab" href="#menu1">Approved</a></li>
    <li><a data-toggle="tab" href="#menu2">Cancelled</a></li>
    <li><a data-toggle="tab" href="#menu3">Cancelled By Buyer</a></li>
    <li><a data-toggle="tab" href="#menu4">Completed</a></li>
    <!-- <li><a data-toggle="tab" href="#menu3">Menu 3</a></li> -->
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
<!-- ..................table............ -->  

    <div style="overflow: auto; padding: 10px 15px 10px 15px; border:2px solid #bbbbbb; border-radius: 5px; margin: 20px;">

      <table id="example" class="display "  cellspacing="0" width="100%">
              <thead>
                  <tr>
                   <th>Status</th>
                    
                    <th>Action</th>
                   <th> Product Name</th>
                    <th>Buyer Name </th>
                    <th>Seller Name</th>
                    <th>order Date</th>
                    <th>Bank Details</th>
                   


                  </tr>
              </thead>

            
              <tbody>
                  <?php
                                      
                                       foreach($panding_products as $rows){
                       ?>
                      <tr>
                        <td>
                      <?php echo $rows['chawri_products_orders_status']; ?>
                    </td>
                    <td>
                         <a onclick="return confirm('Are you sure you want to Approve Products?')" href="<?php  echo base_url().'admin/approval/'.$rows['chawri_products_orders_id'];?>">Approve</a>/ <a onclick="return confirm('Are you sure you want to Decline Products?')" href="<?php  echo base_url().'admin/decline/'.$rows['chawri_products_orders_id'];?>">Decline</a>  
                  
                      
                    </td>
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
                    <?php if ($rows['chawri_products_orders_receipt_details']){?> <a  href="<?php  echo base_url().'uploads/'.$rows['chawri_products_orders_receipt_details'];?>" download ><img alt="Not Upload" name="receipt" id="receipt" style="height:50px; width:100px" src="<?php echo base_url().'uploads/'.$rows['chawri_products_orders_receipt_details']; ?>"> </a>
                      <?php }else{?><img alt="Receipt Not Upload" name="receipt" id="receipt" style="height:50px; width:100px" src=""> <?php } ?>
                     </td>
                    
                        
                       
                      </tr>
                                       <?php }?> 

                
              </tbody>
          </table>
    </div>
<!-- ..................table.end........... -->    
    </div>

    <div id="menu1" class="tab-pane fade">
     <!-- ..................table............ -->  

    <div style="overflow: auto; padding: 10px 15px 10px 15px; border:2px solid #bbbbbb; border-radius: 5px; margin: 20px;">

      <table id="example" class="display "  cellspacing="0" width="100%">
              <thead>
                  <tr>
                  <th>Total Cost</th>
                  <th> Category</th>
                     <th> Name</th>
                        <th>Brand Name</th>
                        <th>Manufacturer</th>
                        <th>GSM</th>
                        <th> Bulk (mic)</th>
                        <th>Size(width  csm)</th>
                        <th>Size(height csm)</th>
                        
                        <th>Grain</th>
                        <th> Sheets Per Packet</th>
                        <th> Pkt. Weight</th>
                        <th>Pkt. Per Bdl.</th>
                        <th>Qty. on Offer</th>
                        <th>Packing</th>
                        <th>Rate</th>
                        <th>Cenvat Amount</th>
                        
                  </tr>
              </thead>

            
              <tbody>
                  <?php
                                       
                                      foreach($approve as $rows1){
                       ?>
                      <tr>
                      <td>
                        <?php echo $rows1['chawri_products_orders_total_cost']; ?>
                        </td>
                       
                          <td>
                        <?php echo $rows1['chawri_categories_name']; ?>
                      </td>
                        <td>
                          <?php echo $rows1['chawri_products_orders_products_name']; ?>
                        </td>
                        <td>
                          <?php echo $rows1['chawri_products_orders_products_brand_name']; ?>
                        </td>
                        <td>
                          <?php echo $rows1['chawri_products_orders_products_manufacturer']; ?>
                        </td>
                        <td>
                          <?php echo $rows1['chawri_products_orders_products_substance']; ?>
                        </td>
                        <td>
                          <?php echo $rows1['chawri_products_orders_products_thickness']; ?>
                        </td>
                        <td>
                          <?php echo $rows1['chawri_products_orders_products_size_w']; ?>
                        </td>

                        <td>
                          <?php echo $rows1['chawri_products_orders_products_size_h']; ?>
                        </td>

                        <td>
                          <?php echo $rows1['chawri_products_orders_products_grain']; ?>
                        </td>
                        <td>
                          <?php echo $rows1['chawri_products_orders_products_sheets_per_packet']; ?>
                        </td>

                                           
                        <td>
                          <?php echo $rows1['chawri_products_orders_products_weight']; ?>
                        </td>

                        <td>
                          <?php echo $rows1['chawri_products_orders_products_packets_per_bundle']; ?>
                        </td>
                        <td>
                          <?php echo $rows1['chawri_products_orders_products_quantity_on_offer']; ?>
                        </td>
                        <td>
                          <?php echo $rows1['chawri_products_orders_products_packing']; ?>
                        </td>
                        <td>
                          <?php echo $rows1['chawri_products_orders_products_rate']; ?>
                        </td>
                        <td>
                          <?php echo $rows1['chawri_products_orders_products_cenvat_amount']; ?>
                        </td>
                         
                      
                      </tr>
                                       <?php }?> 

                
              </tbody>
          </table>
    </div>
<!-- ..................table.end........... -->    
      </div>

    <div id="menu2" class="tab-pane fade">
      <!-- ..................table............ -->  

    <div style="overflow: auto; padding: 10px 15px 10px 15px; border:2px solid #bbbbbb; border-radius: 5px; margin: 20px;">

      <table id="example" class="display "  cellspacing="0" width="100%">
              <thead>
                  <tr><th>Total Cost</th>
                  <th> Category</th>
                     <th> Name</th>
                        <th>Brand Name</th>
                        <th>Manufacturer</th>
                        <th>GSM</th>
                        <th> Bulk(mic)</th>
                       <th>Size(width  csm)</th>
                        <th>Size(height csm)</th>
                        
                        <th>Grain</th>
                        <th> Sheets Per Pkt</th>
                        <th> Pkt. Wt</th>
                        <th>Pkt. Per Bdl.</th>
                        <th>Qty. on Offer</th>
                        <th>Packing</th>
                        <th>Rate</th>
                        <th>Cenvat Amount</th>
                       
                        
                  </tr>
              </thead>

            
              <tbody>
                  <?php
                                      
                                      foreach($cancel as $rows2){
                       ?>
                      <tr>
                       <td>
                        <?php echo $rows2['chawri_products_orders_total_cost']; ?>
                        </td>
                        <td>
                      <?php echo $rows2['chawri_categories_name']; ?>
                       </td>
                        <td>
                          <?php echo $rows2['chawri_products_orders_products_name']; ?>
                        </td>
                        <td>
                          <?php echo $rows2['chawri_products_orders_products_brand_name']; ?>
                        </td>
                        <td>
                          <?php echo $rows2['chawri_products_orders_products_manufacturer']; ?>
                        </td>
                        <td>
                          <?php echo $rows2['chawri_products_orders_products_substance']; ?>
                        </td>
                        <td>
                          <?php echo $rows2['chawri_products_orders_products_thickness']; ?>
                        </td>
                       <td>
                          <?php echo $rows2['chawri_products_orders_products_size_w']; ?>
                        </td>

                        <td>
                          <?php echo $rows2['chawri_products_orders_products_size_h']; ?>
                        </td>

                        

                        <td>
                          <?php echo $rows2['chawri_products_orders_products_grain']; ?>
                        </td>
                        <td>
                          <?php echo $rows2['chawri_products_orders_products_sheets_per_packet']; ?>
                        </td>

                                           
                        <td>
                          <?php echo $rows2['chawri_products_orders_products_weight']; ?>
                        </td>

                        <td>
                          <?php echo $rows2['chawri_products_orders_products_packets_per_bundle']; ?>
                        </td>
                        <td>
                          <?php echo $rows2['chawri_products_orders_products_quantity_on_offer']; ?>
                        </td>
                        <td>
                          <?php echo $rows2['chawri_products_orders_products_packing']; ?>
                        </td>
                        <td>
                          <?php echo $rows2['chawri_products_orders_products_rate']; ?>
                        </td>
                        <td>
                          <?php echo $rows2['chawri_products_orders_products_cenvat_amount']; ?>
                        </td>
                        
                        

                      </tr>
                                       <?php }?> 

                
              </tbody>
          </table>
    </div>
<!-- ..................table.end........... -->    
    </div>
    <div id="menu3" class="tab-pane fade">
      <!-- ..................table............ -->  

    <div style="overflow: auto; padding: 10px 15px 10px 15px; border:2px solid #bbbbbb; border-radius: 5px; margin: 20px;">

      <table id="example" class="display "  cellspacing="0" width="100%">
              <thead>
                  <tr><th>Total Cost</th>
                  <th> Category</th>
                     <th> Name</th>
                        <th>Brand Name</th>
                        <th>Manufacturer</th>
                        <th>GSM</th>
                        <th> Bulk(mic)</th>
                       <th>Size(width  csm)</th>
                        <th>Size(height csm)</th>
                        
                        <th>Grain</th>
                        <th> Sheets Per Pkt</th>
                        <th> Pkt. Wt</th>
                        <th>Pkt. Per Bdl.</th>
                        <th>Qty. on Offer</th>
                        <th>Packing</th>
                        <th>Rate</th>
                        <th>Cenvat Amount</th>
                       
                        
                  </tr>
              </thead>

            
              <tbody>
                  <?php
                                      
                                      foreach($cancel_buyer as $rows3){
                       ?>
                      <tr>
                       <td>
                        <?php echo $rows3['chawri_products_orders_total_cost']; ?>
                        </td>
                        <td>
                      <?php echo $rows3['chawri_categories_name']; ?>
                       </td>
                        <td>
                          <?php echo $rows3['chawri_products_orders_products_name']; ?>
                        </td>
                        <td>
                          <?php echo $rows3['chawri_products_orders_products_brand_name']; ?>
                        </td>
                        <td>
                          <?php echo $rows3['chawri_products_orders_products_manufacturer']; ?>
                        </td>
                        <td>
                          <?php echo $rows3['chawri_products_orders_products_substance']; ?>
                        </td>
                        <td>
                          <?php echo $rows3['chawri_products_orders_products_thickness']; ?>
                        </td>
                        <td>
                          <?php echo $rows3['chawri_products_orders_products_size_w']; ?>
                        </td>

                        <td>
                          <?php echo $rows3['chawri_products_orders_products_size_h']; ?>
                        </td>

                        

                        <td>
                          <?php echo $rows3['chawri_products_orders_products_grain']; ?>
                        </td>
                        <td>
                          <?php echo $rows3['chawri_products_orders_products_sheets_per_packet']; ?>
                        </td>

                                           
                        <td>
                          <?php echo $rows3['chawri_products_orders_products_weight']; ?>
                        </td>

                        <td>
                          <?php echo $rows3['chawri_products_orders_products_packets_per_bundle']; ?>
                        </td>
                        <td>
                          <?php echo $rows3['chawri_products_orders_products_quantity_on_offer']; ?>
                        </td>
                        <td>
                          <?php echo $rows3['chawri_products_orders_products_packing']; ?>
                        </td>
                        <td>
                          <?php echo $rows3['chawri_products_orders_products_rate']; ?>
                        </td>
                        <td>
                          <?php echo $rows3['chawri_products_orders_products_cenvat_amount']; ?>
                        </td>
                        
                        

                      </tr>
                                       <?php }?> 

                
              </tbody>
          </table>
    </div>
<!-- ..................table.end........... -->    
    </div>
     <div id="menu4" class="tab-pane fade">
      <!-- ..................table............ -->  

    <div style="overflow: auto; padding: 10px 15px 10px 15px; border:2px solid #bbbbbb; border-radius: 5px; margin: 20px;">

      <table id="example" class="display "  cellspacing="0" width="100%">
              <thead>
                  <tr><th>Total Cost</th>
                  <th> Category</th>
                     <th> Name</th>
                        <th>Brand Name</th>
                        <th>Manufacturer</th>
                        <th>GSM</th>
                        <th> Bulk(mic)</th>
                        <th>Size(width  csm)</th>
                        <th>Size(height csm)</th>
                        
                        <th>Grain</th>
                        <th> Sheets Per Pkt</th>
                        <th> Pkt. Wt</th>
                        <th>Pkt. Per Bdl.</th>
                        <th>Qty. on Offer</th>
                        <th>Packing</th>
                        <th>Rate</th>
                        <th>Cenvat Amount</th>
                       
                        
                  </tr>
              </thead>

            
              <tbody>
                  <?php
                                      
                                      foreach($complete as $rows4){
                       ?>
                      <tr>
                       <td>
                        <?php echo $rows4['chawri_products_orders_total_cost']; ?>
                        </td>
                        <td>
                      <?php echo $rows4['chawri_categories_name']; ?>
                       </td>
                        <td>
                          <?php echo $rows4['chawri_products_orders_products_name']; ?>
                        </td>
                        <td>
                          <?php echo $rows4['chawri_products_orders_products_brand_name']; ?>
                        </td>
                        <td>
                          <?php echo $rows4['chawri_products_orders_products_manufacturer']; ?>
                        </td>
                        <td>
                          <?php echo $rows4['chawri_products_orders_products_substance']; ?>
                        </td>
                        <td>
                          <?php echo $rows4['chawri_products_orders_products_thickness']; ?>
                        </td>
                       <td>
                          <?php echo $rows4['chawri_products_orders_products_size_w']; ?>
                        </td>

                        <td>
                          <?php echo $rows4['chawri_products_orders_products_size_h']; ?>
                        </td>
                        

                        <td>
                          <?php echo $rows4['chawri_products_orders_products_grain']; ?>
                        </td>
                        <td>
                          <?php echo $rows4['chawri_products_orders_products_sheets_per_packet']; ?>
                        </td>

                                           
                        <td>
                          <?php echo $rows4['chawri_products_orders_products_weight']; ?>
                        </td>

                        <td>
                          <?php echo $rows4['chawri_products_orders_products_packets_per_bundle']; ?>
                        </td>
                        <td>
                          <?php echo $rows4['chawri_products_orders_products_quantity_on_offer']; ?>
                        </td>
                        <td>
                          <?php echo $rows4['chawri_products_orders_products_packing']; ?>
                        </td>
                        <td>
                          <?php echo $rows4['chawri_products_orders_products_rate']; ?>
                        </td>
                        <td>
                          <?php echo $rows4['chawri_products_orders_products_cenvat_amount']; ?>
                        </td>
                        
                        

                      </tr>
                                       <?php }?> 

                
              </tbody>
          </table>
    </div>
<!-- ..................table.end........... -->    
    </div>
  </div>
</div>

<!-- ........tab......... -->
   