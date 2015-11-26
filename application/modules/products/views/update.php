	










                <div class="em-wrapper-main">
                    <div class="container container-main">
                        <div class="em-inner-main">
                            <div class="em-wrapper-area02"></div>
                            <div class="em-main-container em-col1-layout">
                                <div class="row">
                                    <div class="em-col-main col-sm-24">
                                        <div class="account-create">
                                            <div class="page-title">
                                                <h1>Add Products</h1>
                                            </div>
                                            <form  action="<?php echo base_url().'products/update/'.$data[0]['chawri_products_id'] ?>" method="post" id="form-validate" name"formproducts">
                                                <div class="fieldset">
                                                    <input type="hidden" name="success_url" value="">
                                                    <input type="hidden" name="error_url" value="">
                                                    <h2 class="legend">Product Information</h2>

                                                    <ul class="form-list">
                                                        <li class="fields">      
                                                            <div class="customer-name-middlename">     
                                                                <div class="field name-firstname">
                                                                    <label for="products_name" class="required"><em>*</em>Products Name</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname" value="<?php echo $data[0]['chawri_products_name']; ?>" required  name="products_name" title="Products Name" maxlength="255" class="input-text validate-email required-entry">
                                                                    </div>
                                                                </div>                                                         
                                                              </div>
                                                        </li>

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_brand_name" class="required"><em>*</em>Products Brand Name</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname" value="<?php echo $data[0]['chawri_products_brand_name']; ?>" required  name="products_brand_name" title="Products Brand Name" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                          
                                                           

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_manufacturer" class="required"><em>*</em>Manufacturer</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname" value="<?php echo $data[0]['chawri_products_manufacturer']; ?>" required  name="products_manufacturer" title="Manufacturer" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_substance" class="required"><em>*</em>Substance</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname" value="<?php echo $data[0]['chawri_products_substance']; ?>" required  name="products_substance" title="Substance" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                           

                                                    

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_thickness" class="required"><em>*</em>Bulk</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  value="<?php echo $data[0]['chawri_products_thickness']; ?>" required  name="products_thickness" title="Bulk" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_size" class="required"><em>*</em> Products Size</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname" value="<?php echo $data[0]['chawri_products_size']; ?>" required  name="products_size" title=" Products Size" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_grain" class="required"><em>*</em>Grain</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname" value="<?php echo $data[0]['chawri_products_grain']; ?>" required  name="products_grain" title="Grain" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                      

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_sheets_per_packet" class="required"><em>*</em>Sheets per Packet</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  value="<?php echo $data[0]['chawri_products_sheets_per_packet']; ?>"  name="products_sheets_per_packet" title="Sheets per Packet" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                              


                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="packets_per_bundle" class="required"><em>*</em>Products Per Bundle</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  value="<?php echo $data[0]['chawri_products_packets_per_bundle']; ?>"  name="packets_per_bundle" title="Products Per Bundle" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="packets_weight" class="required"><em>*</em>Pkt. Weight</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"    value="<?php echo $data[0]['chawri_products_weight']; ?>" name="products_weight" title="Pkt. Weight" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       
                                                
                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_quantity_on_offer" class="required"><em>*</em>Quantity on Offer (in pkts)</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  value="<?php echo $data[0]['chawri_products_quantity_on_offer']; ?>" required  name="products_quantity_on_offer" title="Quantity on Offer (in pkts)" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_packing" class="required"><em>*</em>Products Packing</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname" value="<?php echo $data[0]['chawri_products_packing']; ?>" required  name="products_packing" title="Products Packing" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                              

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_rate" class="required"><em>*</em>Products Rate</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname" value="<?php echo $data[0]['chawri_products_rate']; ?>" required  name="products_rate" title="Products Rate" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_cenvat_amount" class="required"><em>*</em> Products CENVAT Amount</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  value="<?php echo $data[0]['chawri_products_cenvat_amount']; ?>" required  name="products_cenvat_amount" title=" Products CENVAT Amount" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       

                                                      
                                                       
                                                        <?php echo form_hidden('todo', 'register'); ?>
                                                    </ul>
                                                    
                                                   
                                                    <div class="buttons-set">
                                                        
                                                        
                                                        <button type="submit" title="Submit" class="button"><span><span>Submit</span></span>
                                                        
                                                        </button>
                                                        <p class="required">* Required Fields</p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
	

