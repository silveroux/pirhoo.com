<?php /* Smarty version Smarty-3.0.8, created on 2012-02-08 21:26:35
         compiled from "/Users/pirhoo/Lab/Web/Personal/Pirhoo.v2/pirhoo-core/template/atom/feed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8102628564f32da7b9e2f87-50896262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35245c6abf5d18303dcf53e2f6e7ae812c3626a3' => 
    array (
      0 => '/Users/pirhoo/Lab/Web/Personal/Pirhoo.v2/pirhoo-core/template/atom/feed.tpl',
      1 => 1328732794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8102628564f32da7b9e2f87-50896262',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php echo '<?xml';?> version="1.0" encoding="UTF-8"<?php echo '?>';?>
<rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
	>

	<channel>
		<title>Pierre Romera (Pirhoo)</title>
		<atom:link href="<?php echo @SHARE_URL;?>
/feed/" rel="self" type="application/rss+xml" />
		<link><?php echo @SHARE_URL;?>
</link>
		<description>Les derniers travaux de Pierre Romera.</description>

		<lastBuildDate><?php echo $_smarty_tpl->getVariable('posts')->value[0]['date'];?>
</lastBuildDate>
		<language>fr</language>
		<sy:updatePeriod>hourly</sy:updatePeriod>
		<sy:updateFrequency>1</sy:updateFrequency>
	

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


			<item>
				<title><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</title>

				<link><?php echo $_smarty_tpl->getVariable('permalink')->value;?>
</link>	
				<pubDate><?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
</pubDate>
				<dc:creator>Pirhoo</dc:creator>
				<category><![CDATA[<?php echo $_smarty_tpl->tpl_vars['post']->value['type'];?>
]]></category>

				<guid isPermaLink="true"><?php echo $_smarty_tpl->getVariable('permalink')->value;?>
</guid>
				<description><![CDATA[<a href="<?php echo $_smarty_tpl->getVariable('permalink')->value;?>
"><img width="200" src="<?php echo $_smarty_tpl->getVariable('image')->value;?>
" alt="Voir plus" /></a>]]></description>								
			</item>
		<?php }} ?>
	</channel>
</rss>
