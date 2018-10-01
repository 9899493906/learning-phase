<?php

function school_preprocess_block(&$variables) {
    $variables['title_attributes_array']['class'][] = 'title';
    $variables['classes_array'][] = 'clearfix';
}
