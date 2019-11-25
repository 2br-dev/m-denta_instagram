<div class="ourworks">
  <h1>Наши работы</h1>
    {if $ourworks}
        {foreach from=$ourworks item=works}
            <div class="works__item">
                <p class="works-item__title" data-id="{$works.id}">{$works.name}</p>
                <div class="works-item__img" id="{$works.id}">
                    {foreach from=$works.image_file item=image}
                        <img src="{$image.sm.file}"/>
                    {/foreach}
                </div>
            </div>
        {/foreach}
    {/if}

</div>

