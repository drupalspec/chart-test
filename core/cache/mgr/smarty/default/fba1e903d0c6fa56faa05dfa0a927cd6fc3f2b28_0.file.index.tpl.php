<?php /* Smarty version 3.1.27, created on 2016-05-24 12:25:09
         compiled from "/Users/user1/chart-test/manager/templates/default/workspaces/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:210900910757441df57327c5_02562018%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fba1e903d0c6fa56faa05dfa0a927cd6fc3f2b28' => 
    array (
      0 => '/Users/user1/chart-test/manager/templates/default/workspaces/index.tpl',
      1 => 1461218622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210900910757441df57327c5_02562018',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57441df573fa26_60386016',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57441df573fa26_60386016')) {
function content_57441df573fa26_60386016 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '210900910757441df57327c5_02562018';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>