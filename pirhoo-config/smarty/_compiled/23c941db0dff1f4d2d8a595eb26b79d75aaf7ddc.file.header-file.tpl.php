<?php /* Smarty version Smarty-3.0.8, created on 2012-01-31 14:21:08
         compiled from "/Users/pirhoo/Lab/Web/Personal/Pirhoo.v2/pirhoo-core/template/html/tool/header-file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2448466784f27eac4707441-26609359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23c941db0dff1f4d2d8a595eb26b79d75aaf7ddc' => 
    array (
      0 => '/Users/pirhoo/Lab/Web/Personal/Pirhoo.v2/pirhoo-core/template/html/tool/header-file.tpl',
      1 => 1318716430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2448466784f27eac4707441-26609359',
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
	