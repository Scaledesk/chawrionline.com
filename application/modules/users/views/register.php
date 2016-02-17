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
                                                <h1>Create an Account</h1>
                                            </div>
                                            <form action="<?php echo 'users';?>" method="post" id="form-validate">
                                                <div class="fieldset">
                                                    <input type="hidden" name="success_url" value="">
                                                    <input type="hidden" name="error_url" value="">
                                                    <h2 class="legend">Personal Information</h2>
                                                    <ul class="form-list">
                                                        <li class="fields">
                                                            <div class="customer-name-middlename">

                                                            <div class="field name-lastname">
                                                                    <label for="lastname" class="required"><em>*</em>Last Name</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="lastname" required name="lname" title="Last Name" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>

                                                                <div class="field name-firstname">
                                                                    <label for="firstname" class="required"><em>*</em>First Name</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  required  name="fname" title="First Name" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </li>
                                                         <li class="fields">
                                                            <div class="customer-name-middlename">

                                                            <div class="field name-lastname">
                                                                     <label for="email_address" class="required"><em>*</em>Email Address</label>
                                                                    <div class="input-box">
                                                                         <input type="email"  name="user_name_email" required id="email_address" value="" title="Email Address" class="input-text validate-email required-entry">
                                                                    </div>
                                                                </div>

                                                                <div class="field name-firstname">
                                                                    <label for="email_address" class="required"><em>*</em>Phone Number</label>
                                                                    <div class="input-box">
                                                                         <input type="number"  name="phone" required id="phone" value="" title="Phone Number" class="input-text validate-email required-entry">
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </li>
                                                        
                                                        <li class="fields">
                                                            <div class="field">
                                                                <label for="company_name" >Company Name</label>
                                                                <div class="input-box">
                                                                    <input type="text" name="company_name" id="company_name" title="Company Name" class="input-text required-entry validate-password">
                                                                </div>
                                                            </div>
                                                            <div class="field">
                                                                <label for="tin_number" >Tin Number</label>
                                                                <div class="input-box">
                                                                    <input type="text" name="tin_number"  title="Tin Number" id="tin_number" class="input-text required-entry validate-cpassword">
                                                                    
                                                                </div> 
                                                            </div>
                                                        </li>



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
                                                                    <?php echo form_hidden('todo', 'register'); ?>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="fields">
                                                            <div class="field">
                                                                <label for="address" class="required"><em>*</em>Address</label>
                                                                <div class="input-box">
                                                                   <textarea required name="address" ></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="field">
                                                                <label for="company_address" > Company Address</label>
                                                                <div class="input-box">
                                                                   <textarea  name="company_address" ></textarea>
                                                                </div>
                                                            </div>
                                                        </li>


                                                         <li class="fields">
                                                           <div class="field">
                                                                <label for="password" class="required"><em>*</em>State</label>
                                                                <div class="input-box">
                                                                   <select name="state" required>
                                                                    <?php 
                                                                                foreach ($state as  $row) {
                                                                                  ?>
                                                                                
                                                                                <option><?php echo $row['chawri_states_state']; ?></option>

                                                                             <?php   }

                                                                    ?> 
                                                                   </select>
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
