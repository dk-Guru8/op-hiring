const path = require('path'); 

module.exports = {
  configureWebpack: {
    devServer: {
      // proxy: 'http://localhost/',
      headers: { 'Access-Control-Allow-Origin': '*' }
    }
  }
};