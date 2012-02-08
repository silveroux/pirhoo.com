<?php /* Smarty version Smarty-3.0.6, created on 2011-06-15 14:33:45
         compiled from "/Users/pirhoo/Lab/Web/Influence-Networks/appinc/template/embed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9163979414df8a6a9179458-20116134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c8daeae8bffd323c7b5bc498dc5e691bfa3ef51' => 
    array (
      0 => '/Users/pirhoo/Lab/Web/Influence-Networks/appinc/template/embed.tpl',
      1 => 1308141224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9163979414df8a6a9179458-20116134',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
      <head lang="fr">

            <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
            <!-- IPAD viewport -->
            <meta name="viewport" content="width=990">
            
            <title><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Influence Networks<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 &lsaquo; <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
OWNI<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</title>

            <meta name="description" content="Influence Networks is an open-source, collaborative directory of relationships between people, institutions and companies. Each relation has its own level of trustworthiness, so that facts can be distinguished from noise." /> 
            <meta name="og:image" content="<?php echo @APP_URL;?>
appinc/images/infnets.png" property="og:image"  />            
            <meta name="keywords" content="OWNI, influence networks, influence, network, networks, relationship, relation" />            
            
            <link rel="canonical" href="<?php echo @APP_URL;?>
" /> 
            <link rel="image_src" href="<?php echo @APP_URL;?>
appinc/images/infnets.png" /> 
 

            <!-- ###################################### -->
            <!-- #  Stylesheets                         -->
            <!-- ###################################### -->

            <link href='http://fonts.googleapis.com/css?family=Vollkorn:regular,italic,bold,bolditalic' rel='stylesheet' type='text/css' />
            <!-- Default theme -->
            <link rel="stylesheet" type="text/css" href="<?php echo @APP_URL;?>
appinc/stylesheet/generic.css" />
            <!-- JQuery UI Theme -->
            <link rel="stylesheet" type="text/css" href="<?php echo @APP_URL;?>
appinc/stylesheet/ui-eggplant/jquery-ui-1.8.8.custom.css" />                       
            <!-- EMBED theme -->
            <link rel="stylesheet" type="text/css" href="<?php echo @APP_URL;?>
appinc/stylesheet/relation-visualize-embed.css" />
            <!-- Tooltips -->
            <link rel="stylesheet" type="text/css" href="<?php echo @APP_URL;?>
appinc/stylesheet/tipsy.css" /> 


            <!-- ###################################### -->
            <!-- #  javascript                          -->
            <!-- ###################################### -->
            
            <!-- Javascript hack to a better HML5 support on IE6  -->
            <!--[if lt IE 9]>
                <script type="text/javascript" src="<?php echo @APP_URL;?>
appinc/javascript/html5.js"></script>
            <![endif]--> 
            <!-- Usefull functions -->
            <script type="text/javascript" src="<?php echo @APP_URL;?>
appinc/javascript/functions.utils.js"></script>
            <!-- JQuery library -->
            <script type="text/javascript" src="<?php echo @APP_URL;?>
appinc/javascript/jquery-last.min.js"></script>
            <!-- JQuery UI library -->
            <script type="text/javascript" src="<?php echo @APP_URL;?>
appinc/javascript/jquery-ui-1.8.5.custom.min.js"></script>  
            <!-- Templates with jQuery -->
            <script type="text/javascript" src="<?php echo @APP_URL;?>
appinc/javascript/jquery.tmpl.min.js"></script>    
            <!-- Tooltips kit -->        
            <script type="text/javascript" src="<?php echo @APP_URL;?>
appinc/javascript/jquery.tipsy.js"></script>         
            <!-- Modernizr -->
            <script type="text/javascript" src="<?php echo @APP_URL;?>
appinc/javascript/modernizr-1.6.min.js"></script>
                                    
            <script type="text/javascript" src="<?php echo @APP_URL;?>
appinc/javascript/app.js"></script>   
            <script type="text/javascript" src="<?php echo @APP_URL;?>
appinc/javascript/relation-visualize-embed.js"></script>          
            
            
            <!-- to make SGV better -->
            <!--[if IE]>
                <script type="text/javascript" src="<?php echo @APP_URL;?>
appinc/javascript/SVGWEB/svg.js" data-path="<?php echo @APP_URL;?>
appinc/javascript/SVGWEB/"></script>           
            <![endif]-->
            
            <!-- library to do tree layouts -->
            <script type="text/javascript" src="<?php echo @APP_URL;?>
appinc/javascript/jlove-protovis-r3.3.js"></script>
            <!--meta name="svg.render.forceflash" content="true" /-->
            
            <script type="text/javascript">
                  // to know if the user is connected
                  var isConnected = <?php if ($_smarty_tpl->getVariable('isConnected')->value){?> true <?php }else{ ?> false <?php }?>;
                  // to display errors
                  var err = <?php echo $_smarty_tpl->getVariable('err_json')->value;?>
;     
            </script>

      </head>

      <!-- IPAD loves this attribut to a better displaying -->
      <body onload="window.scrollTo(0, 1)">
            

            <h1>Influence Networks</h1>     
            
            <div id="workspace" class="classic-form">
                  <form>                        
                        <input type="hidden"  name="rate" value="<?php echo $_smarty_tpl->getVariable('trust_rank')->value;?>
" />
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
                  </form>
                  
                  <div class="tooltips" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No relations yet between these entities.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php if ($_smarty_tpl->getVariable('isConnected')->value){?><a href='./?screen=relation-add'><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Contribute to the database.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php }else{ ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Log in to contribute.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>">
                        <p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Click an entity to view its description.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
                        <p class="browser-alert"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
For a better rendering, please use a modern Web Browser such as<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <a href="http://www.mozilla-europe.org/" target="_blank">Mozilla Firefox</a> <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
or<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <a href="http://www.google.com/chrome" target="_blank">Google Chrome</a>.</p>
                  </div>
                  
                  <menu class="ctrl">
                        <a class="zoomIn"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zoom In<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
                        <a class="zoomOut"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zoom Out<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
                        <a class="backApp button violet" target="_parent" href="./?screen=relation-visualize&amp;rel=<?php if ($_smarty_tpl->getVariable('entity_left')->value){?><?php echo $_smarty_tpl->getVariable('entity_left')->value->getFreebaseId();?>
|<?php }?><?php if ($_smarty_tpl->getVariable('entity_right')->value){?><?php echo $_smarty_tpl->getVariable('entity_right')->value->getFreebaseId();?>
<?php }?>&amp;trust_rank=<?php echo $_smarty_tpl->getVariable('trust_rank')->value;?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; smarty_translate(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Back to the application<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_translate(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
                  </menu>
                  
                  

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
                        <div class="dynamique-content">
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
                                                      <td style="width:60px;"></td>
                                                      <td style="width:10px;"></td>
                                                </tr>
                                          </thead>
                                          <tbody>
                                          </tbody>
                                    </table>
                              </div>
                        </div>
                  </div>
                
                

                      <div id="visualize-layout">
                            <script type="text/javascript">                                    
                                    relationsRender();                            	
                            </script>                      
                      </div>


                      <script type="text/javascript">

                            var _gaq = _gaq || [];
                            _gaq.push(['_setAccount', '<?php echo @GA_PROFILE;?>
']);
                            _gaq.push(['_trackPageview']);

                            (function() {
                              var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                              ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                            })();

                      </script>
                
            </div>
            
                  
                  
      </body>

</html>
            