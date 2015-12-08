<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/16/2015
 * Time: 2:30 PM
 */?>

<?php
    $logout=$this->input->get('logout');
    if($logout){
        echo "<div style='text-align:center;' class=' container alert alert-success'>".'you are successfully logged out'."</div>";
    }else{
        getInformUser();
    }
    ?>

<div class="padding-15 container">


<div class="login-box">

        <form action="<?php echo base_url().'products/showForm';?>" method="post" class="sky-form boxed" name"formproducts" novalidate="novalidate">
           <fieldset>
            <header> <h3>Seller Add Product</h3> </header>
                <div class="products">
                    
                     <div style="float: left;margin-left: 10px;"class="input-text"> <input type="radio" value="sheet" name="reel">Sheet</div>
                     <div style="float: left;margin-left: 10px;"class="input-text"> <input type="radio" value="reel" name="reel">Reel</div>
                    
                   <div style="float: left;margin-left: 19px;"> <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check"></i>Show </button> </div>
                </div>
                 
                     
                 
              </fieldset>
           
             
               

           

        </form>
  </div>

    </div>


