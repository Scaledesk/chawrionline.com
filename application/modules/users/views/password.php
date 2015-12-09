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
                                                <h1>Update Password</h1>
                                            </div>
                                            <form action="<?php echo base_url().'users/forgetPwd';?>" method="post" id="form-validate">
                                                <div class="fieldset">
                                                    <input type="hidden" name="success_url" value="">
                                                    <input type="hidden" name="error_url" value="">
                                                    
                                                    <ul class="form-list">
                                                       
                                                        <li>
                                                            <label for="email" class="required"><em>*</em>Email Address</label>
                                                            <div class="input-box">
                                                                <input type="email"  name="email" required id="email"  title="Email Address" class="input-text validate-email required-entry">
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


