<?php /* Smarty version Smarty-3.0.8, created on 2012-02-09 15:32:46
         compiled from "/Users/pirhoo/Lab/Web/Personal/Pirhoo.v2/pirhoo-core/template/html/sub/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12010812844f33d90eb210b2-75175058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9483400f4f41eda059414056c72a95ca239a77f' => 
    array (
      0 => '/Users/pirhoo/Lab/Web/Personal/Pirhoo.v2/pirhoo-core/template/html/sub/header.tpl',
      1 => 1328797945,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12010812844f33d90eb210b2-75175058',
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

    <body onload="window.scrollTo(0, 1)">
        
        <div id="fb-root"></div>

        <div id="contact" class="icon">
            <a>Contact</a>
            <ul>
                <li><a href="//twitter.com/pirhoo" class="open-window">Twitter</a></li>
                <li><a href="//www.facebook.com/pierre.romera" class="open-window">Facebook</a></li>
                <li><a href="//plus.google.com/117367092223426078440/" class="open-window">Google+</a></li>
                <li><a href="mailto:hello@pirhoo.com">hello@pirhoo.com</a></li>
                <li><a href="tel://0650082784">06.50.08.27.84</a></li>
            </ul>
        </div>

        <menu>
            <div class="me">
                <h2><a class="icon active" href="#me">Qui suis-je ?</a></h2>
            </div>

            <div class="filters">
                <h2><a class="icon" href="#works">Mes travaux</a></h2>
                <ul>
                    <li class="icon all"><a href="#all" class="selected">Tous</a></li>
                    <li class="icon ddj"><a href="#ddj">Data-Journalism / Webapp</a></li>
                    <li class="icon site"><a href="#site">Site</a></li>
                    <li class="icon speach"><a href="#speach">Cours / Conférence</a></li>
                </ul>
            </div>

            <div>
                <h2><a class="icon" href="#articles">Mes articles</a></h2>
            </div>

            <div class="share">
                
                <span class="fb"><fb:like send="false" href="http://www.pirhoo.com/" layout="button_count" width="100" show_faces="false" font="arial"></fb:like></span>
                
                <a href="http://twitter.com/share" data-text="Je suis en train de consulter le portfolio de @Pirhoo, développeur et data-journaliste" data-url="http://www.pirhoo.com/" class="twitter-share-button" data-related="pirhoo" data-count="horizontal">Tweet</a>
                
                <g:plusone size="medium" href="http://www.pirhoo.com/"></g:plusone>
                    
            </div>
        </menu>
        