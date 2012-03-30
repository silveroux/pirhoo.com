<?php /* Smarty version Smarty-3.0.8, created on 2012-02-01 19:12:17
         compiled from "/Users/pirhoo/Lab/Web/Personal/Pirhoo.v2/pirhoo-core/template/html/sub/body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1795485744f2980819fde53-49379653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2678160f097f25d24f98a6817461b29fc3a854a3' => 
    array (
      0 => '/Users/pirhoo/Lab/Web/Personal/Pirhoo.v2/pirhoo-core/template/html/sub/body.tpl',
      1 => 1328119935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1795485744f2980819fde53-49379653',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<header>
    
</header>

<menu>
    <div class="me">
        <h2>Qui suis-je ?</h2>
        <ul>
            <li><a>Suivez le guide</a></li>
            <li><a>Trouvez moi</a></li>
        </ul>
    </div>

    <div class="filters">
        <h2>Mes travaux</h2>
        <ul>
            <li><a href="#all" class="selected">Tous</a></li>
            <li><a href="#site">Site</a></li>
            <li><a href="#ddj">Data-Journalism / Webapp</a></li>
            <li><a href="#article">Article</a></li>
            <li><a href="#speach">Cours / Conférence</a></li>
        </ul>
    </div>
</menu>


<div id="content" role="main">
    <ul class="cascade">
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


            <?php if ($_smarty_tpl->getVariable('image')->value!=''){?>
                <li class="vignette" data-type="<?php echo $_smarty_tpl->tpl_vars['post']->value['type'];?>
">
                    <a href="<?php echo $_smarty_tpl->getVariable('permalink')->value;?>
" class="preview open-window">                    
                        <img src="<?php echo $_smarty_tpl->getVariable('image')->value;?>
" alt="">
                    </a>
                    <a href="<?php echo $_smarty_tpl->getVariable('permalink')->value;?>
" class="open-window title"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
<a>
                </li>
            <?php }?>
            
            
        <?php }} ?>
    </ul>
</div>