{strip}
{include file="./components/meta.tpl"}

{include file="./components/modal.tpl"}

{include file="./components/header.tpl"}
{include file="./components/main-menu.tpl"}

{*
{if $uri[0] == ''}
  {include file="./components/christmas.tpl"}
{/if} 
*}



<div class="page-content">{$_page.content}</div>
</div>


{include file="./components/footer.tpl"}

{include file="./components/scripts.tpl"}
{/strip}