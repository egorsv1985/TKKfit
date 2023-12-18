<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(

    'text' => array(
        'caption' => 'Услуга',
        'type' => 'text'
    )
);
$settings['templates'] = array(
    'outerTpl' => '<ul class="services__list d-flex flex-md-wrap flex-column gap-4 ps-0">[+wrapper+]</ul>',
    'rowTpl' => '<li class="services__item fs-22 lh-normal ps-5 position-relative wow animate__zoomInRight"  data-wow-delay="[+iteration+]*0.2s"><span>[+text+]</span></li>'
);
