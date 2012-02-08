<?php /* Smarty version Smarty-3.0.6, created on 2011-05-03 10:55:11
         compiled from "/Users/pirhoo/Lab/Web/Influence-Networks/appinc/template/screen/relation-visualise.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10724592074dbfc2ef2bfcd4-25841608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '406d9ff5fbb0b286154cacf8f4d6652a63872633' => 
    array (
      0 => '/Users/pirhoo/Lab/Web/Influence-Networks/appinc/template/screen/relation-visualise.tpl',
      1 => 1304412910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10724592074dbfc2ef2bfcd4-25841608',
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
Visualize relations<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>

<section class="classic-form visualize">
      <h3><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
See the relationship between...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
&nbsp;<a href="./" class="permalink"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Permalink<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></h3>
      <form method="POST" action="">

            <input type="hidden"  name="rate" value="<?php echo $_smarty_tpl->getVariable('trust_rank')->value;?>
" />
            
            <div style="text-align:center;">
                  <input type="text" name="node-left"  title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You must choose an entity from Freebase. Please select one in the list below.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"  id="to-entity-left" class="node_search required node_left" placeholder="Personality or institution" value="<?php if ($_smarty_tpl->getVariable('entity_left')->value){?><?php echo $_smarty_tpl->getVariable('entity_left')->value->getLabel();?>
<?php }?>" />
                  <img src="./appinc/images/and.png" alt="&" class="and" />
                  <input type="text" name="node-right" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You must choose an entity from Freebase. Please select one in the list below.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" id="to-entity-right" class="node_search required node_right" placeholder="Personality or institution" value="<?php if ($_smarty_tpl->getVariable('entity_right')->value){?><?php echo $_smarty_tpl->getVariable('entity_right')->value->getLabel();?>
<?php }?>" />
            </div>

            <section>
                  <div class="entity-desc loading default" id="entity-left">
                        <input type="hidden" class="entity-left-mid" name="entity-left-mid" class="required"  value="<?php if ($_smarty_tpl->getVariable('entity_left')->value){?><?php echo $_smarty_tpl->getVariable('entity_left')->value->getFreebaseId();?>
<?php }?>" />
                  </div>
            </section>

            <section>
                  <div class="entity-desc loading default" id="entity-right">
                        <input type="hidden" class="entity-right-mid" name="entity-right-mid" class="required" value="<?php if ($_smarty_tpl->getVariable('entity_right')->value){?><?php echo $_smarty_tpl->getVariable('entity_right')->value->getFreebaseId();?>
<?php }?>" />
                  </div>
            </section>
            
            <div id="node-informations" class="simpleShadow radiusLight">                  
                  <div class="close">close</div>
                  <h4>An entity name</h4>
                  <div class="dynamique-content">
                        <h5><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Informations<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h5>
                        <div class="freebase default loading">
                              <ul></ul>
                              <span class="freebase-label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Information provided by Freebase<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
                        </div>
                  </div>
                  <div class="dynamique-content" style="width:395px">
                        <h5><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Relations<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h5>
                        <div class="relations default loading">
                              <table>
                                    <thead>
                                          <tr>
                                                <td><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Entity<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
                                                <td style="min-width:80px"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Type of relation<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
                                                <td style=" text-align:center"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Trust rank<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
                                                <td></td>
                                                <td style="width:10px;"></td>
                                          </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                              </table>
                        </div>
                  </div>
            </div>

            <div class="min-rate">
                  <div class="rate-legend">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Established
                        fact<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                  </div>
                  <div id="rate-slider"></div>
                  <div class="rate-legend">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Rumor<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                  </div>
            </div>

            
            <script type="text/javascript">
                  $(function() {
                        
                        $( "#rate-slider" ).slider({
                              value: $( ":input[name=rate]" ).val(),
                              min: 1,
                              max: 5,
                              step: 0.1,
                              orientation: "vertical",
                              slide: function( event, ui ) {
                                    $( ":input[name=rate]" ).val( ui.value );
                                    if(data_rel != undefined) resetDataVis();
                                    
                                    $("#rate-slider .ui-slider-handle").attr("title", "<span style='font-size:30px'>"+ui.value+"</span>/5");
                                    
                                    // to paralelle execution
                                    setTimeout(function () { 
                                          $("#rate-slider .ui-slider-handle").tipsy("show"); 
                                    }, 0);
                              },
                              change: function() {            
                                    $("#rate-slider .ui-slider-handle").tipsy("show");                          
                              }
                        });
                        
                        $("#rate-slider .ui-slider-handle").blur(function() {
                              $("#rate-slider .ui-slider-handle").tipsy("hide");                                
                        })

                        $("#rate-slider .ui-slider-handle").attr("title", "<span style='font-size:30px'>"+$( ":input[name=rate]" ).val()+"</span>/5")
                        .tipsy({
                              gravity: 'e',
                              html: true,
                              opacity:1
                        });
                        

                        
                        
                  });
            </script>
            
                  
            <div class="tooltips" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No relations yet between these entities.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->getVariable('isConnected')->value){?><a href='./?screen=relation-add'><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Contribute to the database.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php }else{ ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Log in to contribute.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>">
                  <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Double click an entity to view its description.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <div id="visualize-layout">
                  
                  <script type="text/javascript+protovis">
                        
                        if (Modernizr.svg){ 
                        
                              var colors = pv.Colors.category10();            

                              vis = new pv.Panel()
                                    .width(990)
                                    .height(390)
                                    .fillStyle("transparent");

                              force = vis.add(pv.Layout.Force)
                                    .nodes(treeData.nodes)
                                    .links(treeData.links)
                                    .bound(true)
                                    .chargeConstant(-100)
                                    .springLength(120)

                              force.link.add(pv.Line)
                                  .lineWidth(2)
                                  //.interpolate("step-after")
                                  .strokeStyle("rgba(255,250,255,0.7)");

                              force.node.add(pv.Dot)
                                    .event("dblclick", function (d) { loadFreebaseData(d); })
                                    .radius(function(d) 5 + d.linkDegree/10000 )
                                    .fillStyle(function(d)    { return d.type == "/organization/organization" ? "#DAE9EA" : "#432946" })
                                    .lineWidth(function(d)    { return d.group == 1 ? 2 : 2 } )
                                    .strokeStyle( function(d) { return d.type == "/organization/organization" ? "#432946" : "#DAE9EA" })
                                    .title(function(d) { return d.freebase_id } )
                                    .event("mousedown", pv.Behavior.drag())
                                    .event("drag", force)
                                    .add(pv.Label)
                                          .text( function (d) { return d.label })
                                          .font(function(d) { return d.group == 1 ? "bold 16px Verdana" : "bold 11px Verdana"; })
                                          .textStyle("#432946")
                                          .textAlign("center")
                                          .textBaseline("top")
                                          .textDecoration("navy")
                                          .textMargin(function(d) { return -3 * this.radius() })
                                          
                              vis.render();
                              
                        
                        } else {
                        
                              $(function () {
                                    $("#layout").append('<div class="nograph">Your web browser cannot display the graph. Please, use <a href="http://www.mozilla-europe.org/fr/firefox/">Mozilla Firefox</a> or <a href="http://www.google.com/chrome">Google Chrome</a>.</div>');
                              });
                        }
                  </script>
                  
            </div>
      </form>
</section>