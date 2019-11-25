{if $price}
    <div class="price-block">
        <h2>Прайс</h2>
        <div class="price-block__title">
            <p>Код услуги</p>
            <p>Описание</p>
            <p>Цена</p>
        </div>
        {foreach $price as $item}
            <div class="price-block__item">
                <p>{$item.code}</p>
                <p>{$item.desc}</p>
                <p>{$item.price}</p>
            </div>
        {/foreach}
    </div>
{/if}