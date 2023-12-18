<section class="promo" id="promo">
	<div class="slider__box pb-4 pb-sm-0">
		<div class="container position-relative">
			<div class="slider__controls-btns d-flex gap-4"></div>
			<div class="slider__controls-dots d-none d-md-block"></div>

			<div class="promo__content d-flex flex-column wow animate__fadeIn">
				<button type="button" data-bs-toggle="modal" data-bs-target="#callback" class="promo__button button text-start fs-24 lh-normal position-relative">
					<span>Оставить заявку<br />
						на продвижение</span>
				</button>
				<div class="promo__box ps-3 ps-md-0 d-flex align-items-center gap-4 position-relative">
					<div class="promo__box-logo d-none d-md-block">
						<img src="template/images/icons/promo-logo.svg" alt="ТКК Fitness - комплексное PROдвижение вашего фитнес-клуба." class="mw-100" />
					</div>
					<div class="promo__subtitle fs-18 fw-500 lh-125 py-3 px-4">
						ТКК Fitness - комплексное PROдвижение вашего фитнес-клуба.
					</div>
				</div>
			</div>
		</div>
		{!! $modx->runSnippet('multiTV', ['tvName' => 'promo_slide', 'display' => 'all']) !!}
	</div>
</section>