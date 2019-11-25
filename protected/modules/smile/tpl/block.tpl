{if $smile}
    <div class="smile__wrapper">
        <h1>Открытые улыбки</h1>
        <p class="smile__desc">В клинике М-Дента мы создаем для людей здоровые открытые улыбки. После лечения в нашей стоматологии Вы
            сможете улыбаться смело и быть уверенным в красоте и здоровье Ваших зубов.</p>
        {foreach $smile as $item}
            <div class="smile__item">
                {foreach $item.image_file as $img}
                    <img src="{$img.sm.file}">
                {/foreach}
            </div>
        {/foreach}
    </div>
{/if}