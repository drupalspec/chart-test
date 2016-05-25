<?php /* Smarty version 3.1.27, created on 2016-05-24 12:24:22
         compiled from "/Users/user1/chart-test/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:154232762057441dc653a479_59016309%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '813668ae2e2eef11333c463c055e380b31ab2255' => 
    array (
      0 => '/Users/user1/chart-test/manager/templates/default/welcome.tpl',
      1 => 1461218622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154232762057441dc653a479_59016309',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57441dc6540590_22614306',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57441dc6540590_22614306')) {
function content_57441dc6540590_22614306 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '154232762057441dc653a479_59016309';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>