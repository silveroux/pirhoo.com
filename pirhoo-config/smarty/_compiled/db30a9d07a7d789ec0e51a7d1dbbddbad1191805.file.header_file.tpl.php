<?php /* Smarty version Smarty-3.0.8, created on 2011-06-29 00:42:10
         compiled from "/Users/pirhoo/Lab/Web/marmhut/Tatooine/marmhut-core/template/html/tool/header_file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18211209244e0a58c21cd0b8-93553607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db30a9d07a7d789ec0e51a7d1dbbddbad1191805' => 
    array (
      0 => '/Users/pirhoo/Lab/Web/marmhut/Tatooine/marmhut-core/template/html/tool/header_file.tpl',
      1 => 1309300882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18211209244e0a58c21cd0b8-93553607',
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
	