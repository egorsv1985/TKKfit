@extends('layouts.app')
@section('promo')
<section class="promo" id="promo">
	<div class="slider__box pb-4 pb-sm-0">
		<div class="container position-relative">
			<div class="slider__controls-btns d-flex gap-4 flex-column flex-md-row"></div>
			<div class="slider__controls-dots"></div>

			<div class="promo__content d-flex flex-column">
				<a data-popup="#callback" href="#callback" role="button" class="promo__button button fs-24 lh-normal position-relative">
					Оставить заявку<br />
					на продвижение
				</a>
				<div class="promo__box d-flex align-items-center gap-4 position-relative">
					<div class="promo__box-logo">
						<img src="images/icons/promo-logo.svg" alt="logo" class="mw-100" />
					</div>
					<div class="promo__subtitle fs-18 fw-500 lh-125 py-3 px-4">
						ТКК Fitness - комплексное PROдвижение вашего фитнес-клуба.
					</div>
				</div>
			</div>
		</div>
		<div class="promo__slider slider">
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
									<source srcset="images/woman.webp" type="image/webp"><img src="images/woman.png" alt="promo 1" class="slider__img" />
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
									<source srcset="images/woman.webp" type="image/webp"><img src="images/woman.png" alt="promo 1" class="slider__img" />
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
									<source srcset="images/woman.webp" type="image/webp"><img src="images/woman.png" alt="promo 1" class="slider__img" />
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
									<source srcset="images/woman.webp" type="image/webp"><img src="images/woman.png" alt="promo 1" class="slider__img" />
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
									<source srcset="images/woman.webp" type="image/webp"><img src="images/woman.png" alt="promo 1" class="slider__img" />
								</picture>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
