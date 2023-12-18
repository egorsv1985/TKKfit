<section class="advantages py-5 p-lg-4 pb-lg-0" id="advantages">
	<div class="container">
		<div class="row gy-4">
			<div class="col-12 col-lg-4">
				<div class="advantages__content d-flex flex-column justify-content-center gap-4 h-100 wow animate__jackInTheBox" data-wow-delay="0.5s">
					<div class="advantages__title fs-36 fw-700 text-uppercase">
						Преимущества работы с нами
					</div>
					<div class="advantages__text fs-22 lh-normal">
						Мы работаем на результат!
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-8">
				<div class="advantages__lists d-flex flex-column flex-md-row justify-content-center justify-content-lg-between">
					{!! $modx->runSnippet('multiTV', ['tvName' => 'advantages', 'display' => 'all', 'evenClass'=>'even' ,'oddClass'=>'odd', 'rowTpl'=>'serviceTplOdd']) !!}
					{!! $modx->runSnippet('multiTV', ['tvName' => 'advantages', 'display' => 'all', 'evenClass'=>'even' ,'oddClass'=>'odd', 'rowTpl'=>'serviceTplEven']) !!}
				</div>
			</div>
		</div>
	</div>
</section>