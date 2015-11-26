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




        <form action="<?php echo 'products';?>" method="post" class="sky-form boxed" name"formproducts" novalidate="novalidate">

            <header>Seller Add Product </header>
                <div class="products">

                    <div style="float: left" class="products_name"> <input type="text" placeholder="Products Name" name="products_name[]"></div>
                    <div style="float: left"class="products_brand_name"> <input type="text" placeholder="Products Brand Name" name="products_brand_name[]"></div>
                    <div style="float: left"class="products_manufacturer"> <input type="text" placeholder="Manufacturer" name="products_manufacturer[]"></div>
                   
                    <div style="float: left"class="products_substance"> <input type="text" placeholder="Substance" name="products_substance[]"></div>
                    <div style="float: left"class="products_size"> <input type="text" placeholder="Products Size" name="products_size[]"></div>
                    <div style="float: left"class="products_thickness"> <input type="text" placeholder="Thickness" name="products_thickness[]"></div>
                    <div style="float: left"class="products_grain"> <input type="text" placeholder=" Grain" name="products_grain[]"></div>
                    <div style="float: left"class="products_sheets_per_packet"> <input type="text" placeholder="Sheets per Packet" name="products_sheets_per_packet[]"></div>
                     <div style="float: left"class="products_weight"> <input type="text" placeholder="Pkt. Weight " name="products_weight[]"></div>
                    <div style="float: left"class="packets_per_bundle"><input type="text" placeholder="Products Per Bundle" name="packets_per_bundle[]"></div>
                    <div style="float: left"class="products_quantity_on_offer"> <input type="text" placeholder="Quantity on Offer (in pkts)" name="products_quantity_on_offer[]"></div>
                    <div style="float: left"class="products_packing"> <input type="text" placeholder="Products Packing" name="products_packing[]"></div>
                    <div style="float: left"class="products_rate"> <input type="text" placeholder="Products Rate" name="products_rate[]"></div>
                    <div style="float: left"class="products_cenvat_amount"> <input type="text" placeholder="Products CENVAT Amount" name="products_cenvat_amount[]"></div>

                </div>



            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
            <script type="text/javascript">

                $( document ).ready(function() {

                    var rowNum = 0;

                    $(".addmore").click(function() {

                        rowNum++;
                        $("#count_form").innerHTML=rowNum;
                        var row = $("<div id='products-" + rowNum + "' class='products' />");

                        var products_name = $("<div id='products_name_"+rowNum+"' style='float: left' class='products_name'><input type='text'  placeholder='Products Name' name='products_name[]'></div>");
                        var products_brand_name = $("<div id='products_brand_name_"+rowNum+"' style='float: left' class='products_brand_name'><input type='text' placeholder='Products Brand Name' name='products_brand_name[]'></div>");
                        var products_manufacturer = $("<div id='products_manufacturer_"+rowNum+"' style='float: left'  class='products_manufacturer'><input type='text' placeholder='Manufacturer' name='products_manufacturer[]'></div>");
                        var products_substance = $("<div id='products_substance_"+rowNum+"'style='float: left' class='products_substance'><input type='text'  placeholder='Substance'name='products_substance[]'></div>");
                        var products_size = $("<div id='products_size_"+rowNum+"'style='float: left' class='products_size'><input type='text' placeholder=' Products Size' name='products_size[]'></div>");
                        var products_thickness = $("<div id='products_thickness_"+rowNum+"' style='float: left' class='products_thickness'><input type='text' placeholder='Thickness' name='products_thickness[]'></div>");
                        var products_grain = $("<div id='products_grain_"+rowNum+"'style='float: left' class='products_grain'><input type='text' placeholder='Grain' name='products_grain[]'></div>");
                        var products_sheets_per_packet = $("<div id='products_sheets_per_packet_"+rowNum+"' style='float: left' class='products_sheets_per_packet'><input type='text' placeholder='Sheets per Packet'name='products_sheets_per_packet[]'></div>");
                        var products_weight = $("<div id='products_weight_"+rowNum+"' style='float: left' class='products_weight'><input type='text'placeholder='Products Per Bundle' name='products_weight[]'></div>");
                        var packets_per_bundle = $("<div id='packets_per_bundle_"+rowNum+"' style='float: left' class='packets_per_bundle'><input type='text'placeholder='Products Per Bundle' name='packets_per_bundle[]'></div>");
                        var products_quantity_on_offer = $("<div id='products_quantity_on_offer_"+rowNum+"'style='float: left'  class='products_quantity_on_offer'><input type='text'placeholder='Quantity on Offer (in pkts)' name='products_quantity_on_offer[]'></div>");
                        var products_packing = $("<div id='products_packing_"+rowNum+"' style='float: left' class='products_packing'><input type='text' placeholder=' Products Packing'name='products_packing[]'></div>");
                        var products_rate = $("<div id='products_rate_"+rowNum+"' style='float: left' class='products_rate'><input type='text' placeholder='Products Rate' name='products_rate[]'></div>");
                        var products_cenvat_amount = $("<div id='products_cenvat_amount_"+rowNum+"'style='float: left' class='products_cenvat_amount'><input type='text' placeholder='Products CENVAT Amount'name='products_cenvat_amount[]'></div>");

                        $(".products").append(row);
                        products_name.appendTo(row);
                        products_brand_name.appendTo(row);
                        products_manufacturer.appendTo(row);
                        products_substance.appendTo(row);
                        products_size.appendTo(row);
                        products_thickness.appendTo(row);
                        products_grain.appendTo(row);
                        products_sheets_per_packet.appendTo(row);
                        products_weight.appendTo(row);
                        packets_per_bundle.appendTo(row);
                        products_quantity_on_offer.appendTo(row);
                        products_packing.appendTo(row);
                        products_rate.appendTo(row);
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
