</head>
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
	  
	  
	  <div class="col-md-2 col-sm-2 paddingright-0"><a {if $adminDetails.userType eq 1 } href="{$siteroot}/" {else if $adminDetails.userType eq 2} href="{$siteroot}/home.php?q=restaurant" {else}href="{$siteroot}/home.php?q=coAdminDashboard" {/if} ><img src="{$siteroot}/siteAssets/images/jeebley-logo1.png" style="height:26px; margin-top:6px; margin-left:10px;" valign="middle" align="Logo" title="Logo"/></a></div>
      
	  <div class="col-sm-7 col-md-7 paddingleft-0 paddingright-0">
      <div class="navbar-collapse collapse paddingleft-0 paddingright-0">
         {if $adminDetails.userType neq 7}
         <ul  style="margin-left:-10px;" class="nav navbar-nav nav1">
            <!-- <li><a href="{$siteroot}" title="Dashboard"><img src="{$siteroot}/siteAssets/images/home-icon.png"></a></li> -->
            {section name=i loop=$menus}
            {if $menus[i].menu_status eq '1' || $user eq '1' || $user eq '2'}
            {if $active eq $menus[i].menu_alise} 
            <li class="dropdown active">
               {else}
            <li class="dropdown">
               {/if}
               <a style="padding: 6px 6px 0px;" href="#" class="dropdown-toggle" data-toggle="dropdown">{$menus[i].menu_name}<span class="caret" style="margin-left:5px"></span></a>
               <ul class="dropdown-menu" role="menu">
                  {section name=j loop=$menus[i].submenu_name}
                  {assign var ="sub" value="submenu_"|cat:$menus[i].submenu_name[j].submenu_id}				
                  {if $menus[i].$sub eq '1' && $menus[i].submenu_name[j].submenu_status eq '1'|| $user eq '1' || $user eq '2'}
                  <li><a href="{$siteroot}/home.php?q={$menus[i].submenu_name[j].submenu_alise}">{$menus[i].submenu_name[j].submenu_name}</a></li>
                  {/if}
                  {/section}
               </ul>
            </li>
            {/if}	
            {/section}
			{if $adminDetails.userType eq 1 && $smarty.get.q eq '' OR $smarty.get.q eq dashboard}
			<li class="margintop-10" style="margin-left: 6px;"><span id="dashboardCounter" class="btn gradientbtn" style="width:70px;">{$abc}</span></li>
			{/if}
         </ul>
		 {/if}
		 <!--<div class="right-nav">
			<a href="{$SITEURL}" target="_blank"><i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i></a>
		 </div>------------------------->
      </div>
	  </div>
			
			<div class=" col-md-2 col-sm-2 paddingleft-0 paddingright-0">
			 <div style="display:flex;">
               <label style="font-size:12px; margin-top:8px;"">Choose Country :</label>
               <select  style="font-size:12px; width:auto; margin-left:5px; margin-top:3px;height:30px;" class="form-control pull-left" onchange="javascript:changeCountry(this.value);" id="countryAdmin" name="countryAdmin">
               {section name=i loop=$adminCountryArray}
               <option value="{$countryArray[i].cntrID}" {if $smarty.session.ctrID eq $adminCountryArray[i].cntrID}selected="selected" {/if}>
               {$adminCountryArray[i].cntrName|return_fetched_value}
               </option>
               {/section}
               </select>
           </div>
			</div>
	  
	  	  <div style="margin-left: -40px; margin-top:6px;" class="col-md-1 col-sm-1 paddingleft-10 paddingright-10">
				<ul class="nav navbar-top-links navbar-right nav2">
				<!-- /.dropdown -->
				<li class="dropdown logOutAction">
				   <a href="#" data-toggle="dropdown" class="dropdown-toggle" style="padding: 0px; min-height:0px !important;" aria-expanded="false">
				   <span class="fa-stack">
				   {if $adminDetails.userType eq 1}
				   <i class="fa fa-user"></i>
				   {elseif $adminDetails.userType eq 2 }
				   <i class="fa fa-user-secret marginleft-10"></i>
				   {/if}
				   </span>Hi {$adminDetails.fname|return_fetched_value} <i class="fa fa-angle-down"></i>

				   </a>
				   <ul style="margin-top: -23px;min-width: auto;" class="dropdown-menu dropdown-user">
					  <li style="min-width:auto !important;"><a style="color:#000 !important; padding:3px 10px 3px 10px !important;" href="{$siteroot}/home.php?q=editProfile">
						{if $adminDetails.userType eq 1}
				   <i class="fa fa-user"></i> 
				   {elseif $adminDetails.userType eq 2 }
				   <i class="fa fa-user-secret"></i>
				   {/if}

					  Profile</a>
					  </li>
					  <li class="divider"></li>
					  <li style="min-width:auto !important;"><a style="color:#000 !important; padding:3px 10px 3px 10px !important;" href="{$siteroot}/logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a>
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
