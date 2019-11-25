{strip}

{if $uri[0] == ""}

	<div class="main-content content-advantages">

	{if isset($_sitemenu.services) nocache}
            
                {foreach $_sitemenu.services as $e}
                    {if $e.system !== 'zubotehnicheskaya-laboratoriya'}
                        {if  $e.system !== 'esteticheskaya-stomatologiya'}
                        <div class="main-content content-advantages-item">
                            <a href="/{$e.system}" class="srv-{$e.system}">{$e.name}</a>
                        </div> 
                        {/if}
                    {/if}   
                {/foreach}
           
        {/if}
	 </div>
     <div class="main-content content-advantages row2">
        <div class="main-content content-advantages-item">
            <a href="/zubotehnicheskaya-laboratoriya" class="srv-zubotehnicheskaya-laboratoriya">Зуботехническая лаборатория</a>
        </div>
        <div class="main-content content-advantages-item">
            <a href="/esteticheskaya-stomatologiya" class="srv-esteticheskaya-stomatologiya">Эстетическая стоматология</a>
        </div>
     </div>

	{else}  
	 <section class="navigation">
        <div class="navigation-links">
        	{foreach $_sitemenu.services as $e}				
                {if $e.system !== 'zubotehnicheskaya-laboratoriya'}
                    {if  $e.system !== 'esteticheskaya-stomatologiya'}
                        <a href="/{$e.system}" class="navigation-links-link">{$e.name}</a>
                    {/if}
                {/if}  
            {/foreach}
        </div>
        <div class="navigation-links row2-menu">
            <a href="/zubotehnicheskaya-laboratoriya" class="navigation-links-link">Зуботехническая лаборатория</a>
            <a href="/esteticheskaya-stomatologiya" class="navigation-links-link">Эстетическая стоматология</a>
        </div>
    </section>

{/if}


{/strip}
