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
                                    <div class="em-col-main">
                                        <div class="account-create">
                                            <div class="page-title">
                                                <h1> Products Details</h1>
                                            </div>
                                            <div class="col-md-16">

                                                <div class="fieldset">
                                                    <input type="hidden" name="success_url" value="">
                                                    <input type="hidden" name="error_url" value="">
                                                    <div class="row">


                                                    <div class="col-md-6 chawri_custom">

	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"> <b> Name </b> </label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_name']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                </div>


	                                                            </div>
	                                                            <div class="col-md-6 chawri_custom">

	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"> <b> Brand Name</b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_brand_name']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                </div>


	                                                            </div>
	                                                            <div class="col-md-6 chawri_custom">
                                                       
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Manufacturer</b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_manufacturer']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                </div>


	                                                            </div>
	                                                            <div class="col-md-6 chawri_custom">

	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b> GSM</b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_substance']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                </div>
	                                                            </div>


	                                                            </div>
	                                                            <div class="row">
	                                                            <div class="col-md-6 chawri_custom">
                                                        

	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b> Bulk(mic)</b> </label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_thickness']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                </div>


	                                                            </div>
	                                                            <div class="col-md-6 chawri_custom">
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Size (cms) </b> </label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_size_w']; ?>X
	                                                                        <?php echo $data[0]['chawri_products_size_h']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                </div>


	                                                            </div>
	                                                            <div class="col-md-6 chawri_custom">

	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Grain</b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_grain']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                </div>


	                                                            </div>
	                                                            <div class="col-md-6 chawri_custom">

	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Sheets per packet </b> </label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_sheets_per_packet']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                </div>


	                                                            </div>
	                                                        </div>
	                                                        <div class="row">
	                                                            <div class="col-md-6 chawri_custom">
                                                           <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b> Pkt. Weight </b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_weight']; ?>
	                                                                        <input type="hidden" name="weight" class="weight"value="<?php echo $data[0]['chawri_products_weight']; ?>">
	                                                                    </div>
	                                                                </div>
	                                                                </div>


	                                                            </div>
	                                                            <div class="col-md-6 chawri_custom">
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Packets Per Bundle</b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_packets_per_bundle']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                </div>


	                                                            </div>

	                                                            <div class="col-md-6 chawri_custom">
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b> Quantity on offer </b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_quantity_on_offer']; ?>
	                                                                        <input type="hidden" id="qtynum" name="qtynum" value="<?php echo $data[0]['chawri_products_quantity_on_offer']; ?>">
	                                                                    </div>
	                                                                </div>
	                                                                </div>

	                                                            </div>
	                                                      

	                                                            <div class="col-md-6 chawri_custom">
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Packing</b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_packing']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                </div>


	                                                            </div>
	                                                        </div>
	                                                        <div class="row">

	                                                            <div class="col-md-6 chawri_custom">
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Rate per KG</b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_rate']; ?>
	                                                                        
	                                                                    </div>
	                                                                </div>
	                                                                </div>
	                                                            </div>


	                                                            
	                                                            <div class="col-md-6 chawri_custom">
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>CENVAT Amount</b> </label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_cenvat_amount']; ?>
	                                                                    </div>
	                                                                </div>


	                                                            </div>
	                                                            </div>


	                                                            <div class="col-md-6 chawri_custom">
                                                        	 	<div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Reel No</b> </label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_reel_no']; ?>
	                                                                    </div>
	                                                                </div>
	                                                                </div>
	                                                            </div>


	                                                            </div>
	                                                            
	                                                            </div>
	                                                        </div>
	                                                    
	                                                        <div class="row">
	                                                         <div class="col-md-6">
                 <div class="page-title"> Please Enter the following details...</div>
	                                                    <form class="form-inline" role="form" action="<?php echo base_url().'products/buyNow/'.$data[0]['chawri_products_id']; ?>" method="post"> 		
														<div class="col-md-24">
                                                        <div class="customer-name-middlename">
	                                                     <div class="field name-firstname">
	                                                     
                                                         <div class="form-group" id="form1">
                                                         <!-- <label  for="qty">Quantity</label> -->
                                                           <div class="input-box">
                                                         <input type="number" step="any" name="qty" min="1" id="qty"  class="form-control qty1" placeholder="Quantity" max="<?php echo $data[0]['chawri_products_quantity_on_offer']; ?>" required/>
                                                         </div>
	                                                     </div>
	                                                     </div>
															</div>
															</div>
															
	                                                   
	                                                    <div class="col-md-8 chawri_custom_1">
                                                           	 <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                	

	                                                                   
	                                                                   <!--  <label for="products_brand_name" class="required"><b>C Form</b></label> -->
	                                                                    <div class="input-box">
	                                                                    <?php if($cform=='No'){ ?>
	                                                                        <select name="cform" class="chawri_custom_input">
												                                   
												                                   <option>VAT</option>
												                                   <option>CST</option>
												                                   </select>
												                                   <?php }else{ ?>
												                                   <select name="cform">
												                                   <option>CFORM</option>
												                                   <option>VAT</option>
												                                   <option>CST</option>
												                                   </select>
	                                                                            <?php } ?>
	                                                                    </div>
	                                                                </div>


	                                                            </div>
	                                                            </div>
	                                                            <div class="col-md-16 chawri_custom_1">

	                                                            
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <!-- <label for="products_brand_name" class="required"><b>TIN</b> </label> -->
	                                                                    <div class="input-box">
	                                                                       <input type=" text" name="tin_no" placeholder="TIN"required value="<?php  echo $this->session->userdata['user_data'][0]['users_tin_no'] ; ?>" required maxlength="12" class="input-text  required-entry" />
	                                                                    </div>
	                                                                </div>


	                                                            </div>
	                                                            </div>
	                                                            <div class="col-md-24 chawri_custom_1">

	                                                            
	                                                      <div class="customer-name-middlename">
	                                                      <div class="field name-firstname">
	                                                      
                                                          <!-- <label  class="required" for="description">Remarks to Supplier</label> -->
                                                          <div class="input-box chawri_custom_textarea">
                                                          <textarea name="description"  placeholder="Remarks to supplier" style="resize: none; width:100%" required  class="input-text  required-entry" rows="5"  id="desc"> </textarea>
                                                          
                                                          </div>
                                                          </div>
                                                          
	                                                    
	                                                     </div>
	                                                     </div>
	                                                     <div class="col-md-12 chawri_custom_1">
	                                                     <div class="customer-name-middlename">
	                                                      <div class="field name-firstname">
	                                                      
                                                          <label  class="required" for="description" >Shipping Required ? </label>
                                                          <div class="input-box">
                                                          <input type="radio" class="shiping" onclick="loadamount(this)" id="yes" required name="shiping" value="yes">&nbsp;&nbsp;&nbsp;Yes&nbsp;&nbsp;
                                                          <input type="radio" class="shiping" onclick="loadamount(this)" reuired id="no" name="shiping" value="no">&nbsp;&nbsp;&nbsp;No
                                                         <input type="hidden" class="products_id"id="products_id"name="products_id" value="<?php echo $data[0]['chawri_products_id']; ?>">
                                                        </div>
                                                        </div>
                                                          
	                                                    
	                                                     </div>
	                                                     </div>
	                                                     	  <!-- <input type="submit" class="button" name="submit" value="Buy Now"> -->
															
	                                                     <div class="col-md-12 chawri_custom_1">
	                                                     	<lable>Shipping Charges :</lable>
	                                                     	 <input style="margin-top:4px;" type="text" class="input-text_custom" readonly="" id="totalshiping" name="totalshiping" value="" >
                                                          </div>
                                                          

                                                          <div class="col-md-20">
                                                          	<div class="custom_center">
	                                                     	<button type="submit" title="Place" class="my_chawri_custom">Buy Now </button>
	                                                     </div>
	                                                     </div>
	                                                     	</form>
	                                                     	</div>
	                                                     	</div>
	                                                     	</div>






                                                         
                                                           <?php /*print_r($this->session->userdata['user_data']);*/ ?>
                                                     <!-- ............................................... -->
                                         
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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script>