@section('services')
<section class="services bg-dark py-5 position-relative" id="services">
	<div class="container">
		<div class="row pb-5">
			<div class="col-12 col-lg-4">
				<div class="services__box-img position-relative">
					<picture>
						<source srcset="images/forma.webp" type="image/webp"><img src="images/forma.png" alt="forma" class="services__img" />
					</picture>
					<div class="services__text pt-5 pb-4 px-4 position-absolute fs-20 text-center w-100">
						Мы поможем вам в<br />
						продвижении вашего бизнеса
					</div>
				</div>
				<form action="#" class="services__form form">
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
				<ul class="services__list d-flex flex-md-wrap flex-column gap-4">
					<li class="services__item fs-22 lh-normal ps-5 position-relative">
						Разработка сайта
					</li>
					<li class="services__item fs-22 lh-normal ps-5 position-relative">
						Контекстная<br />
						реклама
					</li>
					<li class="services__item fs-22 lh-normal ps-5 position-relative">
						SMM-продвижение
					</li>
					<li class="services__item fs-22 lh-normal ps-5 position-relative">
						Редизайн и<br />
						ребрендинг
					</li>
					<li class="services__item fs-22 lh-normal ps-5 position-relative">
						Медийная и<br />
						видеореклама
					</li>
					<li class="services__item fs-22 lh-normal ps-5 position-relative">
						Подключение<br />
						коллтрекинга
					</li>
					<li class="services__item fs-22 lh-normal ps-5 position-relative">
						Настройка<br />
						сквозной аналитики
					</li>
					<li class="services__item fs-22 lh-normal ps-5 position-relative">
						SEO-продвижение
					</li>
					<li class="services__item fs-22 lh-normal ps-5 position-relative">
						Таргетированная<br />
						реклама
					</li>

					<li class="services__item fs-22 lh-normal ps-5 position-relative">
						Разработка брендбука
					</li>
					<li class="services__item fs-22 lh-normal ps-5 position-relative">
						Реклама в<br />
						мессенджерах<br />
						(Viber, Telegram и др)
					</li>
					<li class="services__item fs-22 lh-normal ps-5 position-relative">
						SMS-рассылки<br />
						для фитнес-клуба<br />
						по базе МТС
					</li>
					<li class="services__item fs-22 lh-normal ps-5 position-relative">
						Реклама в геосервисах<br />
						Яндекса (Справочник,<br />
						Навигатор)
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
@endsection
@section('advantages')
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
				<div class="advantages__lists d-flex flex-column flex-md-row justify-content-center justify-content-lg-between">
					<ul class="advantages__list advantages__list--left position-relative ps-0 mb-0 d-flex flex-column align-items-center">
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
					</ul>
					<ul class="advantages__list advantages__list--right position-relative ps-0 mb-0 d-flex flex-column align-items-center">
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
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('banner')
<section class="banner position-relative" id="banner">
	<div class="container">
		<div class="row gy-4 justify-content-center justify-content-lg-start">
			<div class="col-8 col-lg-6 order-1 order-lg-0">
				<div class="banner__box-img">
					<img class="w-100 h-auto" src="images/banner.png" alt="banner" width="552" height="537" />
				</div>
			</div>
			<div class="col-12 col-lg-6">
				<div class="banner__title fs-36 fw-700 lh-normal">
					Отсутствие конкурентных пересечений
				</div>
				<div class="banner__text fs-18 lh-normal">
					Если в нашей компании работают клубы из одного георасположения, то
					работу над проектом ведут разные специалисты, которые не знают
					бюджетов конкурентов, и имеют свои собственные KPI. Поэтому они
					заинтересованы каждый в лучшем продвижении своего проекта.
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('prices')
<section class="" id="prices">
	<div class="container">
		<div class="prices__title fs-36 fw-700 lh-normal text-center text-uppercase">
			Сколько стоит продвижение фитнес-клуба
		</div>

		<div class="prices__table table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th></th>
						<th><b>FIT</b>Start</th>
						<th><b>FIT</b>Standart</th>
						<th><b>FIT</b>Business</th>
						<th><b>FIT</b>PRO</th>
						<th><b>FIT</b>Custom</th>
					</tr>
				</thead>
				<tbody>
					<tr class="cost">
						<td></td>
						<td>
							<div class="table__item">50 000 ₽/мес</div>
						</td>
						<td>
							<div class="table__item">70 000 ₽/мес</div>
						</td>
						<td>
							<div class="table__item">100 000 ₽/мес</div>
						</td>
						<td>
							<div class="table__item">150 000 ₽/мес</div>
						</td>
						<td>
							<div class="table__item">Custom</div>
						</td>
					</tr>
					<tr class="empty">
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr class="">
						<td class="name">
							Разработка лендинга<br />
							для рекламы
						</td>
						<td><img src="images/icons/remove.svg" alt="remove" /></td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
					</tr>
					<tr class="">
						<td class="name">Разработка сайта для SEO</td>
						<td><img src="images/icons/remove.svg" alt="remove" /></td>
						<td><img src="images/icons/remove.svg" alt="remove" /></td>
						<td><img src="images/icons/remove.svg" alt="remove" /></td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
					</tr>
					<tr class="">
						<td class="name">SEO-продвижение</td>
						<td><img src="images/icons/remove.svg" alt="remove" /></td>
						<td><img src="images/icons/remove.svg" alt="remove" /></td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
					</tr>
					<tr class="">
						<td class="name">Контекстная реклама</td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
					</tr>
					<tr class="">
						<td class="name">Таргетированная реклама</td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
					</tr>
					<tr class="">
						<td class="name">SMM-продвижение</td>
						<td><img src="images/icons/remove.svg" alt="remove" /></td>
						<td><img src="images/icons/remove.svg" alt="remove" /></td>
						<td><img src="images/icons/remove.svg" alt="remove" /></td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
					</tr>
					<tr class="">
						<td class="name">Разработка брендбука</td>
						<td><img src="images/icons/remove.svg" alt="remove" /></td>
						<td><img src="images/icons/remove.svg" alt="remove" /></td>
						<td><img src="images/icons/remove.svg" alt="remove" /></td>
						<td><img src="images/icons/remove.svg" alt="remove" /></td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
					</tr>
					<tr class="">
						<td class="name">Редизайн и ребрендинг</td>
						<td><img src="images/icons/remove.svg" alt="remove" /></td>
						<td><img src="images/icons/remove.svg" alt="remove" /></td>
						<td><img src="images/icons/remove.svg" alt="remove" /></td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
						<td><img src="images/icons/check.svg" alt="check" /></td>
					</tr>
					<tr class="budget">
						<td class="name">
							Рекомендуемый бюджет в месяц<br />
							на продвижение
						</td>
						<td>от 10 000 ₽</td>
						<td>от 20 000 ₽</td>
						<td>от 30 000 ₽</td>
						<td>от 50 000 ₽</td>
						<td>Custom</td>
					</tr>
					<tr class="letters">
						<td class="name">
							SMS-рассылки для<br />
							фитнес-клуба по базе МТС
						</td>
						<td>от 70 000 ₽</td>
						<td>от 100 000 ₽</td>
						<td>от 200 000 ₽</td>
						<td>от 500 000 ₽</td>
						<td>Custom</td>
					</tr>
					<tr class="publicity">
						<td class="name">Медийная и видеореклама</td>
						<td>от 50 000 ₽</td>
						<td>от 70 000 ₽</td>
						<td>от 100 000 ₽</td>
						<td>от 150 000 ₽</td>
						<td>Custom</td>
					</tr>
					<tr class="empty">
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr class="order">
						<td class=""></td>
						<td>
							<div class="table__item">Заказать</div>
						</td>
						<td>
							<div class="table__item">Заказать</div>
						</td>
						<td>
							<div class="table__item">Заказать</div>
						</td>
						<td>
							<div class="table__item">Заказать</div>
						</td>
						<td>
							<div class="table__item">Заказать</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>
