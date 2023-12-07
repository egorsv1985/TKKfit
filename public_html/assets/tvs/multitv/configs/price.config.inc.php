<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
    'title' => array(
        'caption' => 'Title',
        'type' => 'richtext',
        'editor' => 'TinyMCE4'
    ),

);
$settings['templates'] = array(
    'outerTpl' => '<div class="prices__table table-responsive">[+wrapper+]</div>',
    'rowTpl' => '[+title+]'
);
