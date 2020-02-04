[{$smarty.block.parent}]
[{if $oDetailsProduct->oxarticles__oa_extproduct_url->value}]
   <div>
       <a href="[{$oDetailsProduct->oxarticles__oa_extproduct_url->value}]">
           [{$oDetailsProduct->oxarticles__oa_extproduct_url_label->value}]
       </a>
   </div>
[{/if}]