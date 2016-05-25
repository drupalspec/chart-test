<?php /* Smarty version 3.1.27, created on 2016-05-24 13:11:34
         compiled from "/Users/user1/chart-test/manager/templates/default/element/tv/renders/input/listbox-single.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1236706943574428d6743c37_86283890%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '468a09f59757dbf0b24015b8afd63f038fccd8bb' => 
    array (
      0 => '/Users/user1/chart-test/manager/templates/default/element/tv/renders/input/listbox-single.tpl',
      1 => 1461218620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1236706943574428d6743c37_86283890',
  'variables' => 
  array (
    'tv' => 0,
    'opts' => 0,
    'item' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_574428d6837b26_29097096',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_574428d6837b26_29097096')) {
function content_574428d6837b26_29097096 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1236706943574428d6743c37_86283890';
?>
<select id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
">
<?php
$_from = $_smarty_tpl->tpl_vars['opts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['selected']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</option>
<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
</select>


<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'combo'
        ,transform: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,id: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,triggerAction: 'all'
        ,width: 400
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>

        <?php if ($_smarty_tpl->tpl_vars['params']->value['title']) {?>,title: '<?php echo $_smarty_tpl->tpl_vars['params']->value['title'];?>
'<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['listWidth']) {?>,listWidth: <?php echo $_smarty_tpl->tpl_vars['params']->value['listWidth'];
}?>
        ,maxHeight: <?php if ($_smarty_tpl->tpl_vars['params']->value['maxHeight']) {
echo $_smarty_tpl->tpl_vars['params']->value['maxHeight'];
} else { ?>300<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['typeAhead']) {?>
            ,typeAhead: true
            ,typeAheadDelay: <?php if ($_smarty_tpl->tpl_vars['params']->value['typeAheadDelay'] && $_smarty_tpl->tpl_vars['params']->value['typeAheadDelay'] != '') {
echo $_smarty_tpl->tpl_vars['params']->value['typeAheadDelay'];
} else { ?>250<?php }?>
        <?php } else { ?>
            ,editable: false
            ,typeAhead: false
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['listEmptyText']) {?>
            ,listEmptyText: '<?php echo $_smarty_tpl->tpl_vars['params']->value['listEmptyText'];?>
'
        <?php }?>
        ,forceSelection: <?php if ($_smarty_tpl->tpl_vars['params']->value['forceSelection'] && $_smarty_tpl->tpl_vars['params']->value['forceSelection'] != 'false') {?>true<?php } else { ?>false<?php }?>
        ,msgTarget: 'under'

    
        ,listeners: { 'select': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});

// ]]>
<?php echo '</script'; ?>
>
<?php }
}
?>