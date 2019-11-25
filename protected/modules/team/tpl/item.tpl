<section class="about-employee">
	<div class="container-812">
        <a href="/about" class="nav-link"> << О клинике</a>
        <h2 class="black-centre-24">{$team.name}</h2>
    </div>

	<div class="container-flex-2">
		<div class="container-flex-2-info__img">
			{foreach from=$team.image_file item=img}
			<img src="{$img.sm.file}" alt="">
			{/foreach}
		</div>
		<div class="container-flex-2-info__text">
			<p><strong>{$team.name}</strong></p>
			<p>{$team.position}</p>
			<a href="/about/nasha-komanda" class="btn"> К странице команды</a>
		</div>
		
	</div>
	<div class="container-812">
		<p>{$team.desc}</p>
	</div>
	
</section>


