{strip}

    {if $uri[0] == "implantaciya-zubov" && !$uri[1]}
        <section class="implantacia-main">
            <h1 class="black-centre-24">Имплантация зубов в Краснодаре</h1>
            
            {if isset($_sitemenu.implantaciya) nocache}
             <div class="container-flex-2">
                
                <div class="container-flex-2-info__text">
                    {foreach $_sitemenu.implantaciya as $e}
                    <a href="implantaciya-zubov/{$e.system}" class="red-link">{$e.name}</a>
                    {/foreach}
                    <p>Сегодня потеря зубов уже не считается нерешаемой проблемой. Операции по установке зубных имплантатов успешно проводятся более 40 лет. За это время они доказали свою безопасность, практичность и функциональный результат.</p>
                </div>
            {/if}   
                <img src="/img/new/impl-1.jpg" alt="Имплантация зубов в Краснодаре в стоматологии М-Дента" title="Имплантация зубов в Краснодаре в стоматологии М-Дента">
            </div>
        </section>  
    {/if}

    {if $uri[0] == "protezirovanie-zubov" && !$uri[1]}
        <section class="protezirovanie-main">
            <h1 class="black-centre-24">Протезирование зубов в Краснодаре</h1>
            
            {if isset($_sitemenu.protezirovanie) nocache}
             <div class="container-flex-2">          
                <div class="container-flex-2-info__text">
                    {foreach $_sitemenu.protezirovanie as $e}
                    <a href="protezirovanie-zubov/{$e.system}" class="red-link">{$e.name}</a>
                    {/foreach}
                </div>
            {/if}   
                <img src="/img/protezirovanie-main.jpg" alt="Протезирование зубов в Краснодаре"  title="Протезирование зубов в Краснодаре">
            </div>
        </section>
    {/if}

    {if $uri[0] == "esteticheskaya-stomatologiya" && !$uri[1] }
        <section class="protezirovanie-main">
            <p class="black-centre-24">Эстетическая стоматология</p>
            
            {if isset($_sitemenu.estetic) nocache}
             <div class="container-flex-2">
                
                <div class="container-flex-2-info__text">
                    {foreach $_sitemenu.estetic as $e}
                    <a href="esteticheskaya-stomatologiya/{$e.system}" class="red-link">{$e.name}</a>
                    {/foreach}
                    <p><strong>Эстетическая стоматология — одно из наиболее востребованных направлений, при помощи которого специалисты улучшают внешний вид зубов. </strong></p> 
                    <p>Эстетическая стоматология — это один из сложных разделов стоматологии, который требует высокого профессионализма, огромного опыта, а также индивидуального и творческого подхода.</p>
                    <p>Эстетическая стоматология включает в себя широкий спектр услуг: украшение, реставрация и отбеливание зубов, установка коронок и виниров, позволяющих успешно справиться с различными проблемами.</p>
                </div>
            {/if}   
                <img src="/img/estetic-main.png" alt="protezirovanie-main">

            </div>
        </section>
    {/if}

    {if $uri[0] == "about" && !$uri[1]}
        <section class="about-main">
            <h1 class="black-centre-24">Стоматология в Краснодаре M-Denta</h1>
            
            {if isset($_sitemenu.about) nocache}
             <div class="container-flex-2">
                
                <div class="container-flex-2-info__text">
                    {foreach $_sitemenu.about as $e}
                    <a href="about/{$e.system}" class="red-link">{$e.name}</a>
                    {/foreach}
                    <p>Начиная с 1997 года основатели стоматологической клиники M-Denta - потомственная семья медиков в третьем поколении Мыльцевых - прошли большой путь, постоянно совершенствуя методы стоматологической реабилитации пациентов.</p>
                    <p><strong>Ведущие врачи клиники имеют за плечами не только российское высшее медицинское образование, но и длительную стажировку в известных стоматологических клиниках Европы и США.</strong></p> 
                </div>
            {/if}   
                <img src="/img/about-first.png" alt="protezirovanie-main">

            </div>
        </section>
    {/if}

{/strip}    

