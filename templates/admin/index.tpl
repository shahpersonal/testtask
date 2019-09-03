{include file=$header_start}

<div class="container-fluid inner_container">

<div class="col-sm-12">
   <div class="clearfix margintop-10 marginbot-10 searchresult">
 
   </div>
   <div class="table-responsive clearfix">
   {if $msg} {$msg}{/if}	
      <form name="frm" id="frm" action="" method="post">
         <input type="hidden" name="search" id="search" value="{$search}" />	  
         <input type="hidden" name="hidden_page" id="hidden_page" value="{$page}"/>
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
               {if $modelLists}
               {section name=i loop=$modelLists}
               <tr  id="tr_{$blogArray[i].blogId}">
                  <td class="col-sm-1">{$newid}</td>
                 
                 
		 <td class="col-sm-3">{$modelLists[i].models_name_en|return_fetched_value}</td>
		  <td class="col-sm-3"><img src="{$sitebaseurl}/api/{$modelLists[i].models_image}" height="150";width="150"/></td>
		 <td class="col-sm-2">{$modelLists[i].models_year|return_fetched_value}<!--<img src="https://www.showroomz.com/dev/api/webview/exteriordefault.php">--></td>
                  <td class="col-sm-3">
                 {if $modelLists[i].models_desc_en eq ''}No Description in database !! {else}{$modelLists[i].models_desc_en|return_fetched_value}{/if}
		                
		     
                  </td>
               </tr>
               <!-- {$newid++} --> 
               {/section}
                
               {else}
               <tr>
                  <td colspan="5" class="text-center error">Record Not Found</td>
               </tr>
               {/if}
            </tbody>
         </table>

         <div class="clearfix"></div>
      </form>
   </div>
  
</div>
<div class="clearfix"></div>
</div>
{include file=$footer}
