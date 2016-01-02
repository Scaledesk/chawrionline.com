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
    <li class="active"><a data-toggle="tab" href="#home"> On Going Order</a></li>
    <li><a data-toggle="tab" href="#menu1">New Order</a></li>
    <li><a data-toggle="tab" href="#menu2">Cancelled</a></li>
     <li><a data-toggle="tab" href="#menu3">Completed</a></li> 
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
                    <th>Total Cost</th>
                    <th> Category</th>
                     <th> Name</th>
                        <th>Brand Name</th>
                        <th>Manufacturer</th>
                        <th>Reel No</th>
                        <th>GSM</th>
                        <th> Bulk (mic)</th>
                        <th>Size( cms)</th>
                        
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
                                       /* echo "<pre/>"; print_r($products);
                                         die();*/
                                      foreach($products as $rows){
                       ?>
                      <tr>  
                        <td>
                        <?php if($rows['chawri_products_orders_status']=='extension_not') { ?>Order Processing<?php } else { echo $rows['chawri_products_orders_status']; } ?>
                        </td>
                        <td>
                         <?php if($rows['chawri_products_orders_status']=='Dispatched') { }else { ?>   <a onclick="return confirm('Are you sure you want to Dispatch the  Order?')" href="<?php echo base_url().'sellers/dispatched/'.$rows['chawri_products_orders_id'].'/'.$rows['chawri_sellers_id'].'/'.$rows['chawri_products_orders_buyer_id'];?>">Dispatch</a> <?php } ?>
                        </td>
                        <td>
                       <?php echo number_format($rows['chawri_products_orders_total_cost'],2);  ?>
                        </td>
                         <td>
                        <?php echo $rows['chawri_categories_name']; ?>
                        </td>
                        
                        <td>
                          <?php echo $rows['chawri_products_orders_products_name']; ?>
                        </td>
                        <td>
                          <?php echo $rows['chawri_products_orders_products_brand_name']; ?>
                        </td>
                        <td>
                          <?php echo $rows['chawri_products_orders_products_manufacturer']; ?>
                        </td>
                         <td>
                          <?php echo $rows['chawri_products_orders_reel_no']; ?>
                        </td>
                        <td>
                          <?php echo $rows['chawri_products_orders_products_substance']; ?>
                        </td>
                        <td>
                          <?php echo $rows['chawri_products_orders_products_thickness']; ?>
                        </td>
                        <td>
                          <?php echo $rows['chawri_products_orders_products_size_w']; ?>
                       X
                          <?php echo $rows['chawri_products_orders_products_size_h']; ?>
                        </td>


                        

                        <td>
                          <?php echo $rows['chawri_products_orders_products_grain']; ?>
                        </td>
                        <td>
                          <?php echo $rows['chawri_products_orders_products_sheets_per_packet']; ?>
                        </td>

                                           
                        <td>
                          <?php echo $rows['chawri_products_orders_products_weight']; ?>
                        </td>

                        <td>
                          <?php echo $rows['chawri_products_orders_products_packets_per_bundle']; ?>
                        </td>
                        <td>
                          <?php echo $rows['chawri_products_orders_products_quantity_on_offer']; ?>
                        </td>
                        <td>
                          <?php echo $rows['chawri_products_orders_products_packing']; ?>
                        </td>
                        <td>
                          <?php echo $rows['chawri_products_orders_products_rate']; ?>
                        </td>
                        <td>
                          <?php echo $rows['chawri_products_orders_products_cenvat_amount']; ?>
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
                        
                        <th>Extension</th>
                        <th>Total Cost</th>
                       <th> Category</th>
                       <th> Name</th>
                        <th>Brand Name</th>
                        <th>Manufacturer</th>
                        <th>Reel No</th>
                        <th>GSM</th>
                        <th> Bulk (mic)</th>
                        <th>Size( cms)</th>
                                                
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
                                        /*echo "<pre/>"; print_r($conform);
                                         die(); */
                                      foreach($conform as $rows1){
                       ?>
                      <tr>
                      <td>
                         <a onclick="return confirm('Don't  you want to add Extension ?')" href="<?php  echo base_url().'sellers/extensionNot/'.$rows1['chawri_products_orders_id'];?>">No</a>/ <div class="row" >
                         
                          <!-- Trigger the modal with a button -->
                       <!--    <a  data-toggle="modal" data-target="#myModal">Extension</a> -->
                          <button type="button" style="background-color: #53287A;"  data-toggle="modal" data-target="#myModal">Yes</button>

                          <!-- Modal -->
                          <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                              
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Extenstion Products</h4>
                                </div>
                                <div class="modal-body">

                                  <form role="form" action="<?php echo base_url().'products/extension/'.$rows1['chawri_products_orders_id'];?>" method="post">
                                <div class="form-group">
                                  <label for="date">Extension Date</label>
                                  <input type="date" class="form-control" id="usrname"  name="date" placeholder="MM-DD-YY">
                                </div>
                                <div class="form-group">
                                  <label for="extension">Extension Reasons</label>
                                  <textarea class="form-control" name="extension"></textarea>
                                 
                                </div>
                                </div>
                                <div class="modal-footer">

                                <button type="submit" style="background-color: #53287A;" class="btn btn-default btn-success btn-block">Submit</button>
                              </form>
                        
                                 <!-- button type="submit" class="btn btn-default" >Submit</button> -->
                                 <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                                </div>
                               
                              </div>
                              
                            </div>
                          </div>
                          
                        </div>

                       </td>
                        <td>
                       <?php echo number_format($rows1['chawri_products_orders_total_cost'],2);  ?>
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
                          <?php echo $rows1['chawri_products_orders_reel_no']; ?>
                        </td>
                        
                        <td>
                          <?php echo $rows1['chawri_products_orders_products_substance']; ?>
                        </td>
                        <td>
                          <?php echo $rows1['chawri_products_orders_products_thickness']; ?>
                        </td>
                        <td>
                          <?php echo $rows1['chawri_products_orders_products_size_w']; ?>
                       X
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
                        <th>Reel No</th>
                        <th>GSM</th>
                        <th> Bulk(mic)</th>
                        <th>Size(width  cms)</th>
                       
                        
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
                                        /*echo "<pre/>"; print_r($cancel);
                                         die();*/
                                      foreach($cancel as $rows2){
                       ?>
                      <tr>
                      
                       <td>
                       <?php echo number_format($rows2['chawri_products_orders_total_cost'],2);  ?>
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
                          <?php echo $rows2['chawri_products_orders_reel_no']; ?>
                        </td>
                        <td>
                          <?php echo $rows2['chawri_products_orders_products_substance']; ?>
                        </td>
                        <td>
                          <?php echo $rows2['chawri_products_orders_products_thickness']; ?>
                        </td>
                        <td>
                          <?php echo $rows2['chawri_products_orders_products_size_w']; ?>
                       X
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
                        <th>Reel No</th>
                        <th>GSM</th>
                        <th> Bulk (mic) </th>
                        <th>Size(cms)</th>
                        
                        <th>Grain</th>
                        <th> Sheets Per Packet</th>
                        <th> Pkt. Weight</th>
                        <th>Pkt. Per Bdl.</th>
                        <th>Qty. on Offer</th>
                        <th>Packing</th>
                        <th>Rate</th>
                        <th>Cenvate Amount</th>

                  </tr>
              </thead>


              <tbody>
                  <?php
                                        
                                      foreach($completed as $rows3){
                       ?>
                      <tr>
                        <td>
                      <?php echo number_format($rows3['chawri_products_orders_total_cost'],2);  ?>
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
                          <?php echo $rows3['chawri_products_orders_reel_no']; ?>
                        </td>
                        <td>
                          <?php echo $rows3['chawri_products_orders_products_substance']; ?>
                        </td>
                        <td>
                          <?php echo $rows3['chawri_products_orders_products_thickness']; ?>
                        </td>
                        <td>
                          <?php echo $rows3['chawri_products_orders_products_size_w']; ?>
                        X
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
<!-- ............................................ -->
    </div>
    <!-- <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div> -->
  </div>
</div>

<!-- ........tab......... -->
   