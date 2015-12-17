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
                                                <h1>My Profile</h1>
                                            </div>
                                            
                                                <div class="fieldset">  <?php /*print_r($users_data); die;*/ ?>
                                                     <h2 class="profile-text"><a href="<?php echo base_url().'users/getUpdateUsers'?>">General Information </a></h2> &nbsp &nbsp &nbsp<h2 class="profile-text2"><a href="<?php echo base_url().'users/showInformation'?>">Account  Information </a></h2>
                                                   <!--  <h2 class="legend">General  Information<a href="<?php echo base_url().'users/showInformation'?>">Account Information</a></h2> -->
                                                    <ul class="form-list">
                                                        <li class="fields">      
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="user_name_email" class="required">Email Address</label>
                                                                    <div class="input-box">
                                                                       <?php echo $users_data[0]['chawri_users_username']; ?>
                                                                    </div>
                                                                </div>
                                                               <div class="field name-lastname">
                                                                    <label for="company_name" class="required"> Last Name</label>
                                                                    <div class="input-box">
                                                                        <?php echo $users_data[0]['chawri_users_lname']; ?>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </li>
                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                            
                                                                <div class="field name-firstname">
                                                                    <label for="address" class="required">First Name</label>
                                                                    <div class="input-box">
                                                                    <?php echo $users_data[0]['chawri_users_fname']; ?>
                                                                  </div>
                                                                </div>
                                                                <div class="field name-firstname">
                                                                    <label for="address" class="required">Address</label>
                                                                    <div class="input-box">
                                                                    <?php echo $users_data[0]['chawri_users_address']; ?>
                                                                          </div>
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                        </li>
                                                        <li class="fields"> 
                                                            <div class="customer-name-middlename">

                                                            <div class="field name-lastname">
                                                                    <label for="state" class="required">State</label>
                                                                   

                                                                    <div class="input-box">
                                                                        
                                                                        <?php echo $users_data[0]['chawri_users_state']; ?>
                                                                    
                                                                    </div>
                                                                </div>
                                                                
                                                               <div class="field name-firstname">
                                                                    <label for="phone" class="required">Phone</label>
                                                                    <div class="input-box">
                                                                       <?php echo $users_data[0]['chawri_users_phone']; ?>
                                                                    </div>
                                                                </div>
                                                               
                                                            </div>
                                                        </li>
                                                        
                                                      
                                                    </ul>
                                                    <div class="buttons-set">
                                                        
                                                        
                                                        <button type="submit" title="Place" class="button"> <a href="<?php echo base_url().'users/showUsers';?>">Update</a></button>
                                                        
                                                       
                                                    </div>
                                                   
                                                    
                                                </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.em-wrapper-main-->


