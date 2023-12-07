<section class="advantages py-4 pb-lg-0" id="advantages">
	<div class="container">
		<div class="row gy-4">
			<div class="col-12 col-lg-4">
				<div class="advantages__content d-flex flex-column justify-content-center gap-4 h-100">
					<div class="advantages__title fs-36 fw-700 text-uppercase">
						Преимущества работы с нами
					</div>
					<div class="advantages__text fs-22 lh-normal">
						Мы работаем на результат!
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-8">
				<?
				echo $modx->runSnippet('multiTV', array('tvName' => 'advantages', 'display' => 'all'));
				?>

				<!-- <div class="advantages__lists d-flex flex-column flex-md-row justify-content-center justify-content-lg-between">
					<div class="advantages__lists d-flex flex-column flex-md-row justify-content-center justify-content-lg-between">
						@php
						$advantages = json_decode($documentObject['advantages'], true)['fieldValue'];

						$odd = array_filter($advantages, function ($input) {return $input & 1;}, ARRAY_FILTER_USE_KEY);
						$even = array_filter($advantages, function ($input) {return !($input & 1);}, ARRAY_FILTER_USE_KEY);
						@endphp
						@if(!empty($advantages))
						<ul class="advantages__list position-relative ps-0 mb-0 d-flex flex-column align-items-center">
							@foreach($odd as $row)
							<li class="advantages__item">
								<div class="advantages__counter mb-4">{{ $loop->iteration }}</div>
								<div class="advantages__item-text fs-20 lh-normal">
									{{ $row['text'] }}
								</div>
							</li>
							@endforeach
						</ul>

						<ul class="advantages__list position-relative ps-0 mb-0 d-flex flex-column align-items-center">
							@foreach($even as $row)
							<li class="advantages__item">
								<div class="advantages__counter mb-4">{{ $loop->iteration }}</div>
								<div class="advantages__item-text fs-20 lh-normal">
									{{ $row['text'] }}
								</div>
							</li>
							@endforeach
						</ul>
						@endif
					</div>

				</div> -->
				<!-- <div class="advantages__lists d-flex flex-column flex-md-row justify-content-center justify-content-lg-between">
					<ul class="advantages__list position-relative ps-0 mb-0 d-flex flex-column align-items-center">
						<li class="advantages__item">
							<div class="advantages__counter mb-4">01</div>
							<div class="advantages__item-text fs-20 lh-normal">
								Опыт работы в области фитнеса - более 7 лет
							</div>
						</li>
						<li class="advantages__item">
							<div class="advantages__counter mb-4">03</div>
							<div class="advantages__item-text fs-20 lh-normal">
								Быстрая реализация поставленных задач на основе имеющихся
								наработок
							</div>
						</li>
						<li class="advantages__item">
							<div class="advantages__counter mb-4">05</div>
							<div class="advantages__item-text fs-20 lh-normal">
								Мы точно знаем, что нужно вашему бизнесу, имея огромный опыт
								работы в сфере фитнеса
							</div>
						</li>
					
						<li class="advantages__item">
							<div class="advantages__counter mb-4">02</div>
							<div class="advantages__item-text fs-20 lh-normal">
								Продвижение 40+ клубов по всей территории России и Беларуси
							</div>
						</li>
						<li class="advantages__item">
							<div class="advantages__counter mb-4">04</div>
							<div class="advantages__item-text fs-20 lh-normal">
								Гарантированный результат продвижения
							</div>
						</li>
						<li class="advantages__item">
							<div class="advantages__counter mb-4">06</div>
							<div class="advantages__item-text fs-20 lh-normal">
								Настраиваем сквозную аналитику для получения максимально
								прозрачной статистики
							</div>
						</li>
					</ul>
				</div> -->
			</div>
		</div>
	</div>
</section>