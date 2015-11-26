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

<div class="padding-15">


<div class="login-box">

        <form action="<?php echo base_url().'products/showForm';?>" method="post" class="sky-form boxed" name"formproducts" novalidate="novalidate">
           <fieldset>
            <header>Seller Add Product </header>
                <div class="products">
                    
                     <div style="float: left"class="products_cenvat_amount"> <input type="radio" value="sheet" name="reel">Sheet</div>
                     <div style="float: left"class="products_cenvat_amount"> <input type="radio" value="reel" name="reel">Reel</div>
                    
                   
                </div>
                 <footer>
                      <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check"></i>Show </button>
                 </footer>
              </fieldset>
           
               </div>
               

           

        </form>


    </div>




<!-- MODAL -->
<div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
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

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- /MODAL -->


<!-- JAVASCRIPT FILES -->
<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
<script type="text/javascript" src="assets\plugins\jquery\jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="assets\js\app.js"></script>

<!-- PAGE LEVEL SCRIPTS -->
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
