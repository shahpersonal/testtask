<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="shortcut icon" type="image/x-icon" href="{$siteroot}/siteAssets/images/favicon.ico"/>
      <title>{$ADMINTITLE} </title>
      {strip}
      <link href="{$siteroot}/siteAssets/repcss/bootstrap.css" rel="stylesheet">
      <link href="{$siteroot}/siteAssets/repcss/style.css" rel="stylesheet">
      <link href="{$siteroot}/siteAssets/repcss/media-quaries.css" rel="stylesheet">
      <link href="{$siteroot}/siteAssets/repcss/build.css" rel="stylesheet">
      <link href="{$siteroot}/siteAssets/repcss/jquery.datetimepicker.css" rel="stylesheet">
      <link href="{$siteroot}/siteAssets/repcss/font-awesome.css" rel="stylesheet">
      <script src="{$siteroot}/siteAssets/js/jquery-2.0.3.min.js" type="text/javascript"></script>
	  <script src="{$siteroot}/siteAssets/repjs/bootstrap.min.js" type="text/javascript"></script>
      <script src="{$siteroot}/siteAssets/js/jquery.validate.min.js" type="text/javascript"></script>     
      <script src="{$siteroot}/siteAssets/repjs/responsivetabs.js" type="text/javascript"></script>    
      <script src="{$siteroot}/siteAssets/repjs/jquery.datetimepicker.js" type="text/javascript"></script>    
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="{$siteroot}/siteAssets/repjs/ie10-viewport-bug-workaround.js" type="text/javascript"></script>
      <!-- For Language Selection-->
      <script type="text/javascript" src="{$siteroot}/siteAssets/js/tabchange.js" type="text/javascript"></script>
	  <script type="text/javascript" src="{$siteroot}/siteAssets/js/jquery-ui.js"></script>
	  <script type="text/javascript" src="{$siteroot}/siteAssets/js/requestJeebley.js"></script>
	  
	
	 
      {/strip}
      {literal}
      <script type="text/javascript" >
         var SITEROOT = '{/literal}{$siteroot}{literal}';
         var siterootuser = '{/literal}{$siterootuser}{literal}';
         var COUNTDOWN_TIME = "{/literal}{$COUNTDOWN_TIME}{literal}";
          var COUNTDOWN_TIMEM = "{/literal}{$abc}{literal}";
         
     //    var COUNTDOWN_TIMEM = "{/literal}{$COUNTDOWN_TIME/1000}{literal}";
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
      	  
      {/literal}
