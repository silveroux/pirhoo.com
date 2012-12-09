<?php /* Smarty version Smarty-3.0.8, created on 2012-12-09 23:10:54
         compiled from "/home/pirhoo/Lab/Personal/Pirhoo.v2/pirhoo-core/template/html/sub/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36070369550c50c6ece4df4-26518556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c830732d401b4cb1fda84459eb602d62dc4d226' => 
    array (
      0 => '/home/pirhoo/Lab/Personal/Pirhoo.v2/pirhoo-core/template/html/sub/header.tpl',
      1 => 1355091053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36070369550c50c6ece4df4-26518556',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="ie6 ie" lang="fr"><![endif]-->
<!--[if IE 7]>   <html class="ie7 ie" lang="fr"><![endif]-->
<!--[if IE 8]>   <html class="ie8 ie" lang="fr"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-ie" lang="fr"><!--<![endif]-->
    <head>

        <link href='//fonts.googleapis.com/css?family=Terminal+Dosis:400,500,800,700,600,300,200:latin' rel='stylesheet' type='text/css'>             

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1">
 		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   
        
        <meta name="description" content="Ce portfolio présente les travaux de Pierre Romera (Pirhoo), petit manchot développeur Web, expert en Data-Journalism." />
		<meta name="author" content="Pierre Romera (Pirhoo)">
        <meta name="keywords" content="pirhoo, pierre romera, romera, pierre, developper développeur, dévelopeur developer, web, html, html5, javascript, canvas, php, ruby, data, data-journalsim, datajournalism, datajournalisme, ddj, api" />
        <link rel="canonical" href="<?php echo @SITE_URL;?>
" />

        <title>Pierre Romera (Pirhoo)</title>

        <?php $_template = new Smarty_Internal_Template('html/tool/header-file.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('type','css');$_template->assign('list',$_smarty_tpl->getVariable('files_stylesheet')->value);$_template->assign('after','');$_template->assign('before',''); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

		<meta property="og:title" content="Pierre Romera (Pirhoo)" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://www.pirhoo.com/" />
		<meta property="og:image" content="<?php echo @SITE_URL;?>
/pirhoo-core/image/penguin_nb.jpg" />
		<link rel="image_src" type="image/jpeg" href="<?php echo @SITE_URL;?>
/pirhoo-core/image/penguin_nb.jpg" />
		<meta property="og:site_name" content="Pierre Romera (Pirhoo)" />
		<meta property="fb:admins" content="686299757" />

        <link rel="alternate" type="application/rss+xml" title="Pierre Romera (Pirhoo) : Flux" href="<?php echo @SITE_URL;?>
?screen=feed"/>

    </head>

    <body>
        
        <div id="fb-root"></div>

        <div id="contact">
            <span class="lang">
                <a class="<?php if (@SITE_LANG=='fr_FR'){?>active<?php }?>" href="?lang=fr_FR">français</a>
                <a class="<?php if (@SITE_LANG=='en_US'){?>active<?php }?>" href="?lang=en_US">english</a>
            </span>
            <a class="fhidden"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Contact<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
            <ul class="links">
                <li><a class="icomoon" href="//twitter.com/pirhoo" class="open-window" title="Twitter">!</a></li>
                <li><a class="icomoon" href="//github.com/pirhoo" class="open-window" title="GitHub">$</a></li>
                <li><a class="icomoon" href="//www.facebook.com/pierre.romera" class="open-window" title="Facebook">"</a></li>
                <li><a class="icomoon" href="//plus.google.com/117367092223426078440/" class="open-window" title="Google+">%</a></li>
                <li><a class="icomoon" href="?screen=feed" title="Flux RSS">'</a></li>
                <li><a class="icomoon" href="mailto:hello@pirhoo.com" title="hello@pirhoo.com">*</a></li>
                <li><a class="icomoon" href="callto://pierre.romera" title="Skype">(</a></li>
                <li><a class="icomoon" href="tel://0650082784" title="06.50.08.27.84">#</a></li>
            </ul>
        </div>

        <menu>
            <div class="me section">
                <h2><a class="active" href="#me"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Qui suis-je ?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></h2>
            </div>

            <div class="filters section">
                <h2><a class="" href="#works"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mes travaux<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></h2>
                <ul>
                    <li class="icon all"><a href="#all" class="selected"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tous<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
                    <li class="icon ddj"><a href="#ddj"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Data-Journalism / Webapp<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
                    <li class="icon site"><a href="#site"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Site<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
                    <li class="icon speach"><a href="#speach"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cours / Conférence<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
                </ul>
            </div>

            <div class="section">
                <h2><a href="#articles"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mes articles<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></h2>
            </div>

            <div class="share">
                
                <span class="fb"><fb:like send="false" href="http://www.pirhoo.com/" layout="button_count" width="100" show_faces="false" font="arial"></fb:like></span>
                
                <a href="http://twitter.com/share" data-text="Je suis en train de consulter le portfolio de @Pirhoo, développeur et data-journaliste" data-url="http://www.pirhoo.com/" class="twitter-share-button" data-related="pirhoo" data-count="horizontal">Tweet</a>
                
                <g:plusone size="medium" href="http://www.pirhoo.com/"></g:plusone>
                    
            </div>
        </menu>
        