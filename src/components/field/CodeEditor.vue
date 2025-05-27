<template>
  <k-field :input="uid" v-bind="$props" class="k-code-editor-field">
    <prism-editor
      v-model="code"
      class="k-code-editor-input"
      :highlight="highlighter"
      :line-numbers="lineNumbers"
      :tab-size="tabSize"
      :insert-spaces="insertSpaces"
      :ignore-tab-key="ignoreTabKey"
      :data-size="size"
      @input="onCodeInput"
    />
  </k-field>
</template>

<script>
import { PrismEditor } from "vue-prism-editor";
import "vue-prism-editor/dist/prismeditor.min.css";
import { highlight, languages } from "prismjs/components/prism-core";
import "prismjs/components/prism-markup-templating";
import "prismjs/components/prism-clike";
import "prismjs/components/prism-css";
import "prismjs/components/prism-javascript";
import "prismjs/components/prism-json";
import "prismjs/components/prism-less";
import "prismjs/components/prism-php";
import "prismjs/components/prism-python";
import "prismjs/components/prism-ruby";
import "prismjs/components/prism-scss";
import "prismjs/components/prism-yaml";
import "prismjs/themes/prism-tomorrow.css";

export default {
  components: { PrismEditor },

  extends: "k-textarea-field",

  props: {
    size: String,
    language: String,
    lineNumbers: Boolean,
    tabSize: Number,
    insertSpaces: Boolean,
    ignoreTabKey: Boolean,
  },

  data() {
    return {
      code: "",
    };
  },

  mounted() {
    this.code = this.value;
  },

  methods: {
    highlighter() {
      return highlight(this.code, languages[this.language]);
    },

    onCodeInput() {
      this.$emit("input", this.code);
    },
  },
};
</script>

<style>
.k-code-editor-input {
    background: light-dark(var(--color-gray-950), var(--input-color-back));
    color: var(--color-gray-200);
    font-family: var(--font-mono);
    font-size: var(--text-sm);
    line-height: 1.5;
    padding: var(--spacing-2);
    border-radius: var(--rounded);
}

.k-code-editor-input[data-size="small"] {
    min-height: 7.5rem;
}
.k-code-editor-input[data-size="medium"] {
    min-height: 15rem;
}
.k-code-editor-input[data-size="large"] {
    min-height: 30rem;
}
.k-code-editor-input[data-size="huge"] {
    min-height: 45rem;
}

.prism-editor__textarea:focus {
    outline: none;
}
</style>
