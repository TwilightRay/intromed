const webpack        = require('webpack'), // Подключаем webpack
      UglifyJSPlugin = require('uglifyjs-webpack-plugin'); // Подключаем пакет для минификации JS

const config = {
  entry: {
    main: "./src/assets/scripts/main.js"
  },
  output: {
    filename: "[name].min.js"
  },
  plugins: [
    new UglifyJSPlugin({
      sourceMap: true
    })
  ]
};

module.exports = config;
