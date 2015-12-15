<?php
    $logout=$this->input->get('logout');
    if($logout){
        echo "<div style='text-align:center;' class=' container alert alert-success'>".'you are successfully logged out'."</div>";
    }else{
        getInformUser();
    }
    ?>
<?php /*echo "<pre/>"; print_r($data);*/ ?>


                <div class="em-wrapper-main">
                    <div class="container container-main">
                        <div class="em-inner-main">
                            <div class="em-wrapper-area02"></div>
                            <div class="em-main-container em-col1-layout">
                                <div class="row">
                                    <div class="em-col-main col-sm-24">
                                        <div class="account-create">
                                            <div class="page-title">
                                                <h1> Complaint Details</h1>
                                            </div>

                                                <div class="fieldset">
                                                    <input type="hidden" name="success_url" value="">
                                                    <input type="hidden" name="error_url" value="">


                                                    <ul class="form-list row">
 														<li class="fields">
                                                    <div class="col-md-6">   

                                                     
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"> <b>Order Date </b> </label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_orders_date']; ?>
	                                                                    </div>
	                                                                </div>
	                                                </div>


	                                                            </div>

	                                                 <div class="col-md-6">  

	                                                            <div class="customer-name-middlename ">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"> <b> Delivery Date</b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_order_delivery_date']; ?>
	                                                                    </div>
	                                                                </div>


	                                                            </div>
	                                                    </div>

                                                        </li>
                                                           <li class="fields">
                                                            <div class="col-md-6">  
	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Complaint Date</b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_complaint_date']; ?>
	                                                                    </div>
	                                                                </div>


	                                                            </div>

	                                                            </div>

                                                               <div class="col-md-6">  
	                                                            <div class="customer-name-middlename ">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b> Total Value</b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_orders_total_cost']; ?>
	                                                                    </div>
	                                                                </div>


	                                                            </div>
	                                                            </div>
                                                        </li>
                                                         <li class="fields">

                                                          <div class="col-md-6">  

	                                                            <div class="customer-name-middlename">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b> Order Id</b> </label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_orders_id']; ?>
	                                                                    </div>
	                                                                </div>


	                                                            </div>

	                                                            </div>

	                                                             <div class="col-md-6">  
	                                                            <div class="customer-name-middlename ">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Products Name </b> </label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_products_orders_products_name']; ?>
	                                                                       
	                                                                    </div>
	                                                                </div>


	                                                            </div>
	                                                            </div>

                                                        </li>
                                                         <li class="fields">
                                                         <div class="col-md-6">  
	                                                            <div class="customer-name-middlename complaint-details">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Sellers Company Name</b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_sellers_company_name']; ?>
	                                                                    </div>
	                                                                </div>

	                                                                </div>
	                                                            </div>
	                                                            	<div class="col-md-6">  
	                                                            <div class="customer-name-middlename ">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Sellers Email </b> </label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_sellers_email']; ?>
	                                                                    </div>
	                                                                </div>

	                                                                </div>
	                                                            </div>
                                                        </li>
                                                         <li class="fields">
                                                         <div class="col-md-6">  
                                                           <div class="customer-name-middlename complaint-details">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b> Phone No. </b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_sellers_phone']; ?>
	                                                                    </div>
	                                                                </div>

	                                                               </div>
	                                                            </div>
	                                                            <div class="col-md-6">  
	                                                            <div class="customer-name-middlename ">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Alternet Email</b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_sellers_alternet_email']; ?>
	                                                                    </div>
	                                                                </div>

	                                                                </div>
	                                                            </div>

                                                        </li>
                                                         <li class="fields">
                                                         	<div class="col-md-6">  
	                                                            <div class="customer-name-middlename complaint-details">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b> Buyer Name </b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_users_fname'].$data[0]['chawri_users_lname']; ?>
	                                                                         </div>
	                                                                </div>
	                                                                </div>

	                                                            </div>
	                                                            <div class="col-md-6">  
	                                                            <div class="customer-name-middlename ">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Buyer Email</b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_users_username']; ?>
	                                                                    </div>
	                                                                </div>

	                                                                </div>
	                                                            </div>

                                                        </li>
                                                        <li class="fields">
                                                        	<div class="col-md-6">  
	                                                            <div class="customer-name-middlename complaint-details">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Buyer Address</b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_users_address']; ?>
	                                                                        
	                                                                    </div>
	                                                                </div>
	                                                                </div>

	                                                            </div>
	                                                            <div class="col-md-6">  
	                                                            <div class="customer-name-middlename ">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Buyer Phone No.</b> </label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_users_phone']; ?>
	                                                                    </div>
	                                                                </div>

	                                                                </div>
	                                                            </div>


                                                        </li>
                                                       
                                                             <li class="fields">
                                                             	<div class="col-md-6">  
	                                                            <div class="customer-name-middlename complaint-details">
	                                                                <div class="field name-firstname">
	                                                                    <label for="products_brand_name" class="required"><b>Complaint</b></label>
	                                                                    <div class="input-box">
	                                                                        <?php echo $data[0]['chawri_complaint_message']; ?>
	                                                                        
	                                                                    </div>
	                                                                </div>
	                                                                	</div>
	                                                                	</div>
	                                                                	</li>
                                                          
                                                           </ul>

                                                  

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



