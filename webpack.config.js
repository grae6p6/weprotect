const ExtractTextPlugin = require('extract-text-webpack-plugin');
var debug = process.env.NODE_ENV !== "production";
var webpack = require('webpack');

module.exports = {
    context: __dirname,
    devtool: debug ? "inline-sourcemap" : null,
    entry: [

        // WEP theme JS
        './src/wp-content/themes/wep/js/theme.js',

        // WEP theme CSS
        './src/wp-content/themes/wep/sass/style.scss'
    ],
    output: {
        path: __dirname + "/src/wp-content/themes/wep/js",

        // Enqueued using the WEP theme functions.php
        filename: "scripts.min.js"
    },
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: ['css-loader', 'sass-loader']
                })
            }
        ]
    },
    plugins: [
        new webpack.ProvidePlugin({
            //$: 'jquery',
            //jQuery: 'jquery',
            //'window.jQuery': 'jquery',
            Tether: 'tether'
        }),

        new webpack.optimize.UglifyJsPlugin(),

        // Update the required style.css in WEP theme root
        new ExtractTextPlugin('../style.css')
    ],
};