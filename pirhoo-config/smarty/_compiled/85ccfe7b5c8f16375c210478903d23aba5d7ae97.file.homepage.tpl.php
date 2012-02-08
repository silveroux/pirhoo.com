<?php /* Smarty version Smarty-3.0.8, created on 2012-02-06 23:27:10
         compiled from "/Users/pirhoo/Lab/Web/Personal/Pirhoo.v2/pirhoo-core/template/html/homepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13327531274f3053bedfd8e5-16984984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85ccfe7b5c8f16375c210478903d23aba5d7ae97' => 
    array (
      0 => '/Users/pirhoo/Lab/Web/Personal/Pirhoo.v2/pirhoo-core/template/html/homepage.tpl',
      1 => 1328567188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13327531274f3053bedfd8e5-16984984',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('template_output_format')->value).("/sub/header.tpl"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>


	<div id="content" role="main">
		
		<section class="screen active" id="me">
			<h1>Pierre Romera <img src="./pirhoo-core/image/arrow-right.png" class="arrow" alt="" /> Qui suis-je ?</h1>

			<h2>Directeur Général et co-fondateur de <a href="http://jplusplus.org" class="open-window">Journalism++</a></h2>
			<p class="desc">Journalism++ donne du sens aux données en construisant des applications qui aident les gens à prendre de meilleures décisions.</p>

			<h2>Intervenant à l'<a href="http://esj-lille.fr/" class="open-window">ESJ Lille</a>, au <a href="http://www.cfpj.com/ecole-de-journalisme/" class="open-window">CFJ Paris</a> et à <a href="http://www.sciencespo.fr/" class="open-window">Science Po Paris</a></h2>
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
			<h1>Pierre Romera <img src="./pirhoo-core/image/arrow-right.png" class="arrow" alt="" /> Mes travaux</h1>
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
		                        <img src="<?php echo $_smarty_tpl->getVariable('image')->value;?>
" alt="">
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
			<h1>Pierre Romera <img src="./pirhoo-core/image/arrow-right.png" class="arrow" alt="" /> Mes articles</h1>
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
		                        <img src="<?php echo $_smarty_tpl->getVariable('image')->value;?>
" alt="">
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

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('template_output_format')->value).("/sub/footer.tpl"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
