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
                                                <h1> Products Details</h1>
                                            </div>

                                                <div class="fieldset">
                                                    <input type="hidden" name="success_url" value="">
                                                    <input type="hidden" name="error_url" value="">


                                                    <ul class="form-list">

                                                        <li class="fields">
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"> <b> Name </b> </label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_name']; ?>
	                                                                    </div>
	                                                                </div>


	                                                            </div>

	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"> <b> Brand Name</b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_brand_name']; ?>
	                                                                    </div>
	                                                                </div>


	                                                            </div>
                                                        </li>
                                                           <li class="fields">
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Manufacturer</b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_manufacturer']; ?>
	                                                                    </div>
	                                                                </div>


	                                                            </div>

	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b> Substance</b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_substance']; ?>
	                                                                    </div>
	                                                                </div>


	                                                            </div>
                                                        </li>
                                                         <li class="fields">

	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b> Bulk</b> </label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_thickness']; ?>
	                                                                    </div>
	                                                                </div>


	                                                            </div>
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Size (in s/m) </b> </label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_size_w']; ?>X
	                                                                        <?php echo $data[0]['chawri_products_size_h']; ?>
	                                                                    </div>
	                                                                </div>


	                                                            </div>

                                                        </li>
                                                         <li class="fields">
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Grain</b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_grain']; ?>
	                                                                    </div>
	                                                                </div>


	                                                            </div>

	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Sheets  per  packet </b> </label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_sheets_per_packet']; ?>
	                                                                    </div>
	                                                                </div>


	                                                            </div>
                                                        </li>
                                                         <li class="fields">
                                                           <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b> Pkt. Weight </b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_weight']; ?>
	                                                                    </div>
	                                                                </div>


	                                                            </div>
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Packets Per Bundle</b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_packets_per_bundle']; ?>
	                                                                    </div>
	                                                                </div>


	                                                            </div>

                                                        </li>
                                                         <li class="fields">

	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b> Quantity on offer </b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_quantity_on_offer']; ?>
	                                                                    </div>
	                                                                </div>


	                                                            </div>
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Packing</b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_packing']; ?>
	                                                                    </div>
	                                                                </div>


	                                                            </div>

                                                        </li>
                                                        <li class="fields">

	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Rate per KG</b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_rate']; ?>
	                                                                    </div>
	                                                                </div>


	                                                            </div>
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>CENVAT Amount</b> </label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_cenvat_amount']; ?>
	                                                                    </div>
	                                                                </div>


	                                                            </div>


                                                        </li>


                                                        <li class="fields">
                                                        <div class="customer-name-middlename">
	                                                     <div class="field name-firstname">
	                                                     <form class="form-inline" role="form" action="<?php echo base_url().'products/buyNow/'.$data[0]['chawri_products_id']; ?>" Method="post">
                                                         <div class="form-group" id="form1">
                                                         <label  for="qty">Quantity</label>
                                                         <input type="number" name="qty" id="qty" class="form-control" placeholder="Quantity" max="<?php echo $data[0]['chawri_products_quantity_on_offer']; ?>" required/>
                                                         </div>
	                                                     </div>
	                                                     </div>
                                                            </li>

                                                           </ul>

	                                                      <div class="customer-name-middlename">
	                                                      <div class="field name-firstname">
	                                                      <div class="form-group" id="form2">
                                                          <label  for="description">Description</label>
                                                          <textarea name="description" required  class="form-control" rows="5" id="desc"></textarea>
                                                          <!-- <div class="buttons-set"> <button type="submit" title="Submit" class="button"> Buy Now </button></div> -->
                                                           <button type="button" onclick="modalval(this)" style="background-color: #53287A;"  data-toggle="modal" data-target="#myModal">Buy Now</button>
                                                          </div>
                                                          </form>
	                                                     </div>
	                                                     </div>

                                                     <!-- ............................................... -->
                                                    <div class="row" >
                         
                          <!-- Trigger the modal with a button -->
                       <!--    <a  data-toggle="modal" data-target="#myModal">Extension</a> -->
                         

                          <!-- Modal -->
                          <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                              
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">C Form</h4>
                                </div>
                                <div class="modal-body">

                                  <form role="form" action="<?php echo base_url().'products/buyNow/'.$data[0]['chawri_products_id']; ?>" method="post">
                                <div class="form-group">
                                  <label for="date">C Form</label>
                                   <select name="cform">
                                   <option>Cform</option>
                                   <option>Vat</option>
                                   <option>Cst</option>
                                   </select>
                                </div>
                                <div class="form-group" id="modal1">
                                 
                                  
                                  <input type="hidden" name="qty" id="hiddenQty" value="">
                                  <input type="hidden" name="description" id="hiddenDesc" value="">
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
                                                     <!-- .......................................................... -->


                                                </div>

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
function modalval(){



var val1 = document.getElementById('qty').value;
var val2 = document.getElementById('desc').value;
document.getElementById('hiddenQty').value = val1;
document.getElementById('hiddenDesc').value = val2;


}
</script>