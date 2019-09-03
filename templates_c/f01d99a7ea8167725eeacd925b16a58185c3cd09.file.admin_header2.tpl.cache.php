<?php /* Smarty version Smarty-3.1.14, created on 2019-09-03 09:52:19
         compiled from "C:\xampp\htdocs\taskdemo\templates\admin\commonFiles\admin_header2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:225835d6e0da37918f7-70564561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f01d99a7ea8167725eeacd925b16a58185c3cd09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\taskdemo\\templates\\admin\\commonFiles\\admin_header2.tpl',
      1 => 1523193849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225835d6e0da37918f7-70564561',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adminDetails' => 0,
    'siteroot' => 0,
    'menus' => 0,
    'user' => 0,
    'active' => 0,
    'sub' => 0,
    'abc' => 0,
    'SITEURL' => 0,
    'adminCountryArray' => 0,
    'countryArray' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5d6e0da38125f1_25590017',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d6e0da38125f1_25590017')) {function content_5d6e0da38125f1_25590017($_smarty_tpl) {?></head>
<body>

   <div id="pagewarp">
   <div class="pagewrap">

   <!-- navbar-->
   

  
   <div style="min-height: 0px !important;" class="navbar navbar-default menublue gray-strip-one" role="navigation">
   <div class="row"> <!-- please remove container  23-10-15-->
      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
      </div>
	  
	  
	  <div class="col-md-2 col-sm-2 paddingright-0"><a <?php if ($_smarty_tpl->tpl_vars['adminDetails']->value['userType']==1){?> href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/" <?php }elseif($_smarty_tpl->tpl_vars['adminDetails']->value['userType']==2){?> href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/home.php?q=restaurant" <?php }else{ ?>href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/home.php?q=coAdminDashboard" <?php }?> ><img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/siteAssets/images/jeebley-logo1.png" style="height:26px; margin-top:6px; margin-left:10px;" valign="middle" align="Logo" title="Logo"/></a></div>
      
	  <div class="col-sm-7 col-md-7 paddingleft-0 paddingright-0">
      <div class="navbar-collapse collapse paddingleft-0 paddingright-0">
         <?php if ($_smarty_tpl->tpl_vars['adminDetails']->value['userType']!=7){?>
         <ul  style="margin-left:-10px;" class="nav navbar-nav nav1">
            <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
" title="Dashboard"><img src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/siteAssets/images/home-icon.png"></a></li> -->
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menus']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <?php if ($_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['menu_status']=='1'||$_smarty_tpl->tpl_vars['user']->value=='1'||$_smarty_tpl->tpl_vars['user']->value=='2'){?>
            <?php if ($_smarty_tpl->tpl_vars['active']->value==$_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['menu_alise']){?> 
            <li class="dropdown active">
               <?php }else{ ?>
            <li class="dropdown">
               <?php }?>
               <a style="padding: 6px 6px 0px;" href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['menu_name'];?>
<span class="caret" style="margin-left:5px"></span></a>
               <ul class="dropdown-menu" role="menu">
                  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['submenu_name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
                  <?php if (isset($_smarty_tpl->tpl_vars["sub"])) {$_smarty_tpl->tpl_vars["sub"] = clone $_smarty_tpl->tpl_vars["sub"];
$_smarty_tpl->tpl_vars["sub"]->value = ("submenu_").($_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['submenu_name'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['submenu_id']); $_smarty_tpl->tpl_vars["sub"]->nocache = null; $_smarty_tpl->tpl_vars["sub"]->scope = 0;
} else $_smarty_tpl->tpl_vars["sub"] = new Smarty_variable(("submenu_").($_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['submenu_name'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['submenu_id']), null, 0);?>				
                  <?php if ($_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->tpl_vars['sub']->value]=='1'&&$_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['submenu_name'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['submenu_status']=='1'||$_smarty_tpl->tpl_vars['user']->value=='1'||$_smarty_tpl->tpl_vars['user']->value=='2'){?>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/home.php?q=<?php echo $_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['submenu_name'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['submenu_alise'];?>
"><?php echo $_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['submenu_name'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['submenu_name'];?>
</a></li>
                  <?php }?>
                  <?php endfor; endif; ?>
               </ul>
            </li>
            <?php }?>	
            <?php endfor; endif; ?>
			<?php if ($_smarty_tpl->tpl_vars['adminDetails']->value['userType']==1&&$_GET['q']==''||$_GET['q']=='dashboard'){?>
			<li class="margintop-10" style="margin-left: 6px;"><span id="dashboardCounter" class="btn gradientbtn" style="width:70px;"><?php echo $_smarty_tpl->tpl_vars['abc']->value;?>
</span></li>
			<?php }?>
         </ul>
		 <?php }?>
		 <!--<div class="right-nav">
			<a href="<?php echo $_smarty_tpl->tpl_vars['SITEURL']->value;?>
" target="_blank"><i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i></a>
		 </div>------------------------->
      </div>
	  </div>
			
			<div class=" col-md-2 col-sm-2 paddingleft-0 paddingright-0">
			 <div style="display:flex;">
               <label style="font-size:12px; margin-top:8px;"">Choose Country :</label>
               <select  style="font-size:12px; width:auto; margin-left:5px; margin-top:3px;height:30px;" class="form-control pull-left" onchange="javascript:changeCountry(this.value);" id="countryAdmin" name="countryAdmin">
               <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['adminCountryArray']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
               <option value="<?php echo $_smarty_tpl->tpl_vars['countryArray']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cntrID'];?>
" <?php if ($_SESSION['ctrID']==$_smarty_tpl->tpl_vars['adminCountryArray']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cntrID']){?>selected="selected" <?php }?>>
               <?php echo return_fetched_value($_smarty_tpl->tpl_vars['adminCountryArray']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cntrName']);?>

               </option>
               <?php endfor; endif; ?>
               </select>
           </div>
			</div>
	  
	  	  <div style="margin-left: -40px; margin-top:6px;" class="col-md-1 col-sm-1 paddingleft-10 paddingright-10">
				<ul class="nav navbar-top-links navbar-right nav2">
				<!-- /.dropdown -->
				<li class="dropdown logOutAction">
				   <a href="#" data-toggle="dropdown" class="dropdown-toggle" style="padding: 0px; min-height:0px !important;" aria-expanded="false">
				   <span class="fa-stack">
				   <?php if ($_smarty_tpl->tpl_vars['adminDetails']->value['userType']==1){?>
				   <i class="fa fa-user"></i>
				   <?php }elseif($_smarty_tpl->tpl_vars['adminDetails']->value['userType']==2){?>
				   <i class="fa fa-user-secret marginleft-10"></i>
				   <?php }?>
				   </span>Hi <?php echo return_fetched_value($_smarty_tpl->tpl_vars['adminDetails']->value['fname']);?>
 <i class="fa fa-angle-down"></i>

				   </a>
				   <ul style="margin-top: -23px;min-width: auto;" class="dropdown-menu dropdown-user">
					  <li style="min-width:auto !important;"><a style="color:#000 !important; padding:3px 10px 3px 10px !important;" href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/home.php?q=editProfile">
						<?php if ($_smarty_tpl->tpl_vars['adminDetails']->value['userType']==1){?>
				   <i class="fa fa-user"></i> 
				   <?php }elseif($_smarty_tpl->tpl_vars['adminDetails']->value['userType']==2){?>
				   <i class="fa fa-user-secret"></i>
				   <?php }?>

					  Profile</a>
					  </li>
					  <li class="divider"></li>
					  <li style="min-width:auto !important;"><a style="color:#000 !important; padding:3px 10px 3px 10px !important;" href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a>
					  </li>
				   </ul>
				   <!-- /.dropdown-user -->
				</li>
				<!-- /.dropdown -->
				</ul>
			</div>
	   </div>
	  
	  </div>
   </div>
   <div style="display: none;" class="ajaxloader" id="loadingtime"></div>
<?php }} ?>