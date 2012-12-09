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
        <link rel="canonical" href="{$smarty.const.SITE_URL}" />

        <title>Pierre Romera (Pirhoo)</title>

        {include file='html/tool/header-file.tpl' type='css' list=$files_stylesheet after="" before=""}

		<meta property="og:title" content="Pierre Romera (Pirhoo)" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://www.pirhoo.com/" />
		<meta property="og:image" content="{$smarty.const.SITE_URL}/pirhoo-core/image/penguin_nb.jpg" />
		<link rel="image_src" type="image/jpeg" href="{$smarty.const.SITE_URL}/pirhoo-core/image/penguin_nb.jpg" />
		<meta property="og:site_name" content="Pierre Romera (Pirhoo)" />
		<meta property="fb:admins" content="686299757" />

        <link rel="alternate" type="application/rss+xml" title="Pierre Romera (Pirhoo) : Flux" href="{$smarty.const.SITE_URL}?screen=feed"/>

    </head>

    <body>
        
        {* Facebook root (required for FBML widgets) *}
        <div id="fb-root"></div>

        <div id="contact">
            <span class="lang">
                <a class="{if $smarty.const.SITE_LANG == 'fr_FR' }active{/if}" href="?lang=fr_FR">français</a>
                <a class="{if $smarty.const.SITE_LANG == 'en_US' }active{/if}" href="?lang=en_US">english</a>
            </span>
            <a class="fhidden">{t}Contact{/t}</a>
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
                <h2><a class="active" href="#me">{t}Qui suis-je ?{/t}</a></h2>
            </div>

            <div class="filters section">
                <h2><a class="" href="#works">{t}Mes travaux{/t}</a></h2>
                <ul>
                    <li class="icon all"><a href="#all" class="selected">{t}Tous{/t}</a></li>
                    <li class="icon ddj"><a href="#ddj">{t}Data-Journalism / Webapp{/t}</a></li>
                    <li class="icon site"><a href="#site">{t}Site{/t}</a></li>
                    <li class="icon speach"><a href="#speach">{t}Cours / Conférence{/t}</a></li>
                </ul>
            </div>

            <div class="section">
                <h2><a href="#articles">{t}Mes articles{/t}</a></h2>
            </div>

            <div class="share">
                
                <span class="fb"><fb:like send="false" href="http://www.pirhoo.com/" layout="button_count" width="100" show_faces="false" font="arial"></fb:like></span>
                
                <a href="http://twitter.com/share" data-text="Je suis en train de consulter le portfolio de @Pirhoo, développeur et data-journaliste" data-url="http://www.pirhoo.com/" class="twitter-share-button" data-related="pirhoo" data-count="horizontal">Tweet</a>
                
                <g:plusone size="medium" href="http://www.pirhoo.com/"></g:plusone>
                    
            </div>
        </menu>
        