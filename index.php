<?php

use SylvainJule\CodeEditor\CodeEditorField;

load([
    CodeEditorField::class => 'lib/fields/CodeEditorField.php',
], __DIR__);

Kirby::plugin('sylvainjule/code-editor', [
    'options' => [
        'language'     => 'css',
        'size'         => 'small',
        'lineNumbers'  => true,
        'tabSize'      => 4,
        'insertSpaces' => true,
        'ignoreTabKey' => false,
    ],
    'fields' => [
        'code-editor' => CodeEditorField::class,
    ],
]);