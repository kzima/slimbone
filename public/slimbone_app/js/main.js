require.config({
  paths: {
      //'jquery': baseUrl+'/common/jquery/jquery',
      'underscore': '../../common/underscore/underscore-min', // AMD support
      'backbone': '../../common/backbone/backbone-min', // AMD support
      'bootstrap': '../../common/bootstrap/dist/js/bootstrap.min',
      "text": '../../common/requirejs-text/text',
      "order": '../../common/requirejs-order/order',
      'app': 'app',
      'router': 'router',
      'templates': 'templates', 
  },
  shim: {
      underscore: {
          exports: '_'
      },
      backbone: {
          deps: ["underscore"],
          exports: "Backbone"
      }
  }
});

require(['app'], function (App) {
  App.initialize();
});