	<?php
    $logout=$this->input->get('logout');
    if($logout){
        echo "<div style='text-align:center;' class=' container alert alert-success'>".'you are successfully logged out'."</div>";
    }else{
        getInformUser();
    }
    ?>








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
                                                                    <label for="products_name" class="required"><em>*</em>Categories</label>
                                                                    <div class="input-box"> 
                                                                      <?php /*print_r($categories)*/ ?>
                                                                    <select  name="categories" class="input-text  required-entry">
                                                                      <?php foreach ($categories as $value) {
                                                                      	
                                                                       ?>
                                                                    	<option value="<?php echo $value['chawri_categories_id'];?>"> <?php echo $value['chawri_categories_name'];?></option>
                                                                    	<?php }?>
                                                                    </select>

                                                                       
                                                                    </div>
                                                                </div>                                                         
                                                              </div>
                                                        </li>
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
                                                                    <label for="products_brand_name" > Brand Name</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"    name="products_brand_name" title="Products Brand Name" maxlength="255" class="input-text required-entry">
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
                                                                    <label for="products_substance" class="required"><em>*</em>GSM</label>
                                                                    <div class="input-box">
                                                                        <input type="number" step="any" minlength=0 id="substance" onchange ="checkNumber(this)" required  name="products_substance" title="Substance" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                           

                                                    
                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_thickness" class="required"><em></em></label>
                                                                    <div class="input-box">
                                                                       
                                                <input type="radio" name="sheet"  value="reel" id="chkNo" checked   onclick="ShowHideDiv()" > Reel
							                     <input type="radio" name="sheet" value="sheet" id="chkYes" onclick="ShowHideDiv()" > Sheet

                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                        <div id='show_me' style='display:none'>
                                                         <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_thickness" >Reel No</label>
                                                                    <div class="input-box">
                                                                        <input type="number" step="any" minlength="0" id="firstname"   name="products_reel_no" title="Bulk" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                        </div>

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_thickness" >Bulk (mic)</label>
                                                                    <div class="input-box">
                                                                        <input type="number" step="any" minlength="0" id="firstname"   name="products_thickness" title="Bulk" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_size" class="required"><em>*</em> Size</label>
                                                                    <div class="input-box">
                                                                        <input type="number" step="any" minlength="0" id="firstname"  required  name="products_size" title="  Size" maxlength="255" class=" input-text size-box1">
                                                                        <span>X</span> <input type="number" step="any" minlength="0" id="firstname"  required  name="products_size_one" title="  Size" maxlength="255" class="input-text size-box2">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_grain" class="required"><em>*</em>Grain</label>
                                                                    <div class="input-box">
                                                                    <select required  name="products_grain" title="Grain" class="input-text required-entry">
                                                                    	<option>Long</option>
                                                                    	<option>Short</option>
                                                                    </select>
                                                                    
                                                                        <!-- <input type="text" id="firstname"  maxlength="255" > -->
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
                                                                        <input type="number" step="any" minlength="0" id="firstname"    name="products_sheets_per_packet" title="Sheets per Packet" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                              


                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="packets_per_bundle" class="required"><em>*</em>Packet Per Bundle</label>
                                                                    <div class="input-box">
                                                                        <input type="number" step="any" minlength="0" id="firstname"   name="packets_per_bundle" title="Products Per Bundle" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="packets_weight" class="required"><em>*</em>Pkt. Weight</label>
                                                                    <div class="input-box">
                                                                        <input type="number" step="any" minlength="0" id="firstname"    name="packets_weight" title="Pkt. Weight" maxlength="255" class="input-text required-entry">
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
                                                                        <input type="number" step="any" minlength="0" id="firstname"  required  name="products_quantity_on_offer" title="Quantity on Offer (in pkts)" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_packing" class="required"><em>*</em>Products Packing</label>
                                                                    <div class="input-box">
                                                                      <select required  name="products_packing" title="Products Packing"  class="input-text required-entry">
                                                                      	<option> Shrink</option>
                                                                      	<option>Gunny</option>
                                                                      	<option>Wrap</option>
                                                                      	<option>Pallet</option>
                                                                      	<option>Carton</option>
                                                                      	<option>Other</option>
                                                                      </select>
                                                                        <!-- <input type="text" id="firstname"  > -->
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                              

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_rate" class="required"><em>*</em>Products Rate</label>
                                                                    <div class="input-box">
                                                                        <input type="number" step="any" minlength="0" id="firstname"  required  name="products_rate" title="Products Rate" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       

                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="products_cenvat_amount" class="required"><em>*</em> Products CENVAT Amount</label>
                                                                    <div class="input-box">
                                                                        <input type="number" step="any" minlength="0" id="firstname"  required  name="products_cenvat_amount" title=" Products CENVAT Amount" maxlength="255" class="input-text required-entry">
                                                                   
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                       

                                                       
                                                      
                                                       
                                                        <?php echo form_hidden('todo', 'register'); ?>
                                                    </ul>
                                                    
                                                   
                                                    <div class="buttons-set">
                                                        
                                                        
                                                        
                                                        <button type="submit" title="Submit" class="button"><span><span>Submit</span></span></button>
                                                        <button type="button" class="button"><a href="<?php echo base_url().'products/productsReel' ?>"><span>Add More</span></a></button> 
                                                         <button type="button" class="button"><a href="<?php echo base_url().'products/uploadExcel' ?>"><span>Upload Excel File</span></a></button> 
                                                        
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
	
	<script type="text/javascript">
    function checkNumber(obj) {
    	
    	
        var gsm = document.getElementById("substance").value;
       /*alert(gsm);*/
        if(gsm>=1000){
        	alert("GSM Number is less then 1000");
            document.getElementById("substance").focus();
        	return false;
        }
        else{
        	return true;
        } 
       
    }
</script>

<script type="text/javascript">
/*$(document).ready(function() {

   $('input[type="radio"]').click(function() {
    alert("asdasd");
       if($(this).attr('id') == 'chkNo') {
            $('#show-me').show();           
       }

       else {
            $('#show-me').hide();   
       }
   });
});
*/


</script>

<script type="text/javascript">
/*    $(document).ready(function () {
    
 
    
    $('input[type=radio]').change(function(){
   

    if ($('#chkYes').is(':checked')) {
        $('#show_me').show();
    } else {
        $('#show_me').hide();
    }

    if ($('#chkNo').is(':checked')) {
        $('#show_me').show();
    } else {
        $('#show_me').hide();
    }
        });
});
$("#chkNo").prop("checked", true).change();
*/



$(document).ready(function () {
    
 
    
    $('input[type=radio]').change(function(){
   

    if ($('#chkNo').is(':checked')) {
        $('#show_me').show();
    } else {
        $('#show_me').hide();
    }

    if ($('#chkYes').is(':checked')) {
   
        $('#show_me').hide();
    }
        });
});
$("#chkNo").prop("checked", true).change();
</script>
