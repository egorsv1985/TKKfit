<section class="promo" id="promo">
	<div class="slider__box pb-4 pb-sm-0">
		<div class="container position-relative">
			<div class="slider__controls-btns d-flex gap-4"></div>
			<div class="slider__controls-dots d-none d-md-block"></div>

			<div class="promo__content d-flex flex-column">
				<a data-popup="#callback" href="#callback" role="button" class="promo__button button fs-24 lh-normal position-relative">
					Оставить заявку<br />
					на продвижение
				</a>
				<div class="promo__box ps-3 ps-md-0 d-flex align-items-center gap-4 position-relative">
					<div class="promo__box-logo d-none d-md-block">
						<img src="template/images/icons/promo-logo.svg" alt="logo" class="mw-100" />
					</div>
					<div class="promo__subtitle fs-18 fw-500 lh-125 py-3 px-4">
						ТКК Fitness - комплексное PROдвижение вашего фитнес-клуба.
					</div>
				</div>
			</div>
		</div>
		@php
		json_decode($documentObject['promo_slide'], true)['fieldValue'];
		@endphp

		<?
		echo $modx->runSnippet('multiTV', array('tvName' => 'promo_slide'));
		?>
		<!-- <div class="promo__slider slider">
			<div class="slider__item position-relative">
				<div class="container">
					<div class="row gy-4">
						<div class="col-9 col-lg-5">
							<div class="slider__title fs-42 fw-700 text-uppercase lh-normal h1 position-relative">
								Увеличьте количество новых клиентов
								<span class="slider__counter fw-900">1</span>
							</div>
						</div>
						<div class="col-12 col-lg-7">
							<div class="slider__box-img position-relative">
								<picture>
									<source srcset="template/images/woman.webp" type="image/webp"><img src="template/images/woman.png" alt="promo 1" class="slider__img" />
								</picture>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slider__item position-relative">
				<div class="container">
					<div class="row gy-4">
						<div class="col-9 col-lg-5">
							<div class="slider__title h1 fs-42 fw-700 text-uppercase lh-normal position-relative">
								Достигните новых высот вместе с нами
								<span class="slider__counter fw-900">2</span>
							</div>
						</div>
						<div class="col-12 col-lg-7">
							<div class="slider__box-img position-relative">
								<picture>
									<source srcset="template/images/woman.webp" type="image/webp"><img src="template/images/woman.png" alt="promo 1" class="slider__img" />
								</picture>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slider__item position-relative">
				<div class="container">
					<div class="row gy-4">
						<div class="col-9 col-lg-5">
							<div class="slider__title h1 fs-42 fw-700 text-uppercase lh-normal position-relative">
								Покажите свой стиль с нашими продуктами
								<span class="slider__counter fw-900">3</span>
							</div>
						</div>
						<div class="col-12 col-lg-7">
							<div class="slider__box-img position-relative">
								<picture>
									<source srcset="template/images/woman.webp" type="image/webp"><img src="template/images/woman.png" alt="promo 1" class="slider__img" />
								</picture>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slider__item position-relative">
				<div class="container">
					<div class="row gy-4">
						<div class="col-9 col-lg-5">
							<div class="slider__title h1 fs-42 fw-700 text-uppercase lh-normal position-relative">
								Откройте для себя удивительные возможности
								<span class="slider__counter fw-900">4</span>
							</div>
						</div>
						<div class="col-12 col-lg-7">
							<div class="slider__box-img position-relative">
								<picture>
									<source srcset="template/images/woman.webp" type="image/webp"><img src="template/images/woman.png" alt="promo 1" class="slider__img" />
								</picture>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slider__item position-relative">
				<div class="container">
					<div class="row gy-4">
						<div class="col-9 col-lg-5">
							<div class="slider__title h1 fs-42 fw-700 text-uppercase lh-normal position-relative">
								Увеличьте количество новых клиентов
								<span class="slider__counter fw-900">5</span>
							</div>
						</div>
						<div class="col-12 col-lg-7">
							<div class="slider__box-img position-relative">
								<picture>
									<source srcset="template/images/woman.webp" type="image/webp"><img src="template/images/woman.png" alt="promo 1" class="slider__img" />
								</picture>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</section>