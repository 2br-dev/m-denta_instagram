{strip}
{if $uri[0] == ''}
		<div class="main-content content-jumbotron main-banner">		
			<div class="main-content content-input">
			<form id="form-banner" method="post" action='send.php'>	
				<input
						id="phone1"
						type="text"
						placeholder="Ваш номер телефона"
						name="phone"
						required
				>
				<input type="hidden" name="field" value="Поле на баннере">
				<button type="submit">Записаться на бесплатный приём</button>
			</form>	
				
			</div>
		</div>
{/if}
{/strip}