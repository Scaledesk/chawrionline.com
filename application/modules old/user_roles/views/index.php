<?php  defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: tushar
 * Date: 15/9/15
 * Time: 1:03 AM
 */
echo form_open('user_roles');
?>
<input type="text" placeholder="role name" name="roles_name" id="roles_name" />
<?php echo form_hidden('todo', 'insert_roles'); ?>
    <input type="submit" value="Insert Role"/>
<?
echo form_close();