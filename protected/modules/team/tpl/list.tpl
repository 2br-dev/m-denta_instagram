<section class="about-team">
    <div class="container-812">
        <a href="/about" class="nav-link"> << О клинике</a>
        <h2 class="black-centre-24">Наша команда</h2>
    </div>
    <div class="wrapper-first">
        <div class="container-812">
            {foreach from=$team item=sort}
            <div class="half-width-column">
            	{foreach from=$sort.image_file item=img}
                <img src="{$img.sm.file}" alt="{$sort.name}">
                {/foreach}
	                {if $sort.desc}
	                <a class="btn" href="/about/nasha-komanda/{$sort.system}">{$sort.name}</a>
	                	{else}
	                	<p>{$sort.name}</p>
	                {/if}
                <p>{$sort.position}</p>
            </div>
            {/foreach}
        </div>
    </div>
</section>