<?php /* Smarty version 3.1.27, created on 2016-05-24 12:24:01
         compiled from "/Users/user1/chart-test/setup/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16151985257441db150a536_27628182%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32b116a2a45f01c0847bd18fa5f63eea27bbb64b' => 
    array (
      0 => '/Users/user1/chart-test/setup/templates/footer.tpl',
      1 => 1461218622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16151985257441db150a536_27628182',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57441db151f542_13941405',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57441db151f542_13941405')) {
function content_57441db151f542_13941405 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/Users/user1/chart-test/core/model/smarty/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '16151985257441db150a536_27628182';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>