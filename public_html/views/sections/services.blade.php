<section class="services bg-dark py-5" id="services">
	<div class="container">
		<div class="row pb-5">
			<div class="col-12 col-lg-4 order-1 order-lg-0 services__pseudo position-relative ">
				<div class="services__box-img position-relative wow animate__zoomInLeft">
					<picture>
						<source srcset="template/images/forma.webp" type="image/webp"><img src="template/images/forma.png" alt="forma" class="services__img" />
					</picture>
					<div class="services__text pt-5 pb-4 px-4 position-absolute fs-20 text-center w-100">
						Мы поможем вам в<br />
						продвижении вашего бизнеса
					</div>
				</div>
				<form action="#" class="services__form form animate__zoomInLeft" data-wow-delay="0.2s">
					<div class="form-group mb-5 position-relative">
						<input type="tel" class="form-control form__input py-4 ps-3" name="tel" id="tel" placeholder="+7 (___) ___-__-__" required />
					</div>
					<button type="submit" class="form__button button fs-24 ps-2 position-relative text-start">
						Оставить заявку<br />
						на продвижение
					</button>
				</form>
			</div>
			<div class="col-12 col-lg-7 offset-xl-1">
				<div class="services__title fs-36 fw-700 text-uppercase mb-5">
					Услуги для фитнес клуба
				</div>
				{!! $modx->runSnippet('multiTV', ['tvName' => 'services', 'display' => 'all']) !!}
			</div>
		</div>
	</div>
</section>