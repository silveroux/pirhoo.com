<?php /* Smarty version Smarty-3.0.6, created on 2011-06-16 14:22:58
         compiled from "/Users/pirhoo/Lab/Web/Influence-Networks/appinc/template/email-user-confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3922915574df9f5a2eba398-36835169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2495988dfb99e41e95eec49a1b7a583e3bf071c' => 
    array (
      0 => '/Users/pirhoo/Lab/Web/Influence-Networks/appinc/template/email-user-confirmation.tpl',
      1 => 1308226977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3922915574df9f5a2eba398-36835169',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<p style="padding-bottom:10px; border-bottom: 1px solid #9E95AC">
    <a href="http://influencenetworks.org" target="_blank" title="Influence Networks">
        <img alt="Influence Networks" src="logo.png" />
    </a>
</p>

<p>
    Welcome to Influence Networks,
</p>

<p>
    Please, to confirm your user registration, you have to <strong>visit the following link</strong>:<br />
    <a target="_blank" href="<?php echo @APP_URL;?>
?action=confirmAccount&amp;user_id=<?php echo $_smarty_tpl->getVariable('user')->value['id'];?>
&amp;code=<?php echo $_smarty_tpl->getVariable('user')->value['code'];?>
="><?php echo @APP_URL;?>
?action=confirmAccount&amp;user_id=<?php echo $_smarty_tpl->getVariable('user')->value['id'];?>
&amp;code=<?php echo $_smarty_tpl->getVariable('user')->value['code'];?>
</a>
</p>

<p>
    If you can't click on the link, please copy and paste it on your browser's address bar.
</p>

<p>
    Regards,
</p>

<p style="color:#9E95AC">
    The Influence Networks Team.
</p>
