module.exports = {
    'env': {
        'browser': true,
        'es2021': true
    },
    'extends': [
        'eslint:recommended',
        'plugin:vue/vue3-essential'
    ],
    'overrides': [
    ],
    'parserOptions': {
        'ecmaVersion': 'latest',
    },
    'plugins': [
        'vue'
    ],
    'rules': {
        'linebreak-style': 0,
        'vue/multi-word-component-names': 0,
        'indent': [
            'error',
            4
        ],
        'quotes': [
            'error',
            'single'
        ],
        'semi': [
            'error',
            'never'
        ]
    }
}
