{strip} 
    <script type="text/javascript" src="{$siteroot}/siteAssets/js/tooptip.js"></script>
{/strip}

<div class="col-sm-12">
   <div class="legendsicons pull-right">
      <!--<div class="heading">Legends</div>-->
      <ul>
       	{if $edit eq 1}
         <li>Edit<b class="glyphicon glyphicon-play"></b></li>
        {/if}
        {if $view eq 1}
         <li>View <b class="glyphicon glyphicon-eye-open"></b></li>
        {/if}
      </ul>
   </div>
</div>
