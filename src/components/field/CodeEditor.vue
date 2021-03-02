<template>
    <k-field :input="uid" v-bind="$props" class="k-code-editor-field">
        <prism-editor class="k-code-editor-input" v-model="code" :highlight="highlighter" :line-numbers="lineNumbers" :tabSize="tabSize" :insertSpaces="insertSpaces" :ignoreTabKey="ignoreTabKey" :data-size="size" @input="onCodeInput" />
    </k-field>
</template>

<script>
import { PrismEditor }          from 'vue-prism-editor';
import                               'vue-prism-editor/dist/prismeditor.min.css';
import { highlight, languages } from 'prismjs/components/prism-core';
import                               'prismjs/components/prism-markup-templating';
import                               'prismjs/components/prism-clike';
import                               'prismjs/components/prism-css';
import                               'prismjs/components/prism-javascript';
import                               'prismjs/components/prism-json';
import                               'prismjs/components/prism-less';
import                               'prismjs/components/prism-php';
import                               'prismjs/components/prism-python';
import                               'prismjs/components/prism-ruby';
import                               'prismjs/components/prism-scss';
import                               'prismjs/components/prism-yaml';
import                               'prismjs/themes/prism-tomorrow.css';

export default {
    extends: 'k-textarea-field',
    props: {
        size: String,
        language: String,
        lineNumbers: Boolean,
        tabSize: Number,
        insertSpaces: Boolean,
        ignoreTabKey: Boolean,
    },
    components: { PrismEditor },
    data: function() {
        return {
            code: ''
        }
    },
    mounted() {
        this.code = this.value
    },
    methods: {
        highlighter(code) {
            return highlight(this.code, languages[this.language])
        },
        onCodeInput() {
            this.value = this.code;
            this.$emit('input', this.value);
        }
    },
};
</script>

<style lang="scss">
    @import '../../assets/css/styles.scss'
</style>
