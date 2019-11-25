{if $uri[0]==''}
<div class="main-content content-gallery ">
    <div class="main-content content-gallery-license wow fadeInUp" data-wow-delay=".75s">
        <a class="link" href="about/fotogalereya">Лицензии</a>
        <div class="gallery-license">
        	{foreach from=$docs item=doc}
	            {foreach from=$doc.image_file item=img}
	            <div class="gallery-item">
	                <a href="{$img.original.file}" data-lightbox="license"><img src="{$img.sm.file}" alt="license"></a>
	            </div>
	            {/foreach}
            {/foreach}
        </div>
    </div>
    <div class="main-content content-gallery-photos wow fadeInUp" data-wow-delay=".75s">
        <a class="link" href="about/fotogalereya">Перейти в Галерею компании</a>
        <div class="gallery-photos">
        	{foreach from=$gallery item=gal}
	            {foreach from=$gal.image_file item=image}
	            <div class="gallery-item">
	                <a href="{$image.original.file}" data-lightbox="gallery"><img src="{$image.sm.file}" alt="gallery"></a>
	            </div>
	            {/foreach}
            {/foreach}
        </div>
    </div>
</div>
{/if}
{if $uri[1]=='fotogalereya'}
<section class="fotogalereya">
    <div class="container-812">
        <a href="/about" class="nav-link"> << О клинике</a>
        <h2 class="black-centre-24">Фотогалерея</h2>
    </div>
    <div class="container">
        <div>
            <div class="container-gallery">
                <a href="#gallery-header" class="btn">Смотреть альбом</a>
            </div>
            <a href="#gallery-header" class="red-link gallery-link">Клиника в фотографиях</a>
        </div>
        <div>
            <div class="container-docs">
                <a href="#gallery-header" class="btn">Смотреть альбом</a>
            </div>
            <a href="#gallery-header" class="red-link docs-link">Документы</a>
        </div>
    </div>
    <div class="container-812">
        <p id="gallery-header" class="black-centre-24"></p>
    </div>
    <div class="container">
        <div class="container-docs-preview">
            {foreach from=$docs item=doc}
                {foreach from=$doc.image_file item=img}
                <div class="gallery-item">
                    <a href="{$img.original.file}" data-lightbox="license"><img src="{$img.sm.file}" alt="license"></a>
                </div>
                {/foreach}
            {/foreach}
        </div>
        <div class="container-gallery-preview">
            {foreach from=$gallery item=gal}
                {foreach from=$gal.image_file item=image}
                <div class="gallery-item">
                    <a href="{$image.original.file}" data-lightbox="gallery"><img src="{$image.square.file}" alt="gallery"></a>
                </div>
                {/foreach}
            {/foreach}
        </div>
    </div>
</section>
{/if}
