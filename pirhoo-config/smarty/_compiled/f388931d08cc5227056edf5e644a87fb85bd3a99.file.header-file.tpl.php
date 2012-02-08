<?php /* Smarty version Smarty-3.0.8, created on 2011-07-09 17:52:54
         compiled from "/Users/pirhoo/Lab/Web/Pirhoo/pirhoo-core/template/html/tool/header-file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5537542854e1879562f28c8-38155501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f388931d08cc5227056edf5e644a87fb85bd3a99' => 
    array (
      0 => '/Users/pirhoo/Lab/Web/Pirhoo/pirhoo-core/template/html/tool/header-file.tpl',
      1 => 1309300882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5537542854e1879562f28c8-38155501',
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
	