<?php /* Smarty version Smarty-3.0.8, created on 2011-07-17 19:42:42
         compiled from "/Users/pirhoo/Lab/Web/Pirhoo/pirhoo-core/template/html/sub/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3335306464e231f126ef946-23670859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c03bb49cca8b8c6bdc36d188f3862c99b8c3225' => 
    array (
      0 => '/Users/pirhoo/Lab/Web/Pirhoo/pirhoo-core/template/html/sub/header.tpl',
      1 => 1310924560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3335306464e231f126ef946-23670859',
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
        
        <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis+Light&v1' rel='stylesheet' type='text/css'>
        
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="canonical" href="<?php echo @SITE_URL;?>
" />

        <title>Pierre Romera (Pirhoo) &rsaquo; <?php echo $_smarty_tpl->getVariable('screen_title')->value;?>
</title>

        <?php $_template = new Smarty_Internal_Template('html/tool/header-file.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('type','css');$_template->assign('list',$_smarty_tpl->getVariable('files_stylesheet')->value);$_template->assign('after','');$_template->assign('before',''); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
        <?php $_template = new Smarty_Internal_Template('html/tool/header-file.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('type','js');$_template->assign('list',$_smarty_tpl->getVariable('files_javascript')->value);$_template->assign('after','');$_template->assign('before',''); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

    </head>

    <body onload="window.scrollTo(0, 1)">
        
        <div id="fb-root"></div>
        