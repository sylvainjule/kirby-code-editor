import js from "@eslint/js";
import prettier from "eslint-config-prettier";
import vue from "eslint-plugin-vue";

export default [
	js.configs.recommended,
	...vue.configs["flat/vue3-recommended"],
	prettier,
	{
		rules: {
			"vue/attributes-order": "error",
			"vue/component-definition-name-casing": "off",
			"vue/html-closing-bracket-newline": [
				"error",
				{
					singleline: "never",
					multiline: "always"
				}
			],
			"vue/multi-word-component-names": "off",
			"vue/require-default-prop": "off",
			"vue/require-prop-types": "error"
		},
		languageOptions: {
		  ecmaVersion: 2022,
		  globals: { window: 'readonly' },
		}
	}
];
