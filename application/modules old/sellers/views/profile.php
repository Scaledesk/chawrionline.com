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
                                                <h1>Update Profile</h1>
                                            </div>
                                            <form action="<?php echo base_url().'sellers/profile';?>" method="post" id="form-validate">
                                                <div class="fieldset">
                                                    <input type="hidden" name="success_url" value="">
                                                    <input type="hidden" name="error_url" value="">
                                                    <h2 class="legend">Company Information <a href="<?php echo base_url().'sellers/getProfile'?>">Update Information</a></h2>
                                                    <ul class="form-list">
                                                        <li class="fields">      
                                                            <div class="customer-name-middlename">     
                                                                <div class="field name-firstname">
                                                                    <label for="tin_no" class="required"><em>*</em>Tin Number</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  required  name="tin_no" title="Tin Number" maxlength="255" class="input-text validate-email required-entry">
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="field name-lastname">
                                                                    <label for="pan_no" class="required"><em>*</em>Pan Number</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="password" required name="pan_no" title="pan Number" maxlength="255" class="input-text required-entry">
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
                                                                
                                                                <div class="field name-lastname">
                                                                    <label for="services_tax_no" class="required"><em>*</em>Services Tax Number</label>


                                                                    <div class="input-box">
                       													

                                                                         <input type="text" id="lastname"  name="services_tax_no" title="Services Tax Number" maxlength="255" class="input-text required-entry"> 
                                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="fields"> 
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="tan_no" class="required"><em>*</em>Tan Number</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  required  name="tan_no" title="Tan Number" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                        </li>
                                                      
                                                       
                                                        
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
                </div><!-- /.em-wrapper-main-->

