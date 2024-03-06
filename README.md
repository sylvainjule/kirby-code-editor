# Kirby – Code editor

Code editor field for Kirby 3 and 4.

![screenshot-code-editor](https://user-images.githubusercontent.com/14079751/109679014-7b043800-7b7b-11eb-8c4e-2ae25da8288d.png)

<br/>

## Overview

> This plugin is completely free and published under the MIT license. However, if you are using it in a commercial project and want to help me keep up with maintenance, please consider [making a donation of your choice](https://paypal.me/sylvainjl) or purchasing your license(s) through [my affiliate link](https://a.paddle.com/v2/click/1129/36369?link=1170).

- [1. Installation](#1-installation)
- [2. Setup](#2-setup)
- [3. Options](#3-options)
- [4. Available languages](#4-available-languages)
- [5. License](#5-license)
- [6. Credits](#6-credits)

<br/>

## 1. Installation

Download and copy this repository to ```/site/plugins/code-editor```

Alternatively, you can install it with composer: ```composer require sylvainjule/code-editor```

<br/>

## 2. Setup

This field adds a code editor in the panel:

```yaml
editor:
  label: My code editor
  type: code-editor
```

<br/>

## 3. Options

| Name                 | Type               | Default | Options | Description                                                                                                                                                  |
| -------------------- | ------------------ | ------- | ------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| language          | `String`          | `'css'` | -       | Syntax mode of the editor. See below for available languages                                                                                                                           |
| size          | `String`          | `'small'` | -       | Min height of the editor. `small / medium / large / huge` |
| lineNumbers          | `Boolean`          | `true` | -       | Whether to show line numbers.                                                                                                                                |
| tabSize              | `number`           | `4`       | -       | The number of characters to insert when pressing tab key.                                                                            |
| insertSpaces              | `boolean`           | `true`       | -       | Whether to use spaces for indentation. If you set it to `false`, you might also want to set `tabSize` to `1` |
| ignoreTabKey              | `boolean`           | `false`       | -       | Whether the editor should ignore tab key presses so that keyboard users can tab past the editor. Users can toggle this behaviour using `Ctrl+Shift+M` (Mac) / `Ctrl+M` manually when this is `false`.  |


Note that you can make the default height any height you want with some [custom panel CSS](https://getkirby.com/docs/reference/system/options/panel#custom-panel-css). First, set the `size` option to any string you'd like:

```yaml
size: custom-size
```

Then in your `panel.css`:

```css
.k-code-editor-input[data-size="custom-size"] {
    min-height: 15rem;
}
```

### 3.1. Default options

You can globally override the default options, instead of setting them on a per-field basis. In your `site/config/config.php`:

```php
return [
  'sylvainjule.code-editor.language'     => 'css',
  'sylvainjule.code-editor.size'         => 'small',
  'sylvainjule.code-editor.lineNumbers'  => true,
  'sylvainjule.code-editor.tabSize'      => 4,
  'sylvainjule.code-editor.insertSpaces' => true,
  'sylvainjule.code-editor.ignoreTabKey' => false,
];
```

<br/>

## 4. Available languages

Currently supported languages are:

* `css`
* `javascript`
* `json`
* `less`
* `php`
* `python`
* `ruby`
* `scss`
* `yaml`

<br/>

## 5. License

MIT

<br/>

## 6. Credits

**Code editor:**

- [Vue Prism Editor](https://github.com/koca/vue-prism-editor)
