<?php

$options = require kirby()->root('kirby') . '/config/fields/textarea.php';

/* Merge new properties
--------------------------------*/

$options = A::merge($options, [
    'props' => [
        'size'         => function($size = null) {
    		return $size ?? option('sylvainjule.code-editor.size');
        },
        'language'     => function($language = null) {
            return $language ?? option('sylvainjule.code-editor.language');
        },
        'lineNumbers'  => function($lineNumbers = null) {
            return $lineNumbers ?? option('sylvainjule.code-editor.lineNumbers');
        },
        'tabSize'      => function($tabSize = null) {
            return $tabSize ?? option('sylvainjule.code-editor.tabSize');
        },
        'insertSpaces' => function($insertSpaces = null) {
            return $tabSize ?? option('sylvainjule.code-editor.insertSpaces');
        },
        'ignoreTabKey' => function($ignoreTabKey = null) {
            return $tabSize ?? option('sylvainjule.code-editor.ignoreTabKey');
        },
    ]
]);

// return the updated options
return $options;
