<section class="about-news">
    <div class="container-812">
        <a href="/about/novosti" class="nav-link"> << Новости</a>
        <h1 class="black-centre-24">{$news.title}</h1>
    </div>
    {foreach from=$news.image_file item=img}
    <img class="centre" src="{$img.sm.file}" alt="{$news.title}">
    {/foreach}
    <div class="container-812">
        <p>{$news.desc}</p>
    </div>
    <a class="btn centre" href="/about/novosti">Вернуться к новостям</a>
</section>