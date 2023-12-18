<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
    'image' => array(
        'caption' => 'лого компаний',
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
    'outerTpl' => '<div class="row gy-4">[+wrapper+]</div>',
    'rowTpl' =>
    '
    <div class="col-6 col-sm-4 col-lg-2">
        <div class="trust__box-img d-flex justify-content-center align-items-center h-100 wow animate__heartBeat">
            <picture>
                <source srcset="[+image+]" type="image/webp">
                <img src="[+image+]" alt="[+title+]" class="trust__img w-100 h-auto" />
            </picture>        
        </div>
    </div>
    '
);
