<form method="post" class="popup__form form border-3 d-flex flex-column justify-content-center ">
    <input type="hidden" name="formid" value="callback">
    <div class="fs-24 text-center fw-700 mb-2">Оставить заявку</div>

    <p class="fs-16 text-info text-center lh-13 mb-4">Оставьте свои контакты и мы с вами свяжемся</p>
    <div class="form-group position-relative mb-3">
        <input type="text" class="form-control form__input bg-light rounded-2 text-info p-3 h-100" name="name" id="name" value="" placeholder="" required />
        <label for=" name" class="form-label form__label fs-16 text-info position-absolute top-50 mb-0">Имя*</label>
    </div>
    <div class="form-group position-relative mb-4">
        <input type="text" class="form-control form__input bg-light rounded-2 text-info p-3 h-100" name="tel" id="tel" placeholder="" value="" required />
        <label for="tel" class="form-label form__label fs-16 text-info position-absolute top-50 mb-0 ">Телефон*</label>
    </div>
    <button type="submit" class="form__btn btn fs-16 fw-600 px-3 py-3 btn-primary w-100 border-0 mb-4">
        Отправить
    </button>
    <p class="fs-14 lh-12 text-info text-center">
        Нажимая на кнопку, вы даете согласие на обработку персональных
        данных
    </p>

</form>