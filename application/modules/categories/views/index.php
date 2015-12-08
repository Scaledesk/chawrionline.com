<?php
    $logout=$this->input->get('logout');
    if($logout){
        echo "<div style='text-align:center;' class=' container alert alert-success'>".'you are successfully logged out'."</div>";
    }else{
        getInformUser();
    }
    ?>



   <!-- <div class="container">

   <div class="rows">
        <form action="<?php echo base_url().'categories';?>" method="post" class="sky-form boxed"  novalidate="novalidate">
           
           
               <label>Add Categories</label>
                <div class="products">
                    
                     <div style="float: left"class="products_cenvat_amount"> <input type="text"class="input-text" Placeholder="Categories Name" name="categories"></div>
                    
                     <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check"></i>Add</button>
                 
                   
                </div>
                
                     
            
           
            

        </form>
      
 </div>
  </div> -->





                <div class="em-wrapper-main">
                    <div class="container container-main">
                        <div class="em-inner-main">
                            <div class="em-wrapper-area02"></div>
                            <div class="em-main-container em-col1-layout">
                                <div class="row">
                                    <div class="em-col-main col-sm-24">
                                        <div class="account-create">
                                            <div class="page-title">
                                                <h1>Add Categories</h1>
                                            </div>
                                            <form  action="<?php echo base_url().'categories';?>" method="post" id="form-validate" name"formproducts">
                                                <div class="fieldset">
                                                    

                                                    <ul class="form-list">

                                                    

                                                        <li class="fields">      
                                                            <div class="customer-name-middlename">     
                                                                <div class="field name-firstname">
                                                                    <label for="products_name" class="required"><em>*</em> Categories Name</label>
                                                                    <div class="input-box">
                                                                        <input type="text" id="firstname" required  name="categories" title="Products Name" maxlength="255" class="input-text validate-email required-entry">
                                                                    </div>
                                                                </div>                                                         
                                                              </div>
                                                        </li>

                                                       
                                                       
                                                    </ul>
                                                    
                                                   
                                                    <div class="buttons-set">
                                                        
                                                        
                                                        <button type="submit" title="Submit" class="button"><span><span>Add</span></span>
                                                        
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
                </div>
  