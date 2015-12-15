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
                                                <h1>Users Information</h1>
                                            </div>
                                            <form action="<?php echo base_url().'users/update';?>" method="post" id="form-validate">
                                                <div class="fieldset">
                                                    <input type="hidden" name="success_url" value="">
                                                    <input type="hidden" name="error_url" value="">

                                                    <h2 class="legend">Users Information <a href="<?php echo base_url().'users/showInformation'?>">Account Information </a> </h2>
                                                    <ul class="form-list">
                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-lastname">
                                                                    <label for="lastname" class="required"><em>*</em>Last Name</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="lastname" value="<?php echo $users_data[0]['chawri_users_lname']; ?>" required name="lname" title="Last Name" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>

                                                                <div class="field name-firstname">
                                                                    <label for="firstname" class="required"><em>*</em>First Name</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  value="<?php echo $users_data[0]['chawri_users_fname']; ?>"required  name="fname" title="First Name" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                        </li>
                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-lastname">
                                                                    <label for="phone" class="required"><em>*</em>Phone Number</label>
                                                                    <div class="input-box">
                                                                        <input type="number" id="phone" value="<?php echo $users_data[0]['chawri_users_phone']; ?>" required name="phone" title="Email" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>

                                                                <div class="field name-firstname">
                                                                    <label for="user_name_email" class="required"><em>*</em>Email Id</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="user_name_email"  value="<?php echo $users_data[0]['chawri_users_username']; ?>"required  name="user_name_email" title="Email" maxlength="255" class="input-text required-entry" readonly>
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                        </li>

                                                      <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-lastname">
                                                                    <label for="phone" class="required"><em>*</em>Address</label>
                                                                    <div class="input-box">
                                                                        <input type="number" id="phone" value="<?php echo $users_data[0]['chawri_users_address']; ?>" required name="phone" title="Email" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>

                                                                <div class="field name-firstname">
                                                                    <label for="user_name_email" class="required"><em>*</em>State</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="user_name_email"  value="<?php echo $users_data[0]['chawri_users_state']; ?>"required  name="user_name_email" title="Email" maxlength="255" class="input-text required-entry" readonly>
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


