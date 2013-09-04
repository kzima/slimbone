//Filename: products.js

define([
	// These are path alias that we configured in our main.js bootstrap
	'jquery',
	'underscore',
	'backbone',
	'require',
	'text!templates/product/list.html'

], function($, _, Backbone, require, productListTemplate){
	//underscore template
	//set namespeace
	var Product = {
	        Model : {},
	        Collection: {},    
	        View: {},
	        Router: {}
	};

	//model
	Product.Model.Item = Backbone.Model.extend({});

	//collection
	Product.Collection.List = Backbone.Collection.extend({
	    model: Product.Model.Item,
	    //comment this out if you have mongo db up and running
	    //url: 'api/products' 

	    //fixed JSON date from test route
		url: 'test/products'
	});

	//item view
	Product.View.Item = Backbone.View.extend({
	    tagName: "div",
	    className: "col-sm-6 col-md-4",
	    events: {
	        "click a": "clicked"
	    },
	    
	    clicked: function(e){
	        e.preventDefault();
	        var name = this.model.get("name");
	        alert(name);
	    },
	 
	    render: function(){
	        // Compile the template using underscore (pass html of the Jquery object and JSON data from model)
	        var template = _.template( productListTemplate, this.model.toJSON() );
	        // Load the compiled HTML into the Backbone "el"
	        this.$el.html( template );
	    }  
	});

	//list view of items
	Product.View.List = Backbone.View.extend({

	    el: "#products",
	    
	    initialize: function(){
	        _.bindAll(this, "renderItem");
	        this.collection.fetch({reset: true});
	        this.collection.on('reset', this.render, this);
	        //console.log(this.collection);
	    },
	    
	    renderItem: function(model){
	        var product = new Product.View.Item({model: model});
	        product.render();
	        this.$el.append(product.el); //render each li -> product.el and append it to the this view this.$el -> '#showIt'
	    },
	    
	    render: function(){
	        this.collection.each(this.renderItem); 
	    }
	});

	//instantiate collection
	var productList = new Product.Collection.List();
	//instantiate the view and pass the products collection
	var listView = new Product.View.List({collection: productList});
	//render the view
	listView.render();
});