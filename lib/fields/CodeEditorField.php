<?php

namespace SylvainJule\CodeEditor;

use Kirby\Form\Field\TextareaField;
use Kirby\Reflection\Attributes\Prop;

class CodeEditorField extends TextareaField {
    #[Prop]
    protected string $language = 'css';

    #[Prop]
    protected bool $lineNumbers = true;

    #[Prop]
    protected int $tabSize = 4;

    #[Prop]
    protected bool $insertSpaces = true;

    #[Prop]
    protected bool $ignoreTabKey = false;

    public function config(): array {
        return [
            'language'     => option('sylvainjule.code-editor.language', 'css'),
            'size'         => option('sylvainjule.code-editor.size', 'small'),
            'lineNumbers'  => option('sylvainjule.code-editor.lineNumbers', true),
            'tabSize'      => option('sylvainjule.code-editor.tabSize', 4),
            'insertSpaces' => option('sylvainjule.code-editor.insertSpaces', true),
            'ignoreTabKey' => option('sylvainjule.code-editor.ignoreTabKey', false),
        ];
    }
}