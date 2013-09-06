slimbone
========

To help developers build better apps with complex UI.

##Primary Concepts
1. Restful API's
2. Easy to install, maintain and extend
3. Follows best practices
4. Separation of application logic and design
5. Does not force MVC pattern

##What's included?
1. slim framework - for routing and data management
2. mongoDB - for flexible schema and collection storage 
3. backbone - for javascript structure 
4. underscore - utility library to help with javascript coding
5. requirejs - for javascript dependency management and module loading
6. composer - package manger for backend stuff
7. bower - package manager for frontend stuff
8. i18n - for localisation
9. twig - for better and more secure php templating
10. twitter bootstrap - for frontend development
11. font awesome - for vector icons
12. easy file structure - with separate template for admin and app
13. grunt - for improved workflow with js/css compilation

##Quickstart
1. Clone it
git clone https://github.com/kzima/slimbone.git slimbone

2. Install php dependencies (including slim and twig)
cd app
composer install

3. [optional] update bower dependencies
cd public
bower update

4. change the "slimbone" name to your project name
nano app/config/config.php

Also: If you are going to use grunt:
nano public/Gruntfile.js

change slimbone_app string to your own project name
change slimbone_admin string to your own project name
change folder names in /public accordingly

*Note: Please make sure your project folder names are different from your route name (add project name as a prefix)
eg.in your app/router.php 
$app->get('/admin/' ...
and in your public folder
projectname_admin
projectname_app

5. Enjoy!

##Why slimbone?
Right now there is no ideal solution that is flexible enough to build complex web apps more easily.
I went through multiple php and javascript technologies and I would like to share my findings with you.

I was using Yii framework for a while and I realized MVC structure is not for me.
I also found that Yii (v1.1) is not restful ready and in fairness I just used up to 20% of the framework's functionality in my development.
I decided to switch to something lean.

I came across of Meteor js and I must admit that I really liked it. The concept of having an app built in pure javascript is very appealing. 
Unfortunately I don't think it's ready for production yet (v0.6.5) and I don't think I am ready to fully switch to javascript.
I decided to save meteor to my bookmarks for now and I kept looking.

Then I tried Laravel, and ... it just didn't work for me. Again I was forced with the folder structure and I didn't have time
to go through documentation and stack overflow on how to do things.

Then I checked Fat Free micro Framework and I found it very slim (only 55kb) and flexible. The only problem was that I was unable to manage FF3 dependency in composer. 

So I followed the micro framework breadcrumb and I found Slim framework. Bingo! It's sleek, intuitive, easy to learn and very flexible.
I put all the bits and pieces together and built this skeleton to save my time with the next app. 

##What can you do with slimbone?
You can now focus on building apps with complex UI and save time thanks to separation of the design and application logic. 
For each new project you can now update all the dependencies in the frontend and backend much easier than before.
You can build restful API's very quickly thanks to dynamic collection route mapping and mongoDB.
It's so flexible that you can remove unwanted modules, replace and extend exitsing ones.
It comes with Mongo support and folder structure that I think is easy to manage but feel free tho change it to your needs.

##To do 
1.add authentication module

##Demo
[http://slimbone.mosquito.ie](http://slimbone.mosquito.ie)

##Screenshots
![slimbone skeleton](http://slimbone.mosquito.ie/uploads/screenshot1.jpg)
![slimbone grunt](http://slimbone.mosquito.ie/uploads/screenshot2.jpg)

##Resources
##Slim framework

Documentation
http://docs.slimframework.com/

proposed folder structure for your app
http://slimframework.com/news/how-to-organize-a-large-slim-framework-application

##Mongo DB install
http://docs.mongodb.org/manual/installation/

###Backbone

Backbone book online:
http://addyosmani.github.io/backbone-fundamentals/

what does backbone extend do?
http://stackoverflow.com/questions/13105574/extend-using-underscore-vs-backbone

best practices
http://ricostacruz.com/backbone-patterns/

model, view, collection explained
http://backbonetutorials.com/
http://alexbachuk.com/backbone-js-explained/

simple hello world tutorial
http://stephanielkim.tumblr.com/post/39175133744/a-humble-hello-world-backbone-js-example

todo app tutorial
http://arturadib.com/hello-backbonejs/

another todo tutorial (backbone docs)

step by step tutorial
http://adrianmejia.com/blog/2012/09/11/backbone-dot-js-for-absolute-beginners-getting-started/

backbone views explained
http://kilon.org/blog/2012/11/3-tips-for-writing-better-backbone-views/
