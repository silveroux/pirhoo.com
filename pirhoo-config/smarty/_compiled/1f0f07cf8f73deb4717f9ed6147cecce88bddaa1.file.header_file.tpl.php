<?php /* Smarty version Smarty-3.0.8, created on 2011-06-26 23:00:24
         compiled from "/Users/pirhoo/Lab/Web/marmhut/Tatooine/marmhut-core/template/html/sub/header_file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8038154584e079de80baaa3-02644804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f0f07cf8f73deb4717f9ed6147cecce88bddaa1' => 
    array (
      0 => '/Users/pirhoo/Lab/Web/marmhut/Tatooine/marmhut-core/template/html/sub/header_file.tpl',
      1 => 1299081520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8038154584e079de80baaa3-02644804',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php if (is_array($_smarty_tpl->getVariable('list')->value)&&(sizeof($_smarty_tpl->getVariable('list')->value)>0)){?>
      <!--
            for each includes file (if includes list is not empty)
      -->
	<?php echo $_smarty_tpl->getVariable('before')->value;?>

	<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
?>
		<?php $_smarty_tpl->tpl_vars['full'] = new Smarty_variable($_smarty_tpl->tpl_vars['file']->value, null, null);?>
		
            <?php if (!$_smarty_tpl->getVariable('norecurse')->value&&is_dir(".".($_smarty_tpl->getVariable('full')->value))){?>
            
			<?php $_template = new Smarty_Internal_Template('header_file.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('norecurse',true);$_template->assign('list',substr(glob(".".($_smarty_tpl->getVariable('full')->value)."/*"),2)); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
                  
		<?php }elseif(is_file(".".($_smarty_tpl->getVariable('full')->value))){?>
            
			<?php if ($_smarty_tpl->getVariable('type')->value=='js'){?>
                        <!-- Includes Javascript files -->
				<script type="text/javascript" src=".<?php echo $_smarty_tpl->getVariable('full')->value;?>
"></script>
			<?php }elseif($_smarty_tpl->getVariable('type')->value=='css'){?>
                        <!-- Includes CSS files -->
				<link href=".<?php echo $_smarty_tpl->getVariable('full')->value;?>
" rel="stylesheet" type="text/css" media="all" />
			<?php }?>
                  
		<?php }?>
	<?php }} ?>
	<?php echo $_smarty_tpl->getVariable('after')->value;?>

<?php }?>
	