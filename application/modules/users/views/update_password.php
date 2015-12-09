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
                                                <h1>Update Password</h1>
                                            </div>
                                            <form action="<?php echo 'users/recallMail';?>" method="post" id="form-validate">
                                                <div class="fieldset">
                                                    <input type="hidden" name="success_url" value="">
                                                    <input type="hidden" name="error_url" value="">
                                                    
                                                    <ul class="form-list">
                                                        
                                                        
                                                       
                                                        <li class="fields">
                                                            <div class="field">
                                                                <label for="password" class="required"><em>*</em>Password</label>
                                                                <div class="input-box">
                                                                    <input type="password" name="password" required id="password" title="Password" class="input-text required-entry validate-password">
                                                                </div>
                                                            </div>   
                                                            <div class="field">
                                                                <label for="confirmation" class="required"><em>*</em>Confirm Password</label>
                                                                <div class="input-box">
                                                                    <input type="password" name="confirm_password" onchange="myFunction()" required title="Confirm Password" id="confirmation" class="input-text required-entry validate-cpassword">
                                                                   
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

