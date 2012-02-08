<?php /* Smarty version Smarty-3.0.8, created on 2012-02-05 21:13:28
         compiled from "/Users/pirhoo/Lab/Web/Personal/Pirhoo.v2/pirhoo-core/template/html/sub/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13880834514f2ee2e8239cf9-15537753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6f0c2c5913a7a45d72d4c5866aa39ed254dd582' => 
    array (
      0 => '/Users/pirhoo/Lab/Web/Personal/Pirhoo.v2/pirhoo-core/template/html/sub/footer.tpl',
      1 => 1328472799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13880834514f2ee2e8239cf9-15537753',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
			
			<!--[if lt IE 9 ]>
			  <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
			  <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
			<![endif]-->
		

        <?php $_template = new Smarty_Internal_Template('html/tool/header-file.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('type','js');$_template->assign('list',$_smarty_tpl->getVariable('files_javascript')->value);$_template->assign('after','');$_template->assign('before',''); echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

			
			
			<script type="text/javascript">

			  var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'UA-25790333-1']);
			  _gaq.push(['_trackPageview']);

			  (function() {
			    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();

			</script>
			
		
    </body>
</html>