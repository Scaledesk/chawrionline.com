             
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
<!-- All the jQuery event are writen in custom.js file -->
<script src="<?php echo base_url().'assets/js/'; ?>custom1.js"></script>
<style>
 #myForm{ display: block; margin: 20px auto; background: #eee; border-radius: 10px; padding: 15px }
#progress { position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }
#bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }
#percent { position:absolute; display:inline-block; top:3px; left:48%; }
.hide1{display:none;}
</style>

                <div class="em-wrapper-main">
                    <div class="container container-main">
                        <div class="em-inner-main">
                            <div class="em-wrapper-area02"></div>
                            <div class="em-main-container em-col1-layout">
                                <div class="row">
                                    <div class="em-col-main col-sm-24">
                                        <div class="account-create">
                                            <div class="page-title">
                                                <h1>Payment Details</h1>
                                            </div>
                                            <?php
                                           /* echo $id;*/  
                                            /*echo form_open_multipart('users/uploadReceipt');*/ ?>
                                                <div class="fieldset">
                                                    
                                                   
                                                    <ul class="form-list">
                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="attached" class="required"><em>*</em>Upload Receipt </label>
                                                                    <div class="input-box">
                                                                        
                                                                         <form id="myForm" action="<?php echo base_url('users/uploadReceipt'); ?>" method="post" enctype="multipart/form-data">
                                                                    <input id="file" type="file" size="60" name="file" class="input-text  required-entry">
                                                                    <input type="hidden"name="order_id" value="<?= $id ?>" /><br/>  <br/>
                                                                    <button id="submit" type="submit"  class="button" >Upload</button>
                                                             </form>


                                                                     <!--- Below code will show the progress bar wirh percentage when user click Upload button-->
                                                             <div id="progress" class="hide1">
                                                                    <div id="bar"></div>
                                                                    <div id="percent">0%</div >
                                                            </div>
                                                            <br/>

                                                            <!-- Below code will show the upload status message -->
                                                            <div id="message"></div>
                                                                 </div>
                                                                </div>

                                                               
                                                            </div>

                                                               
                                                           





                                                        </li>
                                                       
                                                       
                                                    </ul>


                                                    <div class="buttons-set">


                                                        <!-- <button type="submit" title="Submit" class="button"><span><span>Upload</span></span>
                                                        </button> -->
                                                        <p class="required">* Required Fields</p>
                                                    </div>
                                                </div>
                                            <!-- </form> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.em-wrapper-main-->