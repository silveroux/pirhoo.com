<?php /* Smarty version Smarty-3.0.8, created on 2011-07-02 14:38:23
         compiled from "/Users/pirhoo/Lab/Web/marmhut/Tatooine/marmhut-core/template/html/sub/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15694023454e0f113f2eab06-63385845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd0d0c733b756a802bf1e82848732bb510c45e5a' => 
    array (
      0 => '/Users/pirhoo/Lab/Web/marmhut/Tatooine/marmhut-core/template/html/sub/header.tpl',
      1 => 1309610026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15694023454e0f113f2eab06-63385845',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="ie6 ie"><![endif]-->
<!--[if IE 7]>   <html class="ie7 ie"><![endif]-->
<!--[if IE 8]>   <html class="ie8 ie"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-ie"><!--<![endif]-->
    <head lang="">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width; initial-scale=1, user-scalable=no, maximum-scale=1"/>

        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="canonical" href="<?php echo @SITE_URL;?>
" />

        <title>Marmhut &rsaquo; <?php echo $_smarty_tpl->getVariable('screen_title')->value;?>
</title>

        <?php $_template = new Smarty_Internal_Template('html/tool/header-file.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('type','css');$_template->assign('list',$_smarty_tpl->getVariable('files_stylesheet')->value);$_template->assign('after','');$_template->assign('before',''); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
        <?php $_template = new Smarty_Internal_Template('html/tool/header-file.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('type','js');$_template->assign('list',$_smarty_tpl->getVariable('files_javascript')->value);$_template->assign('after','');$_template->assign('before',''); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

    </head>

    <body onload="window.scrollTo(0, 1)">
        
        <h1 class="fhidden">Marmhut &rsaquo; <?php echo $_smarty_tpl->getVariable('screen_title')->value;?>
</h1>
        
        <?php $_template = new Smarty_Internal_Template('html/sub/header-bar.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>