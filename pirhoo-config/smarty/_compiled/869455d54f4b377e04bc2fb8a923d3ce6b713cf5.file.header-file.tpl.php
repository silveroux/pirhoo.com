<?php /* Smarty version Smarty-3.0.8, created on 2011-08-26 10:47:36
         compiled from "/Users/pierreromera/Lab/Web/Pirhoo/pirhoo-core/template/html/tool/header-file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14693649454e575da8d32409-89795017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '869455d54f4b377e04bc2fb8a923d3ce6b713cf5' => 
    array (
      0 => '/Users/pierreromera/Lab/Web/Pirhoo/pirhoo-core/template/html/tool/header-file.tpl',
      1 => 1309300882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14693649454e575da8d32409-89795017',
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
	