<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
    'image' => array(
        'caption' => 'лого результата',
        'type' => 'image'
    ),
    'thumb' => array(
        'caption' => 'Thumbnail',
        'type' => 'thumb',
        'thumbof' => 'image'
    ),
    'title' => array(
        'caption' => 'Title',
        'type' => 'text'
    ),
    'region' => array(
        'caption' => 'Регион',
        'type' => 'text'
    ),
    'number' => array(
        'caption' => 'Число заявок',
        'type' => 'text'
    ),
    'price' => array(
        'caption' => 'Стоимость заявки',
        'type' => 'text'
    ),

);
$settings['templates'] = array(
    'outerTpl' => '<div class="results__slider slider">[+wrapper+]</div>',
    'rowTpl' =>
    '<div class="slider__item pt-4">
        <div class=" pe-4 py-2 ">
        <div class="slider__box px-3">
            <div class="row gy-3 pb-5">
                <div class="col-12 col-sm-6">
                    <div class="slider__flex align-items-center align-items-sm-start h-100 justify-content-between flex-column d-flex">
                        <div class="slider__box-img d-flex">
                            <img src="[+image+]" alt="[+title+]" class="slider__img" />
                        </div>
                        <div class="slider__content d-flex flex-column align-items-center align-items-sm-start">
                            <div class="slider__region fs-16 lh-normal ps-4">Регион</div>
                            <div class="slider__city py-1 px-2 lh-120 fs-20 fw-500 text-center">[+region+]</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="slider__flex align-items-center align-items-sm-start h-100 justify-content-between flex-column d-flex">
                        <div class="slider__content d-flex flex-column align-items-center align-items-sm-start">
                            <div class="slider__num fs-30 fw-900 lh-normal">[+number+]</div>
                            <div class="slider__text fs-16 lh-normal">Число заявок</div>
                        </div>
                        <div class="slider__content d-flex flex-column align-items-center align-items-sm-start">
                            <div class="slider__num fs-30 fw-900 lh-normal">[+price+] RUB</div>
                            <div class="slider__text fs-16 lh-normal">Стоимость заявки</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>'
);