@endsection
@section('results')
<section class="results position-relative" id="results">
	<div class="container">
		<div class="results__title fs-36 fw-700 text-uppercase text-center">
			наши результаты
		</div>

		<div class="results__slider slider">
			<div class="slider__item">
				<div class="slider__box py-4 ps-3">
					<div class="row gy-3">
						<div class="col-12 col-sm-6">
							<div class="slider__flex align-items-center align-items-sm-start h-100 justify-content-between flex-column d-flex">
								<div class="slider__box-img">
									<img src="images/logo_oasis.png" alt="oasis" class="slider__img" />
								</div>
								<div class="slider__content d-flex flex-column align-items-center align-items-sm-start">
									<div class="slider__region fs-16 lh-normal ps-4">Регион</div>
									<div class="slider__city py-1 px-2 lh-120 fs-20 fw-500 text-center">
										Сургут
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="slider__flex align-items-center align-items-sm-start h-100 justify-content-between flex-column d-flex">
								<div class="slider__content d-flex flex-column align-items-center align-items-sm-start">
									<div class="slider__num fs-30 fw-900 lh-normal">34</div>
									<div class="slider__text fs-16 lh-normal">Число заявок</div>
								</div>
								<div class="slider__content d-flex flex-column align-items-center align-items-sm-start">
									<div class="slider__num fs-30 fw-900 lh-normal">
										1 200 RUB
									</div>
									<div class="slider__text fs-16 lh-normal">
										Стоимость заявки
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slider__item">
				<div class="slider__box py-4 ps-3">
					<div class="row gy-3">
						<div class="col-12 col-sm-6">
							<div class="slider__flex align-items-center align-items-sm-start h-100 justify-content-between flex-column d-flex">
								<div class="slider__box-img">
									<img src="images/logo_palestra.png" alt="oasis" class="slider__img" />
								</div>
								<div class="slider__content d-flex flex-column align-items-center align-items-sm-start">
									<div class="slider__region fs-16 lh-normal ps-4">Регион</div>
									<div class="slider__city py-1 px-2 lh-120 fs-20 fw-500 text-center">
										Архангельск
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="slider__flex align-items-center align-items-sm-start h-100 justify-content-between flex-column d-flex">
								<div class="slider__content d-flex flex-column align-items-center align-items-sm-start">
									<div class="slider__num fs-30 fw-900 lh-normal">24</div>
									<div class="slider__text fs-16 lh-normal">Число заявок</div>
								</div>
								<div class="slider__content d-flex flex-column align-items-center align-items-sm-start">
									<div class="slider__num fs-30 fw-900 lh-normal">
										2 500 RUB
									</div>
									<div class="slider__text fs-16 lh-normal">
										Стоимость заявки
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider__item">
				<div class="slider__box py-4 ps-3">
					<div class="row gy-3">
						<div class="col-12 col-sm-6">
							<div class="slider__flex align-items-center align-items-sm-start h-100 justify-content-between flex-column d-flex">
								<div class="slider__box-img">
									<img src="images/logo_zaruba.png" alt="oasis" class="slider__img" />
								</div>
								<div class="slider__content d-flex flex-column align-items-center align-items-sm-start">
									<div class="slider__region fs-16 lh-normal ps-4">Регион</div>
									<div class="slider__city py-1 px-2 lh-120 fs-20 fw-500 text-center">
										Подольск
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="slider__flex align-items-center align-items-sm-start h-100 justify-content-between flex-column d-flex">
								<div class="slider__content d-flex flex-column align-items-center align-items-sm-start">
									<div class="slider__num fs-30 fw-900 lh-normal">125</div>
									<div class="slider__text fs-16 lh-normal">Число заявок</div>
								</div>
								<div class="slider__content d-flex flex-column align-items-center align-items-sm-start">
									<div class="slider__num fs-30 fw-900 lh-normal">
										1 350 RUB
									</div>
									<div class="slider__text fs-16 lh-normal">
										Стоимость заявки
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider__item">
				<div class="slider__box py-4 ps-3">
					<div class="row gy-3">
						<div class="col-12 col-sm-6">
							<div class="slider__flex align-items-center align-items-sm-start h-100 justify-content-between flex-column d-flex">
								<div class="slider__box-img">
									<img src="images/logo_oasis.png" alt="oasis" class="slider__img" />
								</div>
								<div class="slider__content d-flex flex-column align-items-center align-items-sm-start">
									<div class="slider__region fs-16 lh-normal ps-4">Регион</div>
									<div class="slider__city py-1 px-2 lh-120 fs-20 fw-500 text-center">
										Екатеринбург
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="slider__flex align-items-center align-items-sm-start h-100 justify-content-between flex-column d-flex">
								<div class="slider__content d-flex flex-column align-items-center align-items-sm-start">
									<div class="slider__num fs-30 fw-900 lh-normal">19</div>
									<div class="slider__text fs-16 lh-normal">Число заявок</div>
								</div>
								<div class="slider__content d-flex flex-column align-items-center align-items-sm-start">
									<div class="slider__num fs-30 fw-900 lh-normal">
										2 100 RUB
									</div>
									<div class="slider__text fs-16 lh-normal">
										Стоимость заявки
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider__item">
				<div class="slider__box py-4 ps-3">
					<div class="row gy-3">
						<div class="col-12 col-sm-6">
							<div class="slider__flex align-items-center align-items-sm-start h-100 justify-content-between flex-column d-flex">
								<div class="slider__box-img">
									<img src="images/logo_palestra.png" alt="oasis" class="slider__img" />
								</div>

								<div class="slider__content d-flex flex-column align-items-center align-items-sm-start">
									<div class="slider__region fs-16 lh-normal ps-4">Регион</div>
									<div class="slider__city py-1 px-2 lh-120 fs-20 fw-500 text-center">
										Новосибирск
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="slider__flex align-items-center align-items-sm-start h-100 justify-content-between flex-column d-flex">
								<div class="slider__content d-flex flex-column align-items-center align-items-sm-start">
									<div class="slider__num fs-30 fw-900 lh-normal">12</div>
									<div class="slider__text fs-16 lh-normal">Число заявок</div>
								</div>
								<div class="slider__content d-flex flex-column align-items-center align-items-sm-start">
									<div class="slider__num fs-30 fw-900 lh-normal">
										2 400 RUB
									</div>
									<div class="slider__text fs-16 lh-normal">
										Стоимость заявки
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('map')
<section class="map" id="map">
	<picture>
		<source srcset="images/map.webp" type="image/webp"><img src="images/map.png" alt="map" class="w-100 h-auto" />
	</picture>
