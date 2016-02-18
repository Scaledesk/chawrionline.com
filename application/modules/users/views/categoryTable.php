<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
<div style="overflow: auto; padding: 10px 15px 10px 15px; border:2px solid #bbbbbb; border-radius: 5px; margin: 20px;">

    <table id="example" class="display " cellspacing="0" width="100%">
        <thead>
        <tr>
        <th> Category</th>
            <th> Name</th>
            <?php  if(islogin()){  if( $this->session->userdata['user_data'][0]['role']=='sellers'){}else{?>
            <th>Buy Now</th> <?php }}else{ ?><th>Buy Now</th> <?php } ?>
            <th>Brand Name</th>
            <th>Manufacturer</th>
            <th>GSM</th>
            <th> Bulk</th>
           <th>Size(cms)</th>
          

            <th>Grain</th>
            <th> Sheets Per Packet</th>
            <th> Pkt. Weight</th>
            <th>Packets Per Bundle</th>
            <th>Qty. on Offer</th>
            <th>Packing</th>
            <th>Rate</th>
            <th>CENVAT Amount</th>

        </tr>
        </thead>


        <tbody>
        <?php
        // print_r($data);
        foreach($data as $rows){
            ?>
            <tr style="text-transform: uppercase;">
                <!-- <td>
                  <input type="checkbox" class="checkboxes" value="1">
                </td> -->
                <td>
                    <?php echo $rows['chawri_categories_name']; ?>
                </td>
                <td>
                    <?php echo $rows['chawri_products_name']; ?>
                </td>

                 <?php   if(islogin()){  if( $this->session->userdata['user_data'][0]['role']=='sellers'){}else{?> <td><a href="<?php echo base_url().'products/getProducts/'.$rows['chawri_products_id'];?>">Buy Now</a></td>
                 <?php } }else{ ?>

                    <td><a style="color: green;" href="<?php echo base_url().'products/getProducts/'.$rows['chawri_products_id'];?>">Buy Now</a></td>
                   <?php } ?>
                <!--  <td><a href="#">Buy Now</a></td> -->
                <td>
                    <?php echo $rows['chawri_products_brand_name']; ?>
                </td>
                <td>
                    <?php echo $rows['chawri_products_manufacturer']; ?>
                </td>
                <td>
                    <?php echo $rows['chawri_products_substance']; ?>
                </td>
                <td>
                    <?php echo $rows['chawri_products_thickness']; ?>
                </td>
               <td>
                   <?php if($rows['chawri_products_size_w']){ echo $rows['chawri_products_size_w']; ?>
                        X
                  <?php echo $rows['chawri_products_size_h'];}else{ echo $rows['chawri_products_reel_size']; } ?>

             </td>



                <td>
                    <?php echo $rows['chawri_products_grain']; ?>
                </td>
                <td>
                    <?php echo $rows['chawri_products_sheets_per_packet']; ?>
                </td>


                <td>
                    <?php echo $rows['chawri_products_weight']; ?>
                </td>

                <td>
                    <?php echo $rows['chawri_products_packets_per_bundle']; ?>
                </td>
                <td>
                    <?php echo $rows['chawri_products_quantity_on_offer']; ?>
                </td>
                <td>
                    <?php echo $rows['chawri_products_packing']; ?>
                </td>
                <td>
                    <?php echo $rows['chawri_products_rate']; ?>
                </td>
                <td>
                    <?php echo $rows['chawri_products_cenvat_amount']; ?>
                </td>


            </tr>
        <?php }?>


        </tbody>
    </table>
</div>