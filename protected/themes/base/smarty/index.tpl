{strip}
{include file="./components/meta.tpl"}

{include file="./components/modal.tpl"}

{include file="./components/header.tpl"}
    </div>
{include file="./components/main-menu.tpl"}


{*
{if $uri[0] == ''}
  {include file="./components/christmas.tpl"}
{/if} 
*}
<div class="main_content">
    <div class="services-mainPage">
        <div class="services-mainPage__item lechenie-zubov">
            <a class="timeout" href="/lechenie-zubov"></a>
            <img src="/img_new/11.png">
            <p>Лечение зубов</p>

        </div>
        <div class="services-mainPage__item implantacia-zubov">
            <a href="/implantaciya-zubov"></a>
            <img src="/img_new/12.png">
            <p>Имплантация зубов</p>
        </div>
        <div class="services-mainPage__item protezirovanie-zubov">
            <a href="/protezirovanie-zubov"></a>
            <img src="/img_new/13.png">
            <p>Протезирование зубов</p>
        </div>
        <div class="services-mainPage__item smile-album">
            <a href="/albom-ulybok"></a>
            <img src="/img_new/14.png">
            <p>Альбом улыбок</p>
        </div>
        <div class="services-mainPage__item our-works">
            <a href="/nashi-raboty"></a>
            <img src="/img_new/15.png">
            <p>Наши работы</p>
        </div>
        <div class="services-mainPage__item about">
            <a href="/about"></a>
            <img src="/img_new/16.png">
            <p>О клинике</p>
        </div>
    </div>
    <div class="page-content">
        {$_page.content}
    </div>
</div>





{include file="./components/footer.tpl"}

{include file="./components/scripts.tpl"}
{/strip}