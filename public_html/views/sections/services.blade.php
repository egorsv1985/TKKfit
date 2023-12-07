<section class="services bg-dark py-5 position-relative" id="services">
	<div class="container">
		<div class="row pb-5">
			<div class="col-12 col-lg-4">
				<div class="services__box-img position-relative">
					<picture>
						<source srcset="template/images/forma.webp" type="image/webp"><img src="template/images/forma.png" alt="forma" class="services__img" />
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

				<?
				echo $modx->runSnippet('multiTV', array('tvName' => 'services'));
				?>
				<!-- <ul class="services__list d-flex flex-md-wrap flex-column gap-4">

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
				</ul> -->
			</div>
		</div>
	</div>
</section>