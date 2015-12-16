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
                                                <h1> My Profile</h1>
                                            </div>
                                            
                                                <div class="fieldset">
                                                    
                                                   <h2 class="profile-text"><a href="<?php echo base_url().'sellers/showProfile'?>">General Information </a></h2> &nbsp &nbsp &nbsp<h2 class="profile-text2"><a href="<?php echo base_url().'sellers/account_infomation'?>">Account  Information </a></h2>
                                                    <ul class="form-list">
                                                       <li class="fields">      
                                                            <div class="customer-name-middlename">     
                                                                <div class="field name-firstname">
                                                                    <label for="tin_no" class="required">Tin Number</label>
                                                                    <div class="input-box">
                                                                        <?php echo $profile_data[0]['chawri_sellers_tin_no']; ?>
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="field name-lastname">
                                                                    <label for="pan_no" class="required">Pan Number</label>
                                                                    <div class="input-box">
                                                                        <?php echo $profile_data[0]['chawri_sellers_pan_no']; ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="excise_no" class="required">Excise Number</label>
                                                                    <div class="input-box">
                                                                       <?php echo $profile_data[0]['chawri_sellers_excise_no']; ?>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="field name-lastname">
                                                                    <label for="services_tax_no" class="required">Services Tax Number</label>


                                                                    <div class="input-box">
                                                                        

                                                                         <?php echo $profile_data[0]['chawri_sellers_services_tax_no']; ?>
                                                                    
                                                                    </div>
                                                                </div>
                                                             

                                                            </div>
                                                        </li>
                                                        <li class="fields"> 
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="tan_no" class="required">Tan Number</label>
                                                                    <div class="input-box">
                                                                        <?php echo $profile_data[0]['chawri_sellers_tan_no']; ?>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="field name-firstname">
                                                                    <label for="tan_no" class="required">C Form Accept</label>
                                                                    <div class="input-box">
                                                                 <?php echo $profile_data[0]['chawri_sellers_cform']; ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                      
                                                          <!--    -->
                                                        
                                                    </ul>
                                                    <div class="buttons-set">
                                                        
                                                        
                                                      <button type="submit" title="Submit" class="button"> <a href="<?php echo base_url().'sellers/updatProfile';?>">Update</a> </button>
                                                        
                                                       
                                                    </div>
                                                   
                                                    
                                                </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.em-wrapper-main-->


