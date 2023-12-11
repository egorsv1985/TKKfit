<form class="form" method="post">
    <input type="hidden" name="formid" value="callback">
    <div class="form-group position-relative mb-3{!!+name.errorClass+!!}[+name.requiredClass+]">
        <label for="name" class="form-label form__label fs-16 position-absolute top-50 control-label d-none">* Имя</label>
        <input type="text" class="form-control form__input rounded-2 p-3 h-100" id="name" placeholder="Имя*" name="name" value="{{[+name.value+]}}" required="required"> [+name.error+]
    </div>
    <div class="form-group position-relative mb-3[+phone.errorClass+][+phone.requiredClass+]">
        <label for="phone" class="form-label form__label fs-16 position-absolute top-50 control-label d-none">* Телефон</label>
        <input type="tel" class="form-control form__input rounded-2 p-3 h-100" id="phone" placeholder="Телефон*" name="phone" value="[+phone.value+]" required="required"> [+phone.error+]
    </div>
    [+form.messages+]
    <button type="submit" class="form__btn w-100"><i class="glyphicon glyphicon-envelope"></i> Отправить </button>
</form>