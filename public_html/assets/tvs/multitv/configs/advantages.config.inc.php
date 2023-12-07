<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
    'text' => array(
        'caption' => 'Преимущества',
        'type' => 'text'
    )
);
$settings['templates'] = array(
    'outerTpl' => '@CODE:<div class="left">[+wrapper+]</div>',
    'rowTpl' =>
    '<li class="advantages__item [+row.class+]">
        <div class="advantages__counter mb-4">[+iteration+]</div>
        <div class="advantages__item-text fs-20 lh-normal">
            [+text+]
        </div>
    </li>'
);
$settings['rowParams'] = array(
    'evenClass' => 'left',
    'firstClass' => `advantages__first`
);

$iteration = 1;
foreach ($settings['fields'] as &$field) {
    $field['iteration'] = str_pad($iteration, 2, '0', STR_PAD_LEFT);
    $field['row.class'] = ($iteration % 2 == 0) ? $settings['rowParams']['evenClass'] : '';
    $iteration++;
}
