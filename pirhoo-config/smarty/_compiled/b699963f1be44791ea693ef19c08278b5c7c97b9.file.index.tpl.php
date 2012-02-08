<?php /* Smarty version Smarty-3.0.6, created on 2011-05-26 11:02:21
         compiled from "/Users/pirhoo/Lab/Web/Influence-Networks/appinc/template/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10220637204dde171db94791-08524728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b699963f1be44791ea693ef19c08278b5c7c97b9' => 
    array (
      0 => '/Users/pirhoo/Lab/Web/Influence-Networks/appinc/template/index.tpl',
      1 => 1306399251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10220637204dde171db94791-08524728',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<?php if ($_smarty_tpl->getVariable('screen')->value=="relation-add"){?>

      <?php $_template = new Smarty_Internal_Template("screen/relation-add.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
      
<?php }elseif($_smarty_tpl->getVariable('screen')->value=="relation-review"){?>

      <?php $_template = new Smarty_Internal_Template("screen/relation-review.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>     
      
<?php }elseif($_smarty_tpl->getVariable('screen')->value=="relation-visualize"){?>

      <?php $_template = new Smarty_Internal_Template("screen/relation-visualize.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
      
<?php }else{ ?>

      <?php $_template = new Smarty_Internal_Template("screen/homepage.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
      
<?php }?>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

