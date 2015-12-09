    <?php
    $logout=$this->input->get('logout');
    if($logout){
        echo "<div style='text-align:center;' class=' container alert alert-success'>".'you are successfully logged out'."</div>";
    }else{
        getInformUser();
    }
    ?>
<!--        <div class="padding-15">

            <div class="login-box">
 -->
                <!--
                <div class="alert alert-danger">Complete all fields!</div>
                -->

                <!-- registration form -->
                <!-- <form action="<?php echo 'sellers';?>" method="post" class="sky-form boxed" novalidate="novalidate">
                    <header><i class="fa fa-users"></i> Create Seller Account </header>

                    <fieldset>
                        <label class="input">
                            <i class="icon-append fa fa-envelope"></i>
                            <input type="text" placeholder="Email address" name="user_name_email">
                            <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
                        </label>

                        <label class="input">
                            <i class="icon-append fa fa-lock"></i>
                            <input type="password" placeholder="Password" name="password">
                            <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
                        </label>

                        <label class="input">
                            <i class="icon-append fa fa-lock"></i>
                            <input type="password" placeholder="Confirm password" name="confirm_password">
                            <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
                        </label>

                        <label class="input">

                            <input type="text" placeholder="Company Name" name="company_name">
                            <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
                        </label>
                        <label class="input">

                            <input type="text" placeholder="Address" name="address">
                            <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
                        </label>
                        <label class="input" > -->

                            <!--<input type="text" placeholder="State" name="state">
                            <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>-->
                        <!-- </label>
                        <label class="input">

                            <input type="number" placeholder="Pin Code" name="pin">
                            <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
                        </label>
                        <label class="input">

                            <input type="number" placeholder="Mobile" name="phone">
                            <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
                        </label>

                        <label class="input">

                            <input type="number" placeholder=" Landline No." name="landline">
                            <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
                        </label> -->
                        <!--<label class="input">

                            <input type="text" placeholder="Services Tax No" name="services_tax_no">
                            <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
                        </label>
                        <label class="input">

                            <input type="text" placeholder="Tan No" name="tan_no">
                            <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>
                        </label>
-->
<!--
                    </fieldset>



                    <footer>
                        <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check"></i> Create Account</button>
                    </footer>

                </form>


            </div>

        </div> -->


        <!-- MODAL -->
        <!-- <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                        <h4 class="modal-title" id="myModal">Terms &amp; Conditions</h4>
                    </div>



                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="terms-agree"><i class="fa fa-check"></i> I Agree</button>

                        <button type="button" class="btn btn-danger pull-left"><i class="fa fa-print"></i> Print</button>
                    </div>

                </div> --><!-- /.modal-content --
            </div><!-- /.modal-dialog --
        </div>
        <!-- /MODAL -->


    <!--    <!-- JAVASCRIPT FILES --
        <script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
        <script type="text/javascript" src="assets\plugins\jquery\jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="assets\js\app.js"></script>

        <!-- PAGE LEVEL SCRIPTS --
        <script type="text/javascript">

            /**
                Checkbox on "I agree" modal Clicked!
            **/
            jQuery("#terms-agree").click(function(){
                jQuery('#termsModal').modal('toggle');

                // Check Terms and Conditions checkbox if not already checked!
                if(!jQuery("#checked-agree").checked) {
                    jQuery("input.checked-agree").prop('checked', true);
                }

            });
        </script>

    </body>
</html>



 -->




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
                                                    <h2 class="legend">Company Information</h2>
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
  if(pass!=cpass){
    alert("password does not match");
    document.getElementById('confirmation').value = "";
    document.getElementById('confirmation').focus();
    //return true;
  }
  //return true;
}
</script>