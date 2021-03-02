<?php

Kirby::plugin('sylvainjule/code-editor', [
	'options' => array(
        'language'     => 'css',
		'size'         => 'small',
		'lineNumbers'  => true,
        'tabSize'      => 4,
        'insertSpaces' => true,
        'ignoreTabKey' => false,
	),
    'fields' => array(
        'code-editor' => require_once __DIR__ . '/lib/fields/code-editor.php',
    ),
]);
