const path = require('path');
require('@babel/polyfill');

module.exports = {
    entry: {
        'index': path.join(__dirname, 'public/js/src', 'index.js'),
        'appointment': path.join(__dirname, 'public/js/src/pages/appointment', 'index.js'),
        'calendar_detail': path.join(__dirname, 'public/js/src/pages/calendar_detail', 'index.js'),
        'calendar_add': path.join(__dirname, 'public/js/src/pages/calendar_add', 'index.js'),
        'medical_file_list': path.join(__dirname, 'public/js/src/pages/medical_file_list', 'index.js'),
        'blog_list': path.join(__dirname, 'public/js/src/pages/blog_list', 'index.js'),
        'medical_file_detail': path.join(__dirname, 'public/js/src/pages/medical_file_detail', 'index.js'),
    },
    output: {
        path: path.resolve(__dirname, 'public/js/dist'),
        filename: '[name].js'
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
                            '@babel/preset-typescript',
                            ['@babel/preset-react', { runtime: 'automatic' }]
                        ],
                        plugins: ['@babel/plugin-transform-runtime'],
                    }
                }
            },
            {
                test: /\.(sass|scss|css)$/i,
                use: ['style-loader', 'css-loader', 'sass-loader', 'postcss-loader']
            },
            {
                test: /\.(png|jpe?g|gif)$/i,
                loader: 'file-loader',
                options: {
                    name: 'images/[name].[ext]'
                }
            },
            {
                test: /\.svg$/,
                use: ['@svgr/webpack']
            }
        ]
    },
    resolve: {
        extensions: ['*', '.js', '.ts', '.jsx', '.tsx']
    }
};
