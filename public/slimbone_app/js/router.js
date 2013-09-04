// Filename: router.js
define([
  'jquery',
  'underscore',
  'backbone',
], function($, _, Backbone){
  var AppRouter = Backbone.Router.extend({
    routes: {
      // Define some URL routes
      'test': 'showTest',
      
      // Default
      '*actions': 'defaultAction'
    },
    showTest: function(){
      alert('test');

    },

    defaultAction: function(actions){
      // We have no matching route, lets display the home page 
      // mainHomeView.render(); 
    }
  });

  var initialize = function(){
    var app_router = new AppRouter;
    Backbone.history.start();
  };
  return { 
    initialize: initialize
  };
});
