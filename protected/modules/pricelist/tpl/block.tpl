<section class="prices">
    <div class="container-812">
        <h2 class="black-centre-24">Прайс-лист на услуги</h2>
    </div>
    {if $consult}
    <a id="1b" class="centre btn price-expand">Консультация</a>
    <div id="1" class="container">
        <table border="0">
            <tr>
                <th class='container-header'>Код услуги</th>
                <th class='container-header'>Описание</th>
                <th class='container-header'>Цены</th>
            </tr> 
            {foreach from=$consult item=item}
            <tr class="row">
                <td class='container-code'>{$item.code}</td>
                <td class='container-desc'>{$item.desc}</td>
                <td class='container-price'>{$item.price}</td>
            </tr>
            {/foreach}
        </table>
    </div>
    <a id="1a" href="#" class="link centre">↓ развернуть ↓</a>


    <a id="2b" class="centre btn price-expand">Терапевтическая стоматология</a>
    <div id="2" class="container">
        <table border="0">
            <tr>
                <th class='container-header'>Код услуги</th>
                <th class='container-header'>Описание</th>
                <th class='container-header'>Цены</th>
            </tr> 
            {foreach from=$terapevtic item=item}
            <tr class="row">
                <td class='container-code'>{$item.code}</td>
                <td class='container-desc'>{$item.desc}</td>
                <td class='container-price'>{$item.price}</td>
            </tr>
            {/foreach}
        </table>
    </div>
    <a id="2a" href="#" class="link centre">↓ развернуть ↓</a>

    <a id="3b" class="centre btn price-expand">Ортопедическая стоматология</a>
    <div id="3" class="container">
        <table border="0">
            <tr>
                <th class='container-header'>Код услуги</th>
                <th class='container-header'>Описание</th>
                <th class='container-header'>Цены</th>
            </tr> 
            {foreach from=$ortopedic item=item}
            <tr class="row">
                <td class='container-code'>{$item.code}</td>
                <td class='container-desc'>{$item.desc}</td>
                <td class='container-price'>{$item.price}</td>
            </tr>
            {/foreach}
        </table>
    </div>    
    <a id="3a" href="#" class="link centre">↓ развернуть ↓</a>

    <a id="4b" class="centre btn price-expand">Хирургическая стоматология</a>
    <div id="4" class="container">
        <table border="0">
            <tr>
                <th class='container-header'>Код услуги</th>
                <th class='container-header'>Описание</th>
                <th class='container-header'>Цены</th>
            </tr> 
            {foreach from=$hirurgic item=item}
            <tr class="row">
                <td class='container-code'>{$item.code}</td>
                <td class='container-desc'>{$item.desc}</td>
                <td class='container-price'>{$item.price}</td>
            </tr>
            {/foreach}
        </table>
    </div>
    <a id="4a" href="#" class="link centre">↓ развернуть ↓</a>


    {* <a id="5b" class="centre btn price-expand">Ортодонтическая стоматология</a>
    <div id="5" class="container">
        <table border="0">
            <tr>
                <th class='container-header'>Код услуги</th>
                <th class='container-header'>Описание</th>
                <th class='container-header'>Цены</th>
            </tr> 
            {foreach from=$ortodontic item=item}
            <tr class="row">
                <td class='container-code'>{$item.code}</td>
                <td class='container-desc'>{$item.desc}</td>
                <td class='container-price'>{$item.price}</td>
            </tr>
            {/foreach}
        </table>
    </div>    
    <a id="5a" href="#" class="link centre">↓ развернуть ↓</a> *}


</section>

{/if}