$(document).ready(function () {
$(".shiping").change(function () {

    var val = $('.shiping:checked').val();
    var id =$('.products_id').val();
    var weight=$('.weight').val();
    var qty=$('.qty1').val();

   /* alert(weight);*/

     var dd ={"val":val,"id":id,"weight":weight,"qty":qty};
                /* alert(dd);*/
                   $.ajax({
                  'url' : "<?php echo base_url().'products/shiping'; ?>",
                  'type' : 'POST',  //the way you want to send data to your URL
                  dataType: "json",
                  'data':dd,
                 /* 'data' : {'date' :date1, 'services' :services1, 'subjects' :subjects1, 'grade' :grade1, 'length' :length1, 'currency' :currency1},
                 */ 'success' : function(data){
                    /*alert(data);*/
                    var amount=data;
                    
                   /* console.log(amount);*/
                     /* document.getElementById("demo").innerHTML 
                    console.log($('#total'));*/
                    // document.getElementById("divtotal").innerHTML=amount;
                    // document.getElementById('totalamount').value = amount;
                     $("#totalshiping").val(amount);

                     /*$("total").val(data);*/
                   /* document.getElementById("total").val(amount); */
                    /*$('#total').value(amount);*/
                    //$('#available_amount').value=a; //jquery selector (get element by id)
                     //alert(a);
                  },
                   'error': function(data){
                     /* console.log(data);*/
                     /* alert(data);*/
                      alert('Some Error Occurred');
                  }
                  });
});

});

  
             
</script>

   