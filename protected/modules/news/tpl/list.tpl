<section class="about-news">

        <div class="container-812">
            <a href="/about" class="nav-link"> << О клинике</a>
            <p class="black-centre-24">Новости</p>
        </div>

        {foreach from=$news item=sort}
        <div class="container-flex-2">
            {foreach from=$sort.image_file item=img}
            <img src="{$img.sm.file}" alt="{$sort.name}">
            {/foreach}
            <div class="container-flex-2-info__text">
                <a class="btn" href="/about/novosti/{$sort.system}">{$sort.title}</a>
                <div>
                    {$sort.preview}
                </div>
                <p>{$sort.date}</p>
            </div>
        </div>
        {/foreach}
</section>
