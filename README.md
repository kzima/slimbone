slimbone
========

A modern web app skeleton based on slim and backbone.

#Primary Concepts
1. Restful API's
2. Easy to install, maintain and extend
3. Follows best practices
4. Separation of frontend and logic
5. Does not force MVC pattern

##What's included?
1. slim framework - for routing and data management
2. mongoDB - for flexible schema and collection storage 
3. backbone - for javascript structure 
4. underscore - utility library to help with javascript coding
5. requirejs - for javascript dependency manager and module loading
6. composer - package manger for backend stuff
7. bower - package manager for frontend stuff
8. i18n - for localisation
9. twig - for better and more secure php templating
10. twitter bootstrap - for frontend development
11. font awesome - for vector icons
12. easy file structure - with separate template for admin and app

##Why slimbone?
Right now there is no ideal solution that is flexible enough to build complex web apps more easily.
I went through multiple php and javascript technologies and I would like to share my findings with you.
like meteor.js, Yii Framework, Sinatra, Fat Free Framework, 
Laravel and I realised tha I none of them are good enough.

I was using Yii framework for a while and I realized MVC structure is not for me.
Besides Yii (v1.1) is not restfull ready and in fairness I just used up to 20% of the framework's functionality.
I decided to switch to something lean.

I came across of Meteor js and I must admit that I really like it. The concept of having an app built in pure javascript is ver appealing. 
Unfortunately I don't think it's ready for production yet (v0.6.5) and I don't think I am ready to fully switch to javascript.
I decided to save meteor to my bookmarks for now and I kept looking.

Then I tried Laravel, and ... it just didn't work for me. Again I was foced with the folder structure and I didn't have time
to go through documentation and stack overflow on how to do things.

Then I checked Fat Free micro Framework and I found it very slim (only 55kb). The only problem was that I wanted to be able to manage
it in my composer dependency and FF3 wasn't available in packagist.org.

So I followed the micro framework breadcrumb and I found Slim. Bingo!
It allowed me to put all the technologies I wanted into one skeleton so I could reuse it later. Thanks to dependency managers
I could update to the latest versions of everything with just few commands. 
Simple file struture allows me to manage my code more easily than before.  
Separation of the logic and frontend makes my app very flexible and I can now built complex UI with no time. 
Perfect!

##To do 
##Coming soon...
