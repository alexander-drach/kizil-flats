<?php require_once 'includes/header.php' ?>
<main>
	<section class="intro">
		<div class="intro__inner">
			<h1>
				Квартиры в Кызыле
				<span>посуточно</span>
			</h1>
			<div class="intro__desc">
				<p>Ищете квартиру в городе Кызыл?
					<br>На нашем сайте подобраны лучшие варианты съемного жилья
				</p>
				<p>Вы можете забронировать квартиру онлайн
					<br>и наш менеджер тут же с вами свяжется
				</p>
			</div>
			<button class="btn btn-primary" type="button">Забронировать</button>
		</div>
	</section>
	<div class="filter">
		<ul class="list">
			<li>
				<a href="#">Все квартиры</a>
			</li>
			<li>
				<a href="#">1 - комнатные</a>
			</li>
			<li>
				<a href="#">2 - комнатные</a>
			</li>
			<li>
				<a href="#">3 - комнатные</a>
			</li>
		</ul>
	</div><!-- filterr -->
	<section class="flats">
		<div class="container">
			<h2 class="visually-hidden">Список квартир</h2>
			<ul class="list list--main">
				
				<?php for($i = 0; $i < 7; $i++) :?>
				<li>
					<a href="#">
						<article class="card">
						<div class="card__thumb">
							<img src="assets-gulp/build/img/int/2-2.jpg" alt="">
						</div>
						<div class="card__content">
							<h3 class="card__title">ул.Смолина, д.63</h3>
							<div class="card__rooms">
								<svg width="15" height="15">
									<use xlink:href="assets-gulp/build/img/sprite.svg#icon-room"></use>
								</svg>
								Количество комнат: <span> 1</span>
							</div><!-- card__rooms -->
							<div class="card__beds">
								<svg width="15" height="15">
									<use xlink:href="assets-gulp/build/img/sprite.svg#icon-bed"></use>
								</svg>
								Спальных мест: <span>4 (2+2)</span>
							</div><!-- card__beds -->
							<div class="card__price">
								Цена за сутки от: <span>2000</span> руб
							</div>
						</div><!-- card__content -->
					</article>
					</a>					
				</li>
				<?php endfor; ?>

			</ul>
		</div><!-- container -->
	</section>
</main>
<?php require_once 'includes/footer.php' ?>