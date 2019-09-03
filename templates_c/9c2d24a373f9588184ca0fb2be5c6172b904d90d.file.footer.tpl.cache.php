<?php /* Smarty version Smarty-3.1.14, created on 2019-09-03 10:16:38
         compiled from "C:\xampp\htdocs\taskdemo\templates\admin\commonFiles\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84705d6e13563d84c9-20244361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c2d24a373f9588184ca0fb2be5c6172b904d90d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\taskdemo\\templates\\admin\\commonFiles\\footer.tpl',
      1 => 1523193849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84705d6e13563d84c9-20244361',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'COPYRIGHT' => 0,
    'POWEREDBY' => 0,
    'siteroot' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5d6e13563ddaa6_75360903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d6e13563ddaa6_75360903')) {function content_5d6e13563ddaa6_75360903($_smarty_tpl) {?></div>
<div class="footer">
	<div class="container">
		<p class="text-muted">
			<script type="text/javascript">
				var dteNow = new Date();
				var intYear = dteNow.getFullYear();
			</script>
			<?php echo $_smarty_tpl->tpl_vars['COPYRIGHT']->value;?>

		</p>
	</div>
   <!--  <div class="pow_box"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['POWEREDBY']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/siteAssets/images/powerby.png"></a></p></div> -->
</div>
</div>
</body>
</html>
<?php }} ?>