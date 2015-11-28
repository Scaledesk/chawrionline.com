<?php
    $logout=$this->input->get('logout');
    if($logout){
        echo "<div style='text-align:center;' class=' container alert alert-success'>".'you are successfully logged out'."</div>";
    }else{
        getInformUser();
    }
    ?>

<div class="padding-15">


<div class="login-box">

        <form action="<?php echo base_url().'categories';?>" method="post" class="sky-form boxed"  novalidate="novalidate">
           <fieldset>
            <header>Add Categories</header>
                <div class="products">
                    
                     <div style="float: left"class="products_cenvat_amount"> <input type="text"class="input-text" Placeholder="Categories Name" name="categories"></div>
                    
                    
                   
                </div>
                 <footer>
                      <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check"></i>Add</button>
                 </footer>
              </fieldset>
           
            

        </form>
      </div>

    </div>

  
