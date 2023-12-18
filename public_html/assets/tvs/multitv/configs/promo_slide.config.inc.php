<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
    'image' => array(
        'caption' => 'картинка для галереи в промо блоке',
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

);
$settings['templates'] = array(
    'outerTpl' => '<div class="promo__slider slider">[+wrapper+]</div>',
    'rowTpl' => '
    <div class="slider__item position-relative">
        <div class="container">
            <div class="row gy-4">
                <div class="col-11 col-sm-9 col-lg-5">
                    <div class="slider__title fs-42 fw-700 text-uppercase lh-normal h1 position-relative wow animate__zoomInDown">[+title+]<span class="slider__counter fw-900 ">[+iteration+]</span></div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="slider__box-img position-relative">
                        
                            
                            <img src="[+image+]" alt="[+title+]" class="slider__img" />
                        
                    </div>
                </div>
            </div>
        </div>
    </div>'
);
