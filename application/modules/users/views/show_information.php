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
     print_r($users_data);*/ ?>
        
                <div class="em-wrapper-main">
                    <div class="container container-main">
                        <div class="em-inner-main">
                            <div class="em-wrapper-area02"></div>
                            <div class="em-main-container em-col1-layout">
                                <div class="row">
                                    <div class="em-col-main col-sm-24">
                                        <div class="account-create">
                                            <div class="page-title">
                                                <h1>Account Information</h1>
                                            </div>
                                            
                                                <div class="fieldset">
                                                    
                                                    <h2 class="legend">Account  Information<a href="<?php echo base_url().'users/getUpdateUsers'?>">General Information </a></h2>
                                                    <ul class="form-list">
                                                        <li class="fields">      
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="user_name_email" class="required">Pan No</label>
                                                                    <div class="input-box">
                                                                       <?php echo $users_data[0]['chawri_users_pan_no']; ?>
                                                                    </div>
                                                                </div>
                                                               <div class="field name-firstname">
                                                                    <label for="address" class="required">Tan No</label>
                                                                    <div class="input-box">
                                                                    <?php echo $users_data[0]['chawri_users_tan_no']; ?>
                                                                          </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </li>
                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                            
                                                                <div class="field name-firstname">
                                                                    <label for="phone" class="required">Excise No</label>
                                                                    <div class="input-box">
                                                                       <?php echo $users_data[0]['chawri_users_excise_no']; ?>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="field name-lastname">
                                                                    <label for="state" class="required">Services Tax No</label>
                                                                   

                                                                    <div class="input-box">
                                                                        
                                                                        <?php echo $users_data[0]['chawri_users_services_tax_no']; ?>
                                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        
                                                        
                                                      
                                                    </ul>
                                                    <div class="buttons-set">
                                                        
                                                        
                                                       <a href="<?php echo base_url().'users/updateInformation';?>">Update</a>
                                                        
                                                       
                                                    </div>
                                                   
                                                    
                                                </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.em-wrapper-main-->


