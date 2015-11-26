
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
                                        <div class="account-login">
                                            <div class="page-title em-box-02">
                                                <div class="title-box">
                                                    <h1></h1>
                                                </div>
                                            </div>
                                            <form action="<?php echo 'users/contactInsert';?>" method="post" id="login-form">
                                                <input name="form_key" type="hidden" value="W2ZAZqxDCT2TpZYs">
                                                <div class="col2-set">
                                                    <div class="col-1 new-users">
                                                    <div class="content">
                                                               <h1> Chawri Online </h1>
                                                               <h5> The Paper Exchange</h5>

                                                               <p>
                                                                   Okhla,  New Delhi -110019
                                                               </p>
                                                               

                                                     </div>  
                                                        </div>
                                                    
                                                    <div class="col-2 registered-users">
                                                        <div class="content">
                                                            <h1>Contact Us</h1>
                                                           
                                                            <ul class="form-list">
                                                             <li>
                                                                    <label for="pass" class="required">Name</label>
                                                                    <div class="input-box">
                                                                        <input type="text" name="name"  required class="input-text required-entry validate-password" id="pass" title="Name">
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <label for="email" class="required"><em>*</em>Email Address</label>
                                                                    <div class="input-box">
                                                                        <input type="text" name="email" required value="" id="email" class="input-text required-entry validate-email" title="Email Address">
                                                                    </div>
                                                                </li>
                                                               
                                                                <li>
                                                                    <label for="query" class="required"><em>*</em>Query</label>
                                                                    <div class="input-box">
                                                                    <textarea  type="text" name="query" required  class="textarea-text required-entry"></textarea>
                                                                       <input name="todo" type="hidden" value="sellers">
                                                                    </div>
                                                                </li> 
                                                            </ul>
                                                            
                                                            <div id="window-overlay" class="window-overlay" style="display:none;"></div>
                                                            <div id="remember-me-popup" class="remember-me-popup" style="display:none;">
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="buttons-set">
                                                            <button type="submit" class="button" title="Submit" name="send" id="send2"><span><span>Submit</span></span>
                                                       
                                                           
                                                        </div>
                                                    </div>
                                                    </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div><!-- /.account-login -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


               