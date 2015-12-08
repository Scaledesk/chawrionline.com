
                <div class="em-wrapper-main">
                    <div class="container container-main">
                        <div class="em-inner-main">
                            <div class="em-wrapper-area02"></div>
                            <div class="em-main-container em-col1-layout">
                                <div class="row">
                                    <div class="em-col-main col-sm-24">
                                        <div class="account-create">
                                            <div class="page-title">
                                                <h1>Upload Products</h1>
                                            </div>
                                            <?php
                                           /* echo $id;*/  
                                            echo form_open_multipart('products/import'); ?>
                                                <div class="fieldset">
                                                    
                                                    
                                                    <ul class="form-list">
                                                        <li class="fields">
                                                            <div class="customer-name-middlename">
                                                                <div class="field name-firstname">
                                                                    <label for="attached" class="required"><em>*</em>Upload Excel File (Only CSV formate) </label>
                                                                    <div class="input-box">
                                                                        <input type="file" id="attached"  required  name="name" title="Upload Products"  class="input-text  required-entry">
                                                                         
                                                                    </div>
                                                                </div>

                                                               
                                                            </div>
                                                        </li>
                                                       
                                                       
                                                    </ul>


                                                    <div class="buttons-set">


                                                        <button type="submit" title="Submit" class="button"><span><span>Upload</span></span>
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

