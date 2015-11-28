	<?php
    $logout=$this->input->get('logout');
    if($logout){
        echo "<div style='text-align:center;' class=' container alert alert-success'>".'you are successfully logged out'."</div>";
    }else{
        getInformUser();
    }
    ?>

	<?php
	/*echo "<pre/>";
	 print_r($profile_data);*/ ?>
        
                <div class="em-wrapper-main">
                    <div class="container container-main">
                        <div class="em-inner-main">
                            <div class="em-wrapper-area02"></div>
                            <div class="em-main-container em-col1-layout">
                                <div class="row">
                                    <div class="em-col-main col-sm-24">
                                        <div class="account-create">
                                            <div class="page-title">
                                                <h1>update an Account</h1>
                                            </div>
                                            <form action="<?php echo base_url().'sellers/updateGetProfile';?>" method="post" id="form-validate">
                                                <div class="fieldset">
                                                    <input type="hidden" name="success_url" value="">
                                                    <input type="hidden" name="error_url" value="">
                                                    <h2 class="legend">Company Information</h2>
                                                    <ul class="form-list">
                                                        <li class="fields">      
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="user_name_email" class="required"><em>*</em>Email Address</label>
                                                                    <div class="input-box">
                                                                        <input type="email" id="firstname"  readonly="" value="<?php echo $profile_data[0]['chawri_sellers_email']; ?>" name="user_name_email" title="Email Address" maxlength="255" class="input-text validate-email required-entry">
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="field name-lastname">
                                                                    <label for="company_name" class="required"><em>*</em>Company Name</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="password" required name="company_name" value="<?php echo $profile_data[0]['chawri_sellers_company_name']; ?>" title="Company Name" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="address" class="required"><em>*</em>Address</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  required  name="address" value="<?php echo $profile_data[0]['chawri_sellers_address']; ?>" title="Address" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="field name-middlename">
                                                                    <label for="middlename">Middle Name/Initial</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="middlename" name="middlename" value="" title="Middle Name/Initial" class="input-text ">
                                                                    </div>
                                                                </div> -->
                                                                <div class="field name-lastname">
                                                                    <label for="state" class="required"><em>*</em>State</label>
                                                                    <input type="text" id="firstname"  required value="<?php echo $profile_data[0]['chawri_sellers_state']; ?>" name="state" title="State" maxlength="255" class="input-text required-entry">

                                                                    <div class="input-box">
                       													

                                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="fields"> 
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="pin" class="required"><em>*</em>Pin Code</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  required value="<?php echo $profile_data[0]['chawri_sellers_pin_code']; ?>" name="pin" title="Pin Code" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="field name-lastname">
                                                                    <label for="landline" class="required"><em>*</em>Landline No.</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="lastname" required value="<?php echo $profile_data[0]['chawri_sellers_landline']; ?>" name="landline" title="Landline No." maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="fields"> 
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="phone" class="required"><em>*</em>Phone</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  required value="<?php echo $profile_data[0]['chawri_sellers_phone']; ?>" name="phone" title="Phone" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                               
                                                             
                                                            </div> 
                                                            </div>
                                                        </li>
                                                      
                                                    </ul>
                                                    
                                                   
                                                    <div class="buttons-set">
                                                        
                                                        
                                                        <button type="submit" title="Submit" class="button"><span><span>Update</span></span>
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
                </div><!-- /.em-wrapper-main-->



<script>
function myFunction() {

    var pass = document.getElementById('password').value;
     var cpass = document.getElementById('confirmation').value;
/*     alert(cpass);
     alert(pass);*/
     if(pass==cpass){

return true;
       
     }
     else{
       alert('password not match ');
     }
  
   // x.value = xx.value.toUpperCase();
}
</script>