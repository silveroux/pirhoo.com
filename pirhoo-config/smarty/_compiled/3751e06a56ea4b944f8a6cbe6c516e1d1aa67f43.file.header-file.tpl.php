<?php /* Smarty version Smarty-3.0.8, created on 2012-09-27 16:23:43
         compiled from "/home/pirhoo/Lab/Personal/Pirhoo.v2/pirhoo-core/template/html/tool/header-file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7456908665064616fa6ea72-35469468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3751e06a56ea4b944f8a6cbe6c516e1d1aa67f43' => 
    array (
      0 => '/home/pirhoo/Lab/Personal/Pirhoo.v2/pirhoo-core/template/html/tool/header-file.tpl',
      1 => 1348755726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7456908665064616fa6ea72-35469468',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php if (is_array($_smarty_tpl->getVariable('list')->value)&&(sizeof($_smarty_tpl->getVariable('list')->value)>0)){?>      
    <?php echo $_smarty_tpl->getVariable('before')->value;?>

    <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
?>


                <?php if ($_smarty_tpl->getVariable('type')->value=='js'){?>
                <!-- Includes Javascript files -->
                        <script src="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" type="text/javascript"></script>
                <?php }elseif($_smarty_tpl->getVariable('type')->value=='css'){?>
                <!-- Includes CSS files -->
                        <link   href="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" rel="stylesheet" type="text/css" media="all" />
                <?php }?>

    <?php }} ?>
    <?php echo $_smarty_tpl->getVariable('after')->value;?>

<?php }?>
	