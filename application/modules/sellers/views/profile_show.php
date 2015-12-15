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
                                                <h1>General Information</h1>
                                            </div>
                                            
                                                <div class="fieldset">
                                                    
                                                    <h2 class="legend">General  Information<a href="<?php echo base_url().'sellers/account_infomation'?>">Account Information</a></h2>
                                                    <ul class="form-list">
                                                        <li class="fields">      
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="user_name_email" class="required">Email Address</label>
                                                                    <div class="input-box">
                                                                       <?php echo $profile_data[0]['chawri_sellers_email']; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="field name-middlename">
                                                                    <label for="alternet_email">Alternate Email</label>
                                                                    <div class="input-box">
                                                                        <?php echo $profile_data[0]['chawri_sellers_alternet_email']; ?>
                                                                    </div>
                                                                </div>

                                                                
                                                            </div>
                                                        </li>
                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                            <div class="field name-lastname">
                                                                    <label for="company_name" class="required">Company Name</label>
                                                                    <div class="input-box">
                                                                        <?php echo $profile_data[0]['chawri_sellers_company_name']; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="field name-firstname">
                                                                    <label for="address" class="required">Address</label>
                                                                    <div class="input-box">
                                                                    <?php echo $profile_data[0]['chawri_sellers_address']; ?>
                                                                          </div>
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                        </li>
                                                        <li class="fields"> 
                                                            <div class="customer-name-middlename">
                                                            <div class="field name-lastname">
                                                                    <label for="state" class="required">State</label>
                                                                   

                                                                    <div class="input-box">
                                                                        
                                                                        <?php echo $profile_data[0]['chawri_sellers_state']; ?>
                                                                    
                                                                    </div>
                                                                </div>
                                                                <div class="field name-firstname">
                                                                    <label for="pin" class="required">Pin Code</label>
                                                                    <div class="input-box">
                                                                       <?php echo $profile_data[0]['chawri_sellers_pin_code']; ?>
                                                                    </div>
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </li>
                                                        <li class="fields"> 
                                                            <div class="customer-name-middlename">
                                                             <div class="field name-lastname">
                                                                    <label for="landline" class="required">Landline No.</label>
                                                                    <div class="input-box">
                                                                        <?php echo $profile_data[0]['chawri_sellers_landline']; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="field name-firstname">
                                                                    <label for="phone" class="required">Phone</label>
                                                                    <div class="input-box">
                                                                       <?php echo $profile_data[0]['chawri_sellers_phone']; ?>
                                                                    </div>
                                                                </div>
                                                               
                                                             
                                                            </div> 
                                                            </div>
                                                        </li>
                                                      
                                                    </ul>
                                                    <div class="buttons-set">
                                                        
                                                        
                                                       <a href="<?php echo base_url().'sellers/getProfile';?>">Update</a>
                                                        
                                                       
                                                    </div>
                                                   
                                                    
                                                </div>
                                            
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