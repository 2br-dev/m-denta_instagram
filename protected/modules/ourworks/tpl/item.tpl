<section class="workresults">
    <div class="container-812">
        <a href="/nashi-raboty" class="nav-link"> << Наши работы</a>

          <h1 class="black-centre-24">{$ourworks.title}</h1>

    </div>
	<div class="workresults-flex">
      {foreach from=$results item=sort}
        <div class="workresults-container">
          <div class="workresults-desc">
            <p class="workresults-desc-header"><b>{$sort.patient}</b></p>
            {if $sort.comment}
              <p>{$sort.comment}</p>
            {/if}
          </div>
          {foreach from=$sort.image_photo item=img}
            <div class='workresults-image'>
                <a href="{$img.original.file}" title="{$sort.patient}"><div class="workresults-before" style="background: url('{$img.original.file}') center/cover;"></div></a>
            </div>
          {/foreach}   
        </div>
      {/foreach}
    </div>  
</section>





