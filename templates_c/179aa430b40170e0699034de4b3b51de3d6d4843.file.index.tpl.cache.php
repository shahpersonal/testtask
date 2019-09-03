<?php /* Smarty version Smarty-3.1.14, created on 2019-09-03 10:16:38
         compiled from "C:\xampp\htdocs\taskdemo\templates\admin\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:294005d6e1356314c81-50018157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '179aa430b40170e0699034de4b3b51de3d6d4843' => 
    array (
      0 => 'C:\\xampp\\htdocs\\taskdemo\\templates\\admin\\index.tpl',
      1 => 1567494994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294005d6e1356314c81-50018157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header_start' => 0,
    'msg' => 0,
    'search' => 0,
    'page' => 0,
    'modelLists' => 0,
    'blogArray' => 0,
    'newid' => 0,
    'sitebaseurl' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5d6e13563628c1_47745550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d6e13563628c1_47745550')) {function content_5d6e13563628c1_47745550($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['header_start']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container-fluid inner_container">

<div class="col-sm-12">
   <div class="clearfix margintop-10 marginbot-10 searchresult">
 
   </div>
   <div class="table-responsive clearfix">
   <?php if ($_smarty_tpl->tpl_vars['msg']->value){?> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php }?>	
      <form name="frm" id="frm" action="" method="post">
         <input type="hidden" name="search" id="search" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" />	  
         <input type="hidden" name="hidden_page" id="hidden_page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"/>
         <table class="table table-bordered">
            <thead>
               <tr>
                  <th class="col-sm-1">#</th>
                   
                  <th class="col-sm-2">Model Name</th>
					 <th class="col-sm-3">Image</th>
                  <th class="col-sm-2">Model Year</th>
				  <th class="col-sm-3">Description</th>
               </tr>
            </thead>
            <tbody>
               <?php if ($_smarty_tpl->tpl_vars['modelLists']->value){?>
               <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['modelLists']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
               <tr  id="tr_<?php echo $_smarty_tpl->tpl_vars['blogArray']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['blogId'];?>
">
                  <td class="col-sm-1"><?php echo $_smarty_tpl->tpl_vars['newid']->value;?>
</td>
                 
                 
		 <td class="col-sm-3"><?php echo return_fetched_value($_smarty_tpl->tpl_vars['modelLists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['models_name_en']);?>
</td>
		  <td class="col-sm-3"><img src="<?php echo $_smarty_tpl->tpl_vars['sitebaseurl']->value;?>
/api/<?php echo $_smarty_tpl->tpl_vars['modelLists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['models_image'];?>
" height="150";width="150"/></td>
		 <td class="col-sm-2"><?php echo return_fetched_value($_smarty_tpl->tpl_vars['modelLists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['models_year']);?>
<!--<img src="https://www.showroomz.com/dev/api/webview/exteriordefault.php">--></td>
                  <td class="col-sm-3">
                 <?php if ($_smarty_tpl->tpl_vars['modelLists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['models_desc_en']==''){?>No Description in database !! <?php }else{ ?><?php echo return_fetched_value($_smarty_tpl->tpl_vars['modelLists']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['models_desc_en']);?>
<?php }?>
		                
		     
                  </td>
               </tr>
               <!-- <?php echo $_smarty_tpl->tpl_vars['newid']->value++;?>
 --> 
               <?php endfor; endif; ?>
                
               <?php }else{ ?>
               <tr>
                  <td colspan="5" class="text-center error">Record Not Found</td>
               </tr>
               <?php }?>
            </tbody>
         </table>

         <div class="clearfix"></div>
      </form>
   </div>
  
</div>
<div class="clearfix"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>