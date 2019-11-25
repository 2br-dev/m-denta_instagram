{strip}
    <header {if $uri[0] != ''}class="not-main"{/if}>
        <div class="main_content">
            {if $uri[0] != ''}
                <div class="header__back">
                    <a href="/"></a>
                </div>
            {/if}
            <div class="header_logo">
                <a class="timeout" href="/">
                    <img src="/img_new/logo.png" title="Стоматология в Краснодаре M-Denta" alt="Стоматология в Краснодаре M-Denta">
                </a>
            </div>
            <div class="header_menu">
                <a></a>
            </div>
            <div class="header_social">
                <a class="facebook"></a>
                <a class="instagramm"></a>
            </div>
            <div class="cb"></div>
        </div>

    </header>
    <div class="body_content main_content">
    <div class="under-header">
        <div class="under-header__info {if $uri[0] != ""}not-main{/if}">
            <div class="main-info">
                <div class="main-info__title">
                    {if $uri[0] == ""}
                        <h1>Стоматология в Краснодаре M-Denta</h1>
                    {else}
                        <p class="like-h1">Стоматология в Краснодаре M-Denta</p>
                    {/if}
                    {if $uri[0] == ''}
                        <p><span id="insta_count"></span> подписчиков в Instagram</p>
                    {/if}
                </div>
                <div class="header-phone_and_address">
                    <div class="header-phone">
                        <a href="tel:+79184403348">+7 918 440 33 48</a>
                        <a href="tel:+78612980851">+7 861 298 08 51</a>
                    </div>
                    <div class="header-address">
                        <p>г. Краснодар,</p>
                         <p>ул. Северная, 490</p>
                    </div>
                </div>
            </div>
            <div class="header-feedback feedback__form">
                <a>Записаться на прием</a>
            </div>
        </div>
        {if $uri[0] == ""}
            <div class="under-header__photo">
                <img src="/img_new/header_photo.png" alt="Евгений Мыльцев - главный врач стоматологии M-Denta">
            </div>
        {/if}
    </div>
    <div class="under-header__mobile">
        <div class="under-header__info {if $uri[0] != ""}not-main{/if}">
            <div class="main-info">
                {if $uri[0] == ""}
                    <div class="under-header__photo">
                        <img src="/img_new/header_photo.png" alt="Евгений Мыльцев - главный врач стоматологии M-Denta">
                    </div>
                {/if}
                <div class="main-info__title">
                    {if $uri[0] == ""}
                        <h1>Стоматология в Краснодаре <span style="white-space:nowrap;">M-Denta</span></h1>
                    {else}
                        <p class="like-h1">Стоматология в Краснодаре <span style="white-space:nowrap;">M-Denta</span></p>
                    {/if}
                    {if $uri[0] == ''}
                        <p class="insta"><span id="insta_count"></span> подписчиков в Instagram</p>
                    {/if}
                    <div class="header-address">
                        <p>г. Краснодар, ул. Северная, 490</p>
                    </div>
                </div>                
            </div>
            <div class="header-phone_and_address">
                <div class="header-phone">
                    <a href="tel:+79184403348">+7 918 440 33 48</a>
                    <a href="tel:+78612980851">+7 861 298 08 51</a>
                </div>
                <div class="header-feedback feedback__form">
                    <a>Записаться на прием</a>
                </div>
            </div>
        </div>        
    </div>


    
{/strip}
