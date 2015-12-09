<?php
    $logout=$this->input->get('logout');
    if($logout){
        echo "<div style='text-align:center;' class=' container alert alert-success'>".'you are successfully logged out'."</div>";
    }else{
        getInformUser();
    }
    ?>









                <div class="em-wrapper-main">
                    <div class="container container-main">
                        <div class="em-inner-main">
                            <div class="em-wrapper-area02"></div>
                            <div class="em-main-container em-col1-layout">
                                <div class="row">
                                    <div class="em-col-main col-sm-24">
                                        <div class="account-create">
                                            <div class="page-title">
                                                <h1>Complaints</h1>
                                            </div>
                                            <div class="table-responsive">
                                          <table class="table table-bordered">
                                              <th>Buyer Name</th>
                                              <th>Raise Issue</th>
                                          

                                            <?php 
                                            foreach ($complaint as $row) {
                                                ?>
                                                <tr>

                                               
                                               <td><?php echo $row['chawri_complaint_buyer_name'];?></td>
                                               <td><?php echo $row['chawri_complaint_message'];?></td>
                                               </tr>

                                                <?php
                                            }
                                             ?>
                                             </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
  