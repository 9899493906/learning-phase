<?php

function school_preprocess_block(&$variables) {
    $variables['title_attributes_array']['class'][] = 'title';
    $variables['classes_array'][] = 'clearfix';
}
function school_preprocess_comment(&$variables) {

    $variables['submitted'] = $variables['created'] . '—' . $variables['author'];
}