</section>
@endsection
@section('trust')
<section class="trust bg-dark pb-5" id="trust">
	<div class="container">
		<div class="trust__title fs-36 fw-700 lh-normal text-uppercase text-center mb-5">
			Нам доверяют продвижение
		</div>
		<div class="row gy-4">
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust1.webp" type="image/webp"><img src="images/trust1.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust2.webp" type="image/webp"><img src="images/trust2.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust3.webp" type="image/webp"><img src="images/trust3.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust4.webp" type="image/webp"><img src="images/trust4.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust5.webp" type="image/webp"><img src="images/trust5.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust6.webp" type="image/webp"><img src="images/trust6.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust7.webp" type="image/webp"><img src="images/trust7.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust8.webp" type="image/webp"><img src="images/trust8.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust9.webp" type="image/webp"><img src="images/trust9.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust10.webp" type="image/webp"><img src="images/trust10.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust11.webp" type="image/webp"><img src="images/trust11.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust12.webp" type="image/webp"><img src="images/trust12.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust13.webp" type="image/webp"><img src="images/trust13.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust14.webp" type="image/webp"><img src="images/trust14.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust15.webp" type="image/webp"><img src="images/trust15.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust16.webp" type="image/webp"><img src="images/trust16.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust17.webp" type="image/webp"><img src="images/trust17.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust18.webp" type="image/webp"><img src="images/trust18.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust19.webp" type="image/webp"><img src="images/trust19.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust20.webp" type="image/webp"><img src="images/trust20.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust21.webp" type="image/webp"><img src="images/trust21.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust22.webp" type="image/webp"><img src="images/trust22.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust23.webp" type="image/webp"><img src="images/trust23.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust24.webp" type="image/webp"><img src="images/trust24.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust25.webp" type="image/webp"><img src="images/trust25.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust26.webp" type="image/webp"><img src="images/trust26.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust27.webp" type="image/webp"><img src="images/trust27.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust28.webp" type="image/webp"><img src="images/trust28.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
			<div class="col-2">
				<div class="trust__box-img d-flex justify-content-center align-items-center h-100">
					<picture>
						<source srcset="images/trust29.webp" type="image/webp"><img src="images/trust29.png" alt="" class="trust__img w-100 h-auto" />
					</picture>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection