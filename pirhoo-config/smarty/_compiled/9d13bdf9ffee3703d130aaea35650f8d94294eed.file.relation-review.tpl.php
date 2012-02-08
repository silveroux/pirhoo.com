<?php /* Smarty version Smarty-3.0.6, created on 2011-06-15 13:48:39
         compiled from "/Users/pirhoo/Lab/Web/Influence-Networks/appinc/template/screen/relation-review.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8610957374df89c17746aa5-61731209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d13bdf9ffee3703d130aaea35650f8d94294eed' => 
    array (
      0 => '/Users/pirhoo/Lab/Web/Influence-Networks/appinc/template/screen/relation-review.tpl',
      1 => 1308138340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8610957374df89c17746aa5-61731209',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<ul class="up_menu">
      <?php $_template = new Smarty_Internal_Template("menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</ul>


<h2><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Review a relation<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>

<section class="classic-form relation-review">
      <?php if ($_smarty_tpl->getVariable('relation')->value){?>
      
            <h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Review the relation between...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
&nbsp;<a href="./?screen=relation-review&id=<?php echo $_smarty_tpl->getVariable('relation')->value->getId();?>
" class="permalink"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Permalink<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></h3>
            <form method="POST" action="index.php?screen=relation-review">

                 <input type="hidden" name="relation-id" value="<?php echo $_smarty_tpl->getVariable('relation')->value->getId();?>
" />

                 <div style="text-align:center; margin-bottom:-25px;">
                        <img src="./appinc/images/and.png" alt="&" class="and" />                  
                  </div>

                  <section>
                        <div class="entity-desc loading default" id="entity-left">
                              <input type="hidden" name="entity-left-mid" id="to-entity-left" value="<?php echo $_smarty_tpl->getVariable('entity_left')->value->getFreebaseId();?>
" />
                              <input type="hidden" name="entity-left-type" value="<?php echo $_smarty_tpl->getVariable('entity_left')->value->getType();?>
" />
                              <h4>&nbsp;</h4>
                              <div class="hiddable">
                                    <ul></ul>
                                    <span class="freebase-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Information provided by Freebase<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
                              </div>
                              <div class="wait"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Loading information.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
                        </div>
                  </section>

                  <section>
                        <div class="entity-desc loading default" id="entity-right">
                              <input type="hidden" name="entity-right-mid" id="to-entity-right" value="<?php echo $_smarty_tpl->getVariable('entity_right')->value->getFreebaseId();?>
" />
                              <input type="hidden" name="entity-right-type" value="<?php echo $_smarty_tpl->getVariable('entity_right')->value->getType();?>
" />
                              <h4>&nbsp;</h4>
                              <div class="hiddable">
                                    <ul></ul>
                                    <span class="freebase-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Information provided by Freebase<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
                              </div>
                              <div class="wait"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Loading information.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
                        </div>
                  </section>
                 
                  <div class="deroule open" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hide/Show entities details<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"></div>

                  <h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Relation type:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <span style="color:#f4f3e2; font-weight: normal; text-transform: none; margin-top:10px;"><?php echo $_smarty_tpl->getVariable('relation_type')->value->getLabel();?>
</span></h3>
                  <section class="relation-type">
                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('relation_value')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                            
                            <?php if ($_smarty_tpl->getVariable('i')->value->getValue()!=''){?>
                                
                                <?php if ($_smarty_tpl->getVariable('i')->value->getPropertyLabel()=="Source"){?>                      
                                    <p>                                
                                          <span><?php echo $_smarty_tpl->getVariable('i')->value->getPropertyLabel();?>
:</span> <a href='<?php echo $_smarty_tpl->getVariable('i')->value->getValue();?>
' target="_blank"><?php echo $_smarty_tpl->getVariable('i')->value->getValue();?>
</a>
                                    </p>
                                <?php }else{ ?>
                                    <p>
                                            
                                          <span><?php echo $_smarty_tpl->getVariable('i')->value->getPropertyLabel();?>
:</span> <?php echo $_smarty_tpl->getVariable('i')->value->getValue();?>

                                    </p>
                                <?php }?>
                            <?php }?>
                        <?php }} ?>                      
                  </section>

                  <h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Rate the confidence level of this relationship<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>          

                  <input type="hidden" name="rate" value="3" />
                  <div style="float:left; text-align: right;" class="rate-legend">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Rumor<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                  </div>
                  <div style="float:right" class="rate-legend">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Established fact<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                  </div>
                  <div id="rate-slider"></div>

                  <div style="clear:both; text-align:right; padding-top:10px; padding-right: 20px;">
                        <input type="submit" class="submit  button light" value="Submit" />
                        <a class="button submit light" href="?screen=relation-review">I don't know</a>
                  </div>
            </form>
            
      <?php }?>
</section>