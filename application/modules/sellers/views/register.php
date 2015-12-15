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
                                            <form action="<?php echo 'sellers';?>" method="post" id="form-validate">
                                                <div class="fieldset">
                                                    <input type="hidden" name="success_url" value="">
                                                    <input type="hidden" name="error_url" value="">
                                                    <h2 class="legend">Company Information </h2>

                                                    <ul class="form-list">
                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="user_name_email" class="required"><em>*</em>Email Address</label>
                                                                    <div class="input-box">
                                                                        <input type="email" id="firstname"  required  name="user_name_email" title="Email Address" maxlength="255" class="input-text validate-email required-entry">
                                                                    </div>
                                                                </div>

                                                                <div class="field name-lastname">
                                                                    <label for="company_name" class="required"><em>*</em>Company Name</label>
                                                                    <div class="input-box">
                                                                        <input type="text" required name="company_name" title="Company Name" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="address" class="required"><em>*</em>Address</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname"  required  name="address" title="Address" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="field name-middlename">
                                                                    <label for="middlename">Middle Name/Initial</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="middlename" name="middlename" value="" title="Middle Name/Initial" class="input-text ">
                                                                    </div>
                                                                </div> -->
                                                                <div class="field name-lastname">
                                                                    <label for="state" class="required"><em>*</em>State</label>


                                                                    <div class="input-box">

                                                                        <?php // print_r($state) ;?>
                                                                          <select name="state" class="select" required class="input-text required-entry">
                                                                            <option >Select</option>
                                                                            <?php foreach ($state as $row) {

                                                                            ?>
                                                                              <option value="<?php echo $row['chawri_states_state'];?>"><?php echo $row['chawri_states_state'];?></option>

                                                                           <?php }?>
                                                                          </select>

                                                                       <!--  <input type="text" id="lastname"  name="lname" title="Last Name" maxlength="255" > -->

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="pin" class="required"><em>*</em>Pin Code</label>
                                                                    <div class="input-box">
                                                                        <input type="number" id="firstname"  required  name="pin" title="Pin Code" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                <div class="field name-middlename">
                                                                    <label for="alternet_email">Alternate Email</label>
                                                                    <div class="input-box">
                                                                        <input type="email" id="middlename" name="alternet_email" value="" title="Alternate Email" class="input-text ">
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </li>
                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                            <div class="field name-lastname">
                                                                    <label for="landline" class="required"><em>*</em>Landline No.</label>
                                                                    <div class="input-box">
                                                                        <input type="number" id="lastname" required name="landline" title="Landline No." maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>
                                                                <div class="field name-firstname">
                                                                    <label for="phone" class="required"><em>*</em>Mobile</label>
                                                                    <div class="input-box">
                                                                        <input type="number" id="firstname"  required  name="phone" title="Phone" maxlength="255" class="input-text required-entry">
                                                                    </div>
                                                                </div>

                                                                <!-- <div class="field name-middlename">
                                                                    <label for="middlename">Middle Name/Initial</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="middlename" name="middlename" value="" title="Middle Name/Initial" class="input-text ">
                                                                    </div>
                                                                </div> -->
                                                                
                                                            </div>
                                                        </li>
                                                        <!-- -->

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
                                                                    <input type="password" name="confirm_password" onchange="myFunction()"  required title="Confirm Password" id="confirmation" class="input-text required-entry validate-cpassword">
                                                                    <?php echo form_hidden('todo', 'register'); ?>
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



<script>
function myFunction() {
    var pass = document.getElementById('password').value;
    var cpass = document.getElementById('confirmation').value;
  if(pass!=cpass){
    alert("password does not match");
    document.getElementById('confirmation').value = "";
    document.getElementById('confirmation').focus();
    //return true;
  }
  //return true;
}
</script>