<?php /* Smarty version Smarty-3.0.8, created on 2012-12-09 20:58:38
         compiled from "/home/pirhoo/Lab/Personal/Pirhoo.v2/pirhoo-core/template/html/homepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70890320250c4ed6e3e0f60-81604865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8139312bf6ce5ddffed2c0a4403ec29f3f24e4f' => 
    array (
      0 => '/home/pirhoo/Lab/Personal/Pirhoo.v2/pirhoo-core/template/html/homepage.tpl',
      1 => 1355082988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70890320250c4ed6e3e0f60-81604865',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('template_output_format')->value).("/sub/header.tpl"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>


	<div id="content" role="main">
		
		<div class="overflow">
			<section class="screen active" id="me">
				<h1 class="hidden">
					Pierre Romera <img src="./pirhoo-core/image/arrow-right.png" class="arrow" alt="" /> Qui suis-je ?
				</h1>

				<h2>Directeur Général et co-fondateur de <a href="http://jplusplus.org" class="open-window">Journalism++</a></h2>
				<p class="desc">Journalism++ accompagne les rédactions dans leur transition vers le web des données.</p>

				<h2>Enseignant à l'<a href="http://www.journalisme.sciences-po.fr" target="_blank">École de Journalisme de Science Po</a></h2>
				<p class="desc">J'initie les journalistes au langage et au développement numérique.</p>

				<h2>Intervenant à l'<a href="http://esj-lille.fr/" class="open-window">ESJ Lille</a> et au <a href="http://www.cfpj.com/ecole-de-journalisme/" class="open-window">CFJ Paris</a></h2>
				<p class="desc">J'interviens en école, en entreprise et en conférence pour parler des sujets liés au <a href="https://fr.wikipedia.org/wiki/Journalisme_de_donn%C3%A9es" class="open-window">Journalisme de données</a>.</p>


				<h2>Développeur Freelance</h2>
				<p class="desc">WordPress, jQuery, Sencha, PHP, HTML5, Data Visualisation, ...</p>

				<div class="before">
					<h2>Directeur Général Délégué chez <a href="http://owni.fr" class="open-window">OWNI</a>/<a href="http://22mars.com" class="open-window">22mars</a></h2>
					<p class="desc">OWNI est un media en ligne, pionnier français du Data Journalism.</p>
				</div>
				
				<br class="breaker" />
			</section>


			<section class="cascade screen" id="works">
				<h1>
					Pierre Romera <img src="./pirhoo-core/image/arrow-right.png" class="arrow" alt="" /> Mes travaux
				</h1>
			    <ul>
			        <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('posts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
?> 
			            

			            <?php if ($_smarty_tpl->tpl_vars['post']->value['custom_fields']['url'][0]!=''){?>

			                <?php $_smarty_tpl->tpl_vars["permalink"] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value['custom_fields']['url'][0], null, null);?>

			            <?php }else{ ?>

			                <?php $_smarty_tpl->tpl_vars["permalink"] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value['url'], null, null);?>

			            <?php }?>


			            <?php if ($_smarty_tpl->tpl_vars['post']->value['custom_fields']['image'][0]!=''){?>

			                <?php $_smarty_tpl->tpl_vars["image"] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value['custom_fields']['image'][0], null, null);?>

			            <?php }elseif($_smarty_tpl->tpl_vars['post']->value['custom_fields']['Image'][0]!=''){?>

			                <?php $_smarty_tpl->tpl_vars["image"] = new Smarty_variable(("http://branchetonsonotone.com/").($_smarty_tpl->tpl_vars['post']->value['custom_fields']['Image'][0]), null, null);?>

			            <?php }else{ ?>

			                <?php $_smarty_tpl->tpl_vars["image"] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value['thumbnail'], null, null);?>

			            <?php }?>


			            <?php if ($_smarty_tpl->tpl_vars['post']->value['type']!="article"&&$_smarty_tpl->getVariable('image')->value!=''){?>
			                <li class="vignette <?php echo $_smarty_tpl->tpl_vars['post']->value['type'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['post']->value['type'];?>
">
			                    <a href="<?php echo $_smarty_tpl->getVariable('permalink')->value;?>
" class="preview open-window">                    
			                        <img src="./pirhoo-core/library/timthumb.php?src=<?php echo $_smarty_tpl->getVariable('image')->value;?>
&w=150" width="150" alt="">

				                </a>	                    
			                    <a href="<?php echo $_smarty_tpl->getVariable('permalink')->value;?>
" class="open-window title">
			                    	<span class="icon <?php echo $_smarty_tpl->tpl_vars['post']->value['type'];?>
"></span>
			                    	<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>

			                    </a>
			                </li>
			            <?php }?>
			            		            
			        <?php }} ?>
			    </ul>
			    <br class="breaker" />
		    </section>

		    <section class="cascade screen" id="articles">
				<h1>
					Pierre Romera <img src="./pirhoo-core/image/arrow-right.png" class="arrow" alt="" /> Mes articles
				</h1>
			    <ul>
			        <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('posts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
?> 
			            

			            <?php if ($_smarty_tpl->tpl_vars['post']->value['custom_fields']['url'][0]!=''){?>

			                <?php $_smarty_tpl->tpl_vars["permalink"] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value['custom_fields']['url'][0], null, null);?>

			            <?php }else{ ?>

			                <?php $_smarty_tpl->tpl_vars["permalink"] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value['url'], null, null);?>

			            <?php }?>


			            <?php if ($_smarty_tpl->tpl_vars['post']->value['custom_fields']['image'][0]!=''){?>

			                <?php $_smarty_tpl->tpl_vars["image"] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value['custom_fields']['image'][0], null, null);?>

			            <?php }elseif($_smarty_tpl->tpl_vars['post']->value['custom_fields']['Image'][0]!=''){?>

			                <?php $_smarty_tpl->tpl_vars["image"] = new Smarty_variable(("http://branchetonsonotone.com/").($_smarty_tpl->tpl_vars['post']->value['custom_fields']['Image'][0]), null, null);?>

			            <?php }else{ ?>

			                <?php $_smarty_tpl->tpl_vars["image"] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value['thumbnail'], null, null);?>

			            <?php }?>


			            <?php if ($_smarty_tpl->tpl_vars['post']->value['type']=="article"&&$_smarty_tpl->getVariable('image')->value!=''){?>
			                <li class="vignette <?php echo $_smarty_tpl->tpl_vars['post']->value['type'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['post']->value['type'];?>
">
			                    <a href="<?php echo $_smarty_tpl->getVariable('permalink')->value;?>
" class="preview open-window">                    
			                        <img src="./pirhoo-core/library/timthumb.php?src=<?php echo $_smarty_tpl->getVariable('image')->value;?>
&w=150" width="150" alt="">
	                    

				                </a>	                    
			                    <a href="<?php echo $_smarty_tpl->getVariable('permalink')->value;?>
" class="open-window title">
			                    	<span class="icon <?php echo $_smarty_tpl->tpl_vars['post']->value['type'];?>
"></span>
			                    	<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>

			                    </a>
			                </li>
			            <?php }?>
			            
			            
			        <?php }} ?>
			    </ul>
			    <br class="breaker" />
		    </section>
		  </div>
	    <h1 id="tracker"></h1>
			<ul id="sub-menu">
				<li data-target="me"><img src="./pirhoo-core/image/me.png"/ alt=""></li>
				<li data-target="works"><img src="./pirhoo-core/image/works.png"/ alt=""></li>
				<li data-target="articles" class="articles"><img src="./pirhoo-core/image/articles.png"/ alt=""></li>
			</ul>
	</div>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('template_output_format')->value).("/sub/footer.tpl"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
