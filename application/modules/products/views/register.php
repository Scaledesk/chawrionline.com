	<?php
    $logout=$this->input->get('logout');
    if($logout){
        echo "<div style='text-align:center;' class=' container alert alert-success'>".'you are successfully logged out'."</div>";
    }else{
        getInformUser();
    }
    ?>
<!-- 
		<div class="padding-15">

			<div class="login-box">


				<form action="<?php echo base_url().'products/singleProducts';?>" method="post" class="sky-form boxed" novalidate="novalidate" name"formproducts">
					 <!-- <header> <a href="<?php echo base_url().'products/showProducts' ?>">Show Products</a> </header> --
					<header>Seller Add Product </header>
					<fieldset>					
						<label class="input" >
							<input type="text" placeholder="Products Name" name="products_name" required>
							<b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
						</label>

						<label class="input"> 

							<input type="text" placeholder="Products Brand Name" required name="products_brand_name">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						<label class="input">

							<input type="text" placeholder="Manufacturer" required name="products_manufacturer">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
                              
						<label class="input">

							<input type="text" placeholder="Substance" required name="products_substance">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						<label class="">

							<input type="radio" name="sheet"  id="chkNo" checked   onclick="ShowHideDiv()" > Reel
							<input type="radio" name="sheet" id="chkYes" onclick="ShowHideDiv()" > Sheet
							
						</label>
                        
 
						

						<label class="input"> 

							<input type="text" placeholder="Bulk " required name="products_thickness">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

                       <label class="input">

							<input type="text" placeholder="Products Size" required name="products_size">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						<label class="input">

							<input type="text" placeholder=" Grain" required name="products_grain">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>


                      <div id="dvPassport" style="display: none">
						<label class="input">

							<input type="text" placeholder="Sheets per Packet" name="products_sheets_per_packet">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
             
						<label class="input">

							<input type="text" placeholder="Products Per Bundle" name="packets_per_bundle">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						<label class="input">

							<input type="text" placeholder="Pkt. Weight " name="packets_weight">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

                         
                       </div> 


						<label class="input">

							<input type="text" placeholder="Quantity on Offer (in pkts)" required name="products_quantity_on_offer">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
          				<label class="input">

							<input type="text" placeholder="Products Packing" required name="products_packing">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>

						<label class="input">

							<input type="text" placeholder="Products Rate" required name="products_rate">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>


						<label class="input">
 
							<input type="text" placeholder="Products CENVAT Amount" required name="products_cenvat_amount">
							<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
						</label>
					</fieldset>
						

					
					<footer>
                          <button type="button" class="addmore"><a href="<?php echo base_url().'products/productsReel' ?>">Add More</a></button> 
						<button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check"></i>Add Products</button>

					</footer><?php echo form_hidden('todo', 'register'); ?>

				</form>


			</div>

		</div>


		<!-- MODAL --
		<div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title" id="myModal">Terms &amp; Conditions</h4>
					</div>



					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-primary" id="terms-agree"><i class="fa fa-check"></i> I Agree</button>
						
						<button type="button" class="btn btn-danger pull-left"><i class="fa fa-print"></i> Print</button>
					</div>

				</div><!-- /.modal-content --
			</div><!-- /.modal-dialog --
		</div>
		<!-- /MODAL -->

	
		<!-- JAVASCRIPT FILES --
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets\plugins\jquery\jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="assets\js\app.js"></script>

		<!-- PAGE LEVEL SCRIPTS --
		<script type="text/javascript">

			/**
				Checkbox on "I agree" modal Clicked!
			**/
			jQuery("#terms-agree").click(function(){
				jQuery('#termsModal').modal('toggle');

				// Check Terms and Conditions checkbox if not already checked!
				if(!jQuery("#checked-agree").checked) {
					jQuery("input.checked-agree").prop('checked', true);
				}
				
			});
		</script>


	-->









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
                                            <form  action="<?php echo base_url().'products/singleProducts';?>" method="post" id="form-validate" name"formproducts">
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
                                                                        <input type="text" id="firstname"  required  name="products_name" title="Products Name" maxlength="255" class="input-text validate-email required-entry">
                                                                    </div>
                                                                </div>                                                         
                                                              </div>
                                                        </li>

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_brand_name" class="required"><em>*</em>Products Brand Name</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  required  name="products_brand_name" title="Products Brand Name" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                          
                                                           

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_manufacturer" class="required"><em>*</em>Manufacturer</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  required  name="products_manufacturer" title="Manufacturer" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_substance" class="required"><em>*</em>Substance</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  required  name="products_substance" title="Substance" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                           

                                                    
                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_thickness" class="required"><em></em></label>
                                                                    <div class="input-box">
                                                                       
                                                <input type="radio" name="sheet"  id="chkNo" checked   onclick="ShowHideDiv()" > Reel
							                     <input type="radio" name="sheet" id="chkYes" onclick="ShowHideDiv()" > Sheet

                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_thickness" class="required"><em>*</em>Bulk</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  required  name="products_thickness" title="Bulk" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_size" class="required"><em>*</em> Products Size</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  required  name="products_size" title=" Products Size" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_grain" class="required"><em>*</em>Grain</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  required  name="products_grain" title="Grain" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       <div id="dvPassport" style="display: none">

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_sheets_per_packet" class="required"><em>*</em>Sheets per Packet</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"    name="products_sheets_per_packet" title="Sheets per Packet" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                              


                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="packets_per_bundle" class="required"><em>*</em>Products Per Bundle</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"   name="packets_per_bundle" title="Products Per Bundle" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="packets_weight" class="required"><em>*</em>Pkt. Weight</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"    name="packets_weight" title="Pkt. Weight" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       
                                                 </div>
                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_quantity_on_offer" class="required"><em>*</em>Quantity on Offer (in pkts)</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  required  name="products_quantity_on_offer" title="Quantity on Offer (in pkts)" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_packing" class="required"><em>*</em>Products Packing</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  required  name="products_packing" title="Products Packing" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                              

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_rate" class="required"><em>*</em>Products Rate</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  required  name="products_rate" title="Products Rate" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_cenvat_amount" class="required"><em>*</em> Products CENVAT Amount</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  required  name="products_cenvat_amount" title=" Products CENVAT Amount" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="excise_no" class="required"><em>*</em>Exicse Number</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  required  name="excise_no" title="Exices Number" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       
                                                      
                                                       
                                                        <?php echo form_hidden('todo', 'register'); ?>
                                                    </ul>
                                                    
                                                   
                                                    <div class="buttons-set">
                                                        
                                                        
                                                        <button type="submit" title="Submit" class="button"><span><span>Submit</span></span>
                                                        <button type="button" class="button"><a href="<?php echo base_url().'products/productsReel' ?>"><span>Add More</span></a></button> 
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
	

<script type="text/javascript">
    function ShowHideDiv(obj) {
    	// alert(123);
        var chkYes = document.getElementById("chkYes");
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = chkYes.checked ? "block" : "none";
    }
</script>
	