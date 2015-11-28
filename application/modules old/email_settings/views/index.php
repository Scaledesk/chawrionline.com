<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/3/2015
 * Time: 4:07 PM
 */?>


<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/1/2015
 * Time: 6:57 PM
 */ ?>



<?php

    getInformUser();
echo form_open('hlu_email_settings')?>
    <div class="col-xs-2">

<input type="text" id="smtp_host" class="form-control" name="smtp_host" placeholder="SMTP HOST" value="<?=$email_settings['smtp_host']?>"/><br/>
    </div>
        <div class="col-xs-2">

        <input type="email" id="smtp_user" class="form-control" name="smtp_user" placeholder="SMTP EMAIL" value="<?=$email_settings['smtp_user']?>"/><br/>
        </div>
            <div class="col-xs-2">
            <input type="password"  id="smtp_pass" name="smtp_pass" placeholder="SMTP PASSWORD" value="<?=$email_settings['smtp_pass']?>"/><br/>
            </div>
                <div class="col-xs-2">
                <input type="number"  id="smtp_port" name="smtp_port" class="btn btn-default" placeholder="SMTP PORT" min="1" value="<?=$email_settings['smtp_port']?>"/><br/>
                </div>
                    <?php echo form_hidden('todo','udeast003');?>
<input type="submit" class="btn btn-default" value="Update Email Settings" />
<?php
echo form_close();
?>
