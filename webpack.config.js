const path = require('path');

module.exports = {
    entry: path.join(__dirname, "public/js/src", "index.js"),
    output: {
        path:path.resolve(__dirname, "public/js/dist"),
        filename: "index.js"
    },
    devtool: "inline-source-map",
    module: {
        rules: [
            {
                test: /\.(js|jsx)$/,
                exclude: /node_modules/,
                use: {
                    loader: "babel-loader",
                    options: {
                        presets: ['@babel/preset-env', '@babel/preset-react']
                    }
                }
            },
        ]
    },
    resolve: {
        extensions: ['*', '.js', '.jsx'],
    },
    mode: 'development'
}