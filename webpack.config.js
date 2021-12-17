// eslint-disable-next-line @typescript-eslint/no-var-requires,no-undef
const path = require('path');
// eslint-disable-next-line no-undef
require('@babel/polyfill');

// eslint-disable-next-line no-undef
module.exports = {
    entry: [
        '@babel/polyfill',
        // eslint-disable-next-line no-undef
        path.join(__dirname, 'public/js/src', 'index.js')
    ],
    output: {
        // eslint-disable-next-line no-undef
        path: path.resolve(__dirname, 'public/js/dist'),
        filename: 'index.js'
    },
    devtool: 'inline-source-map',
    module: {
        rules: [
            {
                test: /\.(js|ts|jsx|tsx)$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: [
                            '@babel/preset-env',
                            '@babel/preset-react',
                            '@babel/preset-typescript'
                        ]
                    }
                }
            }
        ]
    },
    resolve: {
        extensions: ['*', '.js', '.ts', '.jsx', '.tsx']
    }
};
