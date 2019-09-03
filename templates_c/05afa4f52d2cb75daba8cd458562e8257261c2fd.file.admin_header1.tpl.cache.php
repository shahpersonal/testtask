<?php /* Smarty version Smarty-3.1.14, created on 2019-09-03 10:16:38
         compiled from "C:\xampp\htdocs\taskdemo\templates\admin\commonFiles\admin_header1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:261615d6e135637eb33-52008988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05afa4f52d2cb75daba8cd458562e8257261c2fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\taskdemo\\templates\\admin\\commonFiles\\admin_header1.tpl',
      1 => 1523193849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261615d6e135637eb33-52008988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'siteroot' => 0,
    'ADMINTITLE' => 0,
    'siterootuser' => 0,
    'COUNTDOWN_TIME' => 0,
    'abc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5d6e135639ee83_86384124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d6e135639ee83_86384124')) {function content_5d6e135639ee83_86384124($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/siteAssets/images/favicon.ico"/>
      <title><?php echo $_smarty_tpl->tpl_vars['ADMINTITLE']->value;?>
 </title>
      <link href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/siteAssets/repcss/bootstrap.css" rel="stylesheet"><link href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/siteAssets/repcss/style.css" rel="stylesheet"><link href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/siteAssets/repcss/media-quaries.css" rel="stylesheet"><link href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/siteAssets/repcss/build.css" rel="stylesheet"><link href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/siteAssets/repcss/jquery.datetimepicker.css" rel="stylesheet"><link href="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/siteAssets/repcss/font-awesome.css" rel="stylesheet"><script src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/siteAssets/js/jquery-2.0.3.min.js" type="text/javascript"></script><script src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/siteAssets/repjs/bootstrap.min.js" type="text/javascript"></script><script src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/siteAssets/js/jquery.validate.min.js" type="text/javascript"></script><script src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/siteAssets/repjs/responsivetabs.js" type="text/javascript"></script><script src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/siteAssets/repjs/jquery.datetimepicker.js" type="text/javascript"></script><!-- IE10 viewport hack for Surface/desktop Windows 8 bug --><script src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/siteAssets/repjs/ie10-viewport-bug-workaround.js" type="text/javascript"></script><!-- For Language Selection--><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/siteAssets/js/tabchange.js" type="text/javascript"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/siteAssets/js/jquery-ui.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
/siteAssets/js/requestJeebley.js"></script>
      
      <script type="text/javascript" >
         var SITEROOT = '<?php echo $_smarty_tpl->tpl_vars['siteroot']->value;?>
';
         var siterootuser = '<?php echo $_smarty_tpl->tpl_vars['siterootuser']->value;?>
';
         var COUNTDOWN_TIME = "<?php echo $_smarty_tpl->tpl_vars['COUNTDOWN_TIME']->value;?>
";
          var COUNTDOWN_TIMEM = "<?php echo $_smarty_tpl->tpl_vars['abc']->value;?>
";
         
     //    var COUNTDOWN_TIMEM = "<?php echo $_smarty_tpl->tpl_vars['COUNTDOWN_TIME']->value/1000;?>
";
         function changeLanguage(val)
         {
			 var totalRec = val;
			 var searchVal = $('#search').val();
			 var hidden_page = $('#hidden_pageno').val();
			 window.location = SITEROOT + '/home.php?q=yourFork&search=' + searchVal + '&page=' + hidden_page +'&langId=' + val;
         }
         
         
      /*   function changeLang(language,currentlang)
         {     
			 $.ajax({
				 url:SITEROOT+"/changelanguage.php",      
				 type: "POST",
				 data: "languange="+language, 
				 success: function(responce_msg){ 
					 if(responce_msg!="")
					 window.location.href=responce_msg;
					 else
					 window.location.href=SITEROOT;
				 }
			 });	  
         }  */
	function changeLang(currentlang)
         {
			if(currentlang == 1)
			{
			var language =2;
			}
			else{
			var language =1;
			}
			 $.ajax({
				 url:SITEROOT+"/changelanguage.php",      
				 type: "POST",
				 data: "languange="+language, 
				 success: function(responce_msg){ 
					 if(responce_msg!="")
					 window.location.href=responce_msg;
					 else
					 window.location.href=SITEROOT;
				 }
			 });	  
         } 
		 function changeCountry(ctrID)
         {     
			 $.ajax({
				 url:SITEROOT+"/changecountry.php",      
				 type: "POST",
				 data: "ctrID="+ctrID, 
				 success: function(responce_msg){
					 if(responce_msg!="")
					 window.location.href=responce_msg;
					 else
					 window.location.href=SITEROOT;
				 }
			 });	  
         }

	// request to jeebley
	function requestToJeebley() {
var isValid = $("#form_requestToJeebley").valid();
if(isValid)
	 {
		$.ajax({
			url:SITEROOT+'/home.php?q=requestToJeebley',
			type: 'POST',
			data: $('#form_requestToJeebley').serialize(),
			success: function(result){
				$(".requestResponse").html(result);
				$("#generalMessage").val("");
				//window.location = window.location.href+"&success=mailSuccess";
				window.location.reload();
			}
		});

	}
}
	// Order Request to jeebley
	function orderRequestToJeebley() {
		var isValid = $("#form_orderrequestToJeebley").valid();
	 if(isValid)
	 {
		 $(".ajaxloader").show(); 
	 

		$.ajax({
			url:SITEROOT+'/home.php?q=orderRequestToJeebley',
			type: 'POST',
			data: $('#form_orderrequestToJeebley').serialize(),
			success: function(result){
				$(".orderrequestResponse").html(result);
				$("#requestButton").hide();
				$("#orderMessage").val("");
				$("#restMobileNo").val("");
				window.location.reload();
			}
		});
	}		

	}	
      </script>
<script>
$(document).ready(function(){
 $('.modal-dialog').draggable({
            handle: ".modal-header"
        });
		});


function closePopUp()
{
window.location.reload();
}
		</script>
      	  
      
<?php }} ?>