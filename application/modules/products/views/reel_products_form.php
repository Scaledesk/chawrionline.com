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

<div class="container">




        <form action="<?php echo 'products/productReel';?>" method="post" class="sky-form boxed" name"formproducts" novalidate="novalidate">

            <header>Seller Add Product </header>
                <div class="products">
                <div class=" row col-sm-24">
                              <div style="float: left" class="products_name col-sm-6"> <select required name="categories[]" class="input-text  required-entry">
                                                                      <?php foreach ($categories as $value) {
                                                                        
                                                                       ?>
                                                                        <option value="<?php echo $value['chawri_categories_id'];?>"> <?php echo $value['chawri_categories_name'];?></option>
                                                                        <?php }?>
                                                                    </select>
                  </div>
                    <div style="float: left" class="products_name col-sm-6"> <input type="text" placeholder="Products Name" name="products_name[]"class='input-text required-entry'></div>
                    <div style="float: left"class="products_brand_name col-sm-6"> <input type="text" placeholder="Products Brand Name" name="products_brand_name[]"class='input-text required-entry'></div>
                    <div style="float: left"class="products_manufacturer col-sm-6"> <input type="text" placeholder="Manufacturer" name="products_manufacturer[]"class='input-text required-entry'></div>
                   </div>
                   <div class=" row col-sm-24">

                    <div style="float: left"class="products_substance col-sm-6"> <input type="number" step="any" minlength="0" placeholder="GSM" name="products_substance[]"class='input-text required-entry'></div>
                    <div style="float: left"class="products_size col-sm-6"> <input type="number" step="any" minlength="0" id="firstname"  required  name="products_size[]" title="  Size" maxlength="255" class=" input-text size-box1"></div>
                                                                        <span>X</span> 
                     <div style="float: left"class="products_size col-sm-6"><input type="number" step="any" minlength="0" id="firstname"  required  name="products_size_one[]" title="  Size" maxlength="255" class="input-text size-box2"></div>
                    </div>
                    <div class=" row col-sm-24">
                    <div style="float: left"class="products_thickness col-sm-6"> <input type="number" step="any" minlength="0" placeholder="Bulk (mic)" name="products_thickness[]"class='input-text required-entry'></div>
                    <div style="float: left"class="products_grain col-sm-6"> <select required  name="products_grain[]" placeholder="Grain"title="Grain" class="input-text required-entry" class=" input-text">
                                                                       <option value=''>Grain</option> 
                                                                        <option>Long</option>
                                                                        <option>Short</option>
                                                                    </select></div>
                    
                    <div style="float: left"class="products_quantity_on_offer col-sm-6"> <input type="number" step="any" minlength="0" placeholder="Quantity on Offer (in pkts)" name="products_quantity_on_offer[]"class='input-text required-entry'></div>
                    <div style="float: left"class="products_packing col-sm-6"> <select required  name="products_packing[]" title="Products Packing"  class="input-text required-entry">
                                                                        <option value=''>Products Packing</option> 
                                                                        <option> Shrink</option>
                                                                        <option>Gunny</option>
                                                                        <option>Wrap</option>
                                                                        <option>Pallet</option>
                                                                        <option>Carton</option>
                                                                        <option>Other</option>
                                                                      </select> </div></div>
                     <div class=" row col-sm-24">                                                 
                    <div style="float: left"class="products_rate col-sm-6"> <input type="number" step="any" minlength="0" placeholder="Products Rate" name="products_rate[]"class='input-text required-entry'></div> 
                    <div style="float: left"class="products_cenvat_amount col-sm-6"> <input type="number" step="any" minlength="0" placeholder="Products CENVAT Amount" name="products_cenvat_amount[]"class='input-text required-entry'/></div><br>
                    </div>
                     <div style="float: left"class="products_reel_no col-sm-6"> <input type="number" step="any" minlength="0" placeholder="Reel No" name="products_reel_no[]"class='input-text required-entry'></div>
                   
                </div>



            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
            <script type="text/javascript">

                $( document ).ready(function() {

                    var rowNum = 0;

                    $(".addmore").click(function() {

                        rowNum++;
                        $("#count_form").innerHTML=rowNum;
                        var row = $("<div id='products-" + rowNum + "' class='products' />");
                        var categories = $("<div class='row col-sm-24'><div id='products_name_"+rowNum+"' style='float: left' class='products_name col-sm-6'><select required name='categories[]' class='input-text  required-entry'><?php foreach ($categories as $value) {?><option value='<?php echo $value['chawri_categories_id'];?>'> <?php echo $value['chawri_categories_name'];?></option><?php }?></select></div><div id='products_name_"+rowNum+"' style='float: left' class=' col-sm-6 products_name'><input type='text'  placeholder='Products Name' name='products_name[]'class='input-text required-entry'></div><div id='products_brand_name_"+rowNum+"' style='float: left' class=' col-sm-6 products_brand_name'><input type='text'required placeholder='Products Brand Name' name='products_brand_name[]'class='input-text required-entry'></div><div id='products_manufacturer_"+rowNum+"' style='float: left'  class=' col-sm-6 products_manufacturer'><input required type='text' placeholder='Manufacturer' name='products_manufacturer[]'class='input-text required-entry'></div>");
                        var products_substance = $(" <div class='row col-sm-24'><div id='products_substance_"+rowNum+"'style='float: left' class='col-sm-6 products_substance'><input type='number' step='any' minlength='0' required  placeholder='GSM'name='products_substance[]'class='input-text required-entry'></div><div id='products_size_"+rowNum+"'style='float: left' class=' col-sm-6 products_size'><input type='number' step='any' minlength='0' id='firstname'  required  name='products_size[]' title=' Size' maxlength='255' class='input-text size-box1'></div><span>X</span> <div id='products_size_"+rowNum+"'style='float: left' class=' col-sm-6 products_size'><input type='number' id='firstname'  required  name='products_size_one[]' title='Size' maxlength='255' class='input-text size-box2'></div><div id='products_thickness_"+rowNum+"' style='float: left' class='col-sm-6 products_thickness'><input type='number' step='any' minlength='0' placeholder='Bulk (mic)' name='products_thickness[]'class='input-text required-entry'></div>");
                        var products_grain = $("<div id='products_grain_"+rowNum+"'style='float: left' class='col-sm-6 products_grain'> <select required  name='products_grain[]' title='Grain' class='input-text required-entry'><option value=''>Grain</option> <option>Long</option><option>Short</option></select></div><div id='products_quantity_on_offer_"+rowNum+"'style='float: left'  class='col-sm-6 products_quantity_on_offer'><input type='number' step='any' minlength='0'placeholder='Quantity on Offer (in pkts)' name='products_quantity_on_offer[]'class='input-text required-entry'></div><div id='products_packing_"+rowNum+"' style='float: left' class=' col-sm-6 products_packing'><select required  name='products_packing[]' title='Products Packing' class='input-text required-entry'><option value=''> Products Packing</option><option> Shrink</option><option>Gunny</option><option>Wrap</option><option>Pallet</option><option>Carton</option><option>Other</option></select></div><div id='products_rate_"+rowNum+"' style='float: left' class='col-sm-6 products_rate'><input type='number' step='any' minlength='0' placeholder='Products Rate' required name='products_rate[]' class='input-text required-entry'></div>");
                        var products_cenvat_amount = $("<div class='row col-sm-24'><div id='products_cenvat_amount_"+rowNum+"'style='float: left' class='col-sm-6 products_cenvat_amount'><input type='number' step='any' minlength='0' required placeholder='Products CENVAT Amount'name='products_cenvat_amount[]' class='input-text required-entry'></div><div id='products_reel_no_"+rowNum+"'style='float: left' class='col-sm-6 products_reel_no'><input type='number' step='any' minlength='0' required placeholder='Reel No'name='products_reel_no[]' class='input-text required-entry'></div><br>");

                        $(".products").append(row);
                        categories.appendTo(row);
                       
                        products_substance.appendTo(row);
                       
                        products_grain.appendTo(row); 
                        
                        products_cenvat_amount.appendTo(row);




                    });

                });
            </script>

            <?php echo form_hidden('todo', 'register'); ?>
            <input type="hidden" id="count_form" name='count_form'/>
            <footer>
                <button type="button" class="addmore">Add More</button>
                <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check"></i>Add Products</button>

            </footer>

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
  
    <script type="text/javascript">

function checkValue(obj)
   {
    
      var val = 0;
        val = document.getElementById("reel").value;
        val1 = document.getElementById("products_name_"+obj);
       // val1 = document.getElementById("reel").value;
        
        alert(val1);


     /*  for( i = 0; i < document.formproducts.sheet.length; i++ )
      {
          alert(val);
           
              val = document.getElementById("sheet").value;
               //val1 = document.getElementById("reel").value;
                

               if(val=='r')
              {
                 
                 
                 var theDiv = document.getElementById('ifpaid');
                   theDiv.style.display='';
               }
                else 
               {
                
                    document.getElementById('ifpaid').style.display='none';
              }
        
    }   */
}   
    </script>


</body>
</html>