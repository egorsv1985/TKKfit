<footer class="footer bg-dark py-5">
	<div class="container">
		<div class="row gy-3 footer__content">
			<div class="col-12 col-sm-6 col-lg-4">
				<h3 class="footer__title fs-28 fw-500 lh-114">
					Эксперты в области продвижения Фитнеса
				</h3>
			</div>
			<div class="col-12 col-sm-6 col-lg-3 offset-lg-1">
				<div class="d-flex flex-column">
					<a href="mailto:manager@target-kc.ru " class="d-flex gap-2 mb-4 align-items-center fs-20 lh-normal footer__link">
						manager@target-kc.ru
					</a>
					<ul class="footer__social social d-flex gap-2 ps-0 mb-0">
						<li>
							<a href="#" class="social__link social__link--fb" title="facebook"></a>
						</li>
						<li>
							<a href="#" class="social__link social__link--vk" title="В контакте"></a>
						</li>
						<li>
							<a href="#" class="social__link social__link--ok" title="Одноклассники"></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-3 offset-lg-1">
				<div class="d-flex flex-column gap-2">
					<a href="tel:84994040099" class="footer__link fs-20 fw-700 lh-normal">
						+7 (499) 404 00 99
					</a>
					<!-- Button trigger modal -->
					<button type="button" data-bs-toggle="modal" data-bs-target="#callback" class="footer__link fs-16 lh-normal">
						<span>Заказать обратный звонок</span>
					</button>
					<!-- <a href="#callback" role="button" data-bs-toggle="modal" data-bs-target="callback" class="footer__link fs-16 lh-normal">
							Заказать обратный звонок
						</a> -->
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-4">

				<small class="fs-14 lh-normal">
					©2023. ООО<a href="#" class="footer__link"> «Таргет Консалт Компани»</a>
				</small>

			</div>
		</div>
	</div>
</footer>
<!-- Modal -->
<div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content bg-dark">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

				</button>
			</div>
			<div class="modal-body">
				{!! $modx->runSnippet('formLister', [
				'formid'=>'callback',
				'rules'=>'
				{
				"name":{
				"required":"Обязательно введите имя",
				},

				"phone":{
				"required":"Обязательно введите номер телефона",
				"phone":"Введите номер правильно"
				}

				}',
				'formTpl'=>'@CODE:
				<form class="form" method="post">
					<input type="hidden" name="formid" value="callback">
					<div class="form-group position-relative mb-3[+name.errorClass+][+name.requiredClass+]">
						<label for="name" class="form-label form__label fs-16 position-absolute top-50 control-label d-none">* Имя</label>
						<input type="text" class="form-control form__input rounded-2 p-3 h-100" id="name" placeholder="Имя*" name="name" value="[+name.value+]">
						<span class="text-white">[+name.error+]</span>
					</div>
					<div class="form-group position-relative mb-3[+phone.errorClass+][+phone.requiredClass+]">
						<label for="phone" class="form-label form__label fs-16 position-absolute top-50 control-label d-none">* Телефон</label>
						<input type="tel" class="form-control form__input rounded-2 p-3 h-100" id="phone" placeholder="Телефон*" name="phone" value="[+phone.value+]"> [+phone.error+]
					</div>
					<button type="submit" class="form__btn w-100"><i class="glyphicon glyphicon-envelope"></i> Отправить </button>
				</form>',
				'to'=>'egorvs2009@gmail.com',
				'ccSender'=>'1',
				'ccSenderField'=>'email',
				'ccSenderTpl'=>'@CODE:Спасибо за обращение, [+name.value+]',
				'reportTpl'=>'@CODE:
				<p>Имя: [+name.value+]</p>
				<p>Телефон: [+phone.value+]</p>
				',
				'errorClass'=>' has-error',
				'requiredClass'=>' has-warning',
				'subject'=>'Новое сообщение',
				'messagesOuterTpl'=>'@CODE:<div class="alert alert-danger" role="alert">[+messages+]</div>',
				'errorTpl'=>'@CODE:<span class="help-block">[+message+]</span>',
				])
				!!}
			</div>
		</div>
	</div>
</div>