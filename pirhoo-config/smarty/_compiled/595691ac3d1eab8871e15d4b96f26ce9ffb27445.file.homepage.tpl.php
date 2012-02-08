<?php /* Smarty version Smarty-3.0.6, created on 2011-05-02 14:11:23
         compiled from "/Users/pirhoo/Lab/Web/Influence-Networks/appinc/template/screen/homepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3114481584dbe9f6b064e12-55129408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '595691ac3d1eab8871e15d4b96f26ce9ffb27445' => 
    array (
      0 => '/Users/pirhoo/Lab/Web/Influence-Networks/appinc/template/screen/homepage.tpl',
      1 => 1304338281,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3114481584dbe9f6b064e12-55129408',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<ul class="main_menu">
      <?php $_template = new Smarty_Internal_Template("menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</ul>
<p class="intro step-1">
      Influence Networks is an open-source, collaborative directory of relationships between people, institutions and companies. Each relation has its own level of trustworthiness, so that facts can be distinguished from noise.      
</p>
<p class="intro step-2">
    <a href="http://owni.eu/2011/04/11/influence-networks-the-six-degrees-of-investigative-journalism/" target="_blank">How does it work?</a>
    &bull; <a href="https://github.com/Pirhoo/Influence-Networks/" target="_blank">Contribute to the code!</a>
    &bull; <a href="http://bug.influencenetworks.org/" target="_blank">Report an issue</a>
</p>
<p class="intro step-3">
      Already <?php echo $_smarty_tpl->getVariable('countRelation')->value;?>
 relations added, <?php echo $_smarty_tpl->getVariable('countRelationReview')->value;?>
 reviews and <?php echo $_smarty_tpl->getVariable('countUser')->value;?>
 users registered. 
</p>
