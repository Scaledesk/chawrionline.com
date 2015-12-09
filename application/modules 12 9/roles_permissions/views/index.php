<?php  defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: tushar
 * Date: 15/9/15
 * Time: 1:03 AM
 */
echo form_open('roles_permissions');
?>
    <div class="col-xs-2">
<select name="roles_id" class="form-control" >
    <option value="">Select role</option>
    <?php foreach($roles as $role_id=>$role) {?><option value=<?=$role_id?>><?=ucfirst($role)?></option><?php }?>
</select>
    </div>
    <div class="col-xs-2">
    <select name="permissions_id" class="form-control" >
        <option value="">Select permission</option>
        <?php foreach($permissions as $permission_id=>$permission) {?><option value=<?=$permission_id?>><?=ucfirst($permission)?></option><?php }?>
    </select>
    </div>
<?php echo form_hidden('todo', 'add_permissions_to_roles'); ?>
    <div class="col-xs-2">
    <input type="submit" class="btn btn-default" value="Add permission to role"/>
        </div>
<?
echo form_close();