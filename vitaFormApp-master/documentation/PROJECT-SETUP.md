Front-End
=========

## Date of Last Revision: Decemeber 1, 2014
------------------------------

## Version 1.0.0
----------------------

## TABLE OF CONTENTS
====================
1. Important things to note before getting started
2. System Requirements
3. Update Ruby
4. Install the required dependencies and plugins using your command-line program
      * Grunt plugins
5. Create a Github Repository for your project
6 Downloading the project files
7. Folders you will be working in most of the time
8. Starting the project (i.e. opening up the index.html page and begin coding :)
9. Scaffolding
      * Development
      * Production

## Important things to note before getting started
-----------------------------------------------------------------

  * Most of the instructions below will require the use of the command-line.  
    * If you have a Mac, you already have a great command-line program installed called Terminal:

      * [Terminal](http://en.wikipedia.org/wiki/Terminal_(OS_X))
    * If you are using a Windows PC, I recommend that you don't use the command-line program installed with Windows.  Instead, here are some suggested apps to download and use for your command-line work:

    [Lifehacker](http://sourceforge.net/projects/console/files/)

    [Cygwin](https://www.cygwin.com/)

    [PowerCmd](http://www.powercmd.com/)

    [ConEmu](http://www.fosshub.com/ConEmu.html)

  * **NOTE:** Some of the Grunt plugins will only work on files that you add to the Gruntfile.js file.  
    * I have only added the `app/index.html` to the Grunt dependencies in the Gruntfile.js file.
    * This means if you want Grunt functions to work for any additional files you create, you will have to add those in the section for that specific Grunt plugin in the Gruntfile.js file (i.e. jshint, watch, uncss, ugilify, etc)
    * For example, if you create a new page called `about.html` and you want to use `uncss` for this page (i.e. remove/add styles to style.min.css), you will have to find the `uncss` section of Gruntfile.js and add `app/about.html` right after `app/index.html` with a comma separating them.  You **MUST** add a comma when adding help files in the various Grunt plugin sections for the Gruntfile.js file.
    * If things are not working as you think they should, double check how your Grunt dependencies in the Gruntfile.js file are setup.  Every section of the Gruntfile.js file has a link for the specific Grunt plugin that is used in the project.  Please see the documentation on the links for the specific plugins that are giving you problems.

# System Requirements
--------------------------------
  * You will need **ALL** of these programs/dependencies install on your computer

1. [Node.js](http://nodejs.org/download)

2. [Sass](http://sass-lang.com/tutorial.html)  See the css.md file in the documentation folder for information about how the Sass/CSS files are setup.

3. [Git](http://git-scm.com) on your machine. See the git-commands.txt file in the helpfiles folder for information about common git commands.

4. If you're a Windows user you'll also need to install [Ruby](http://rubyinstaller.org/downloads).

5. [Grunt](http://gruntjs.com/getting-started) by issuing the following command in your prefered command-line program (such as Terminal or Cygwin):
  * sudo npm install -g grunt-cli 

For Windows tips with Grunt checkout Grunt's [FAQs](http://gruntjs.com/frequently-asked-questions).

## Update Ruby
---------------------
Make sure your version of Ruby is updated and make sure your Gems are up to date as well.  Issue this command to update your Ruby Gems:
  * sudo gem update --system

## Install the  required dependencies and plugins using your command-line program
----------------------------------------------------------------------------------------------------------------

**NOTE**: Some of these commands might take a while to install. Be patient and let the entire process finish completely before clicking on anything.  You will know it is done when your command prompt looks like it did before you pasted the code in

### Grunt plugins
------------------------
  * sudo npm install grunt-package
  * sudo npm install matchdep -g --save-dev
  * sudo npm install connect-livereload -g --save-dev
  * sudo npm install grunt-bump -g --save-dev
  * sudo npm install grunt-concurrent -g --save-dev
  * sudo npm install grunt-contrib-jshint -g --save-dev
  * sudo npm install grunt-contrib-sass -g --save-dev
  * sudo npm install grunt-contrib-uglify -g --save-dev
  * sudo npm install grunt-contrib-watch -g --save-dev
  * sudo npm install grunt-dev-update -g --save-dev
  * sudo npm install grunt-notify -g --save-dev
  * sudo npm install grunt-open -g --save-dev
  * sudo npm install grunt-uncss -g --save-dev
  * sudo npm install load-grunt-tasks -g --save-dev
  * sudo npm install time-grunt -g --save-dev
  * sudo npm install -g --save-dev grunt-svgmin

## Folders you will be working in most of the time
-----------------------------------------------------------------

**NOTE:** See the "Scaffolding" section below to see how the project files are setup.

* The files in the `app` folder are for development purposes **ONLY** 
  * You will move the necessary project files to the `app-production` folder and upload this folder to the live server.
  * There is a **REALLY** useful checklist to go through before uploading your project to the live server in the "checklists" folder called TODO-BEFORE-GOING-LIVE.md that I **HIGHLY** recommend you review before delivering a completed product to the client.

  * The main folders you will be working with are:
      * 1. The `app` folder.  All of your HTML and PHP files will go in the root of the `app` folder.
      * 2. The `src` folder.  Inside the `src` folder is the `scss` folder.  All of the Sass that you write will go in the .scss files located inside this `scss` folder. See the css.md file in the `documentation` folder for help with the Sass workflow.
      * 3. If you are working on a PHP project based on a MVC framework, inside the `app` folder are the `models`, `views` and `controllers` folders.  
        * Inside the `views` folder is the `includes` folder which is where you should put any PHP include files.  Inside this folder are some common includes like `database.php`, `head.php`, `footer.php` etc. 

## Starting the project (i.e. opening up the index.html page and begin coding :)
--------------------------------------------------------------------------------------------------------
When all of the steps above have been completed, follow the steps below to start the project:
  * In the root of your project folder, double-click on this file:  `grunt-dev.command` 
  * If you are using a Mac system, when you click on the file you say get a message like: " grunt-dev.command" can't be opened because it is from an unidentified developer."  
  * If this happens, just right-click on the `grunt-dev.command` file and choose `Open` from the dropdown menu that appears.
  * Once you click on the `grunt-dev.command` file, this will automatically open a new command-line window (i.e. Terminal window or Cygwin window, etc).
  * You might be asked to enter your Password (this password is the same as your system login password)
  * Once you have entered your password, Grunt will install all of the dependencies needed for the project.  This might take a minute or two, just be patient and don't close out this command-line window.
  * If everything goes smoothly, a new browser window will open (Grunt will open this new window in whatever you have set as your default browser).  This new browser window will open the ````index.html```` page for the project.  This page is pretty bare-bones you should only see the text ````Your page content will start here.```` centered at the top of the page.
  * You are now ready to start coding.
  * When the command-line program is running you will see the following processes running:
      * `Running "sass:dev" (sass) task`
      * `Running "jshint:files" (jshint) task`
      * `Running "concat:dev" (concat) task`
      * `Running "connect:livereload" (connect) task`
      * `Running "uncss:dist" (uncss) task`
      * `Running "open:server" (open) task`
      * `Running "watch" task`
  * While you are working on your project files, **DO NOT** close the command-line window that was opened in the step above.  If you do, you will have to start the process over (i.e go back to the double-click on `grunt-dev.command` file step above)
  * If you are working on a HTML file, when you save changes to CSS or HTML, the page will be refreshed automatically for you.  This will **NOT** work for PHP files.  If you want PHP files to auto-refresh, you will have to use a program like LiveReload which is available in the Mac App Store (it costs $9.99 but I think it is well worth the purchase).
  * When you are ready to quit working on the project, go to the command-line window that was opened above and issue a `Control+c` command.  This will close the project out, auto-refresh will not work now.
  * When you `Control+c` out of the project from the command-line, you will see the following:
      * Execution Time (`today's date` `the current time` UTC)
      * watch `the time spent working on the project will be displayed` there will be a blue bar (like what you would be on a bar graph)
      * Total `total time spent working in minutes-seconds`
  * To restart the project and begin working again, just repeat the steps above starting with the double-click the `grunt-dev.command` file

## Scaffolding
-------------------

### Development
*NOTE: Ignore the `test` and `tmp` folders*
````
├── app
│   ├── assets
│       ├── components
│       ├── css
│           ├── style.min.css
│       ├── fonts
│       ├── img
│           ├── favicons
│           ├── sprites
│       ├── js
│           ├── scripts.min.js
│   ├── controllers
│   ├── models
│   ├── views
│       ├── includes
│           ├── database.php
│           ├── head.php
│           ├── init.php
│           ├── flush.php
│           ├── footer.php
│   ├── apple-touch-icon-precomposed.png
│   ├── config.rb
│   ├── crossdomain.xml
│   ├── htaccess-guide.txt
│   ├── humans.txt
│   ├── robots.txt
│   ├── sitemap.xml
│   ├── favicon.ico
│   ├── 404.css
│   ├── 404.shtml
│   ├── index.html
│   ├── template.html
│   ├── index.php
│   └── template.php
├── checklists
├── helpfiles
├── test
├── tmp
├── src
│   ├── components
│       ├── bower_components
│   ├── js
│       ├── scripts.js
│   ├── scss
│       ├── toolbox
│           ├── documentation.scss
│           ├── dustin.scss
│           ├── jason.scss
│           ├── jim.scss
│           ├── mixins.scss
│           ├── nick.scss
│           ├── reset.scss
│           ├── variables.scss
│       └── style.scss
├── grunt-build.command
├── grunt-build.bat
├── grunt-dev.command
├── grunt-dev.bat
├── package.json
├── README.md
├── .editorconfig
├── .gitignore
├── .htaccess
├── .jshintrc
└── .travis.yml
````

### Production
````
├── app-production
│   ├── controllers
│   ├── css
│       ├── style.min.css
│   ├── img
│       ├── favicons
│       ├── sprites
│   ├── js
│       ├── jquery.js
│       ├── scripts.min.js
│   ├── models
│   ├── views
│       ├── includes
│           ├── head.php
│           ├── init.php
│           ├── flush.php
│           ├── footer.php
│   ├── apple-touch-icon-precomposed.png
│   ├── config.rb
│   ├── crossdomain.xml
│   ├── htaccess-guide.txt
│   ├── humans.txt
│   ├── robots.txt
│   ├── sitemap.xml
│   ├── favicon.ico
│   ├── 404.html
│   └── index.php
````

