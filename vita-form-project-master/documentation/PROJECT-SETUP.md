# System Requirements
--------------------------------
  * You will need **ALL** of these programs/dependencies install on your computer

1. [Node.js](http://nodejs.org/download)

2. [Sass](http://sass-lang.com/tutorial.html)  See the css.md file in the documentation folder for information about how the Sass/CSS files are setup.

3. [Git](http://git-scm.com) on your machine. See the git-commands.txt file in the helpfiles folder for information about common git commands.

4.[Bower](bower.io) on your machine

5. If you're a Windows user you'll also need to install [Ruby](http://rubyinstaller.org/downloads).

6. [Grunt](http://gruntjs.com/getting-started) by issuing the following command in your prefered command-line program (such as Terminal or Cygwin):
  * sudo npm install -g grunt-cli 

For Windows tips with Grunt checkout Grunt's [FAQs](http://gruntjs.com/frequently-asked-questions).

## Install the following Grunt Dependencies/Plugins
--------------------------------------------------------------------------

**NOTE**: Some of these commands might take a while to install. Be patient and let the entire process finish completely before clicking on anything.  You will know it is done when your command prompt looks like it did before you pasted the code in

### Issue these commands one at a time in the command-line
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
  * sudo npm install grunt-autoprefixer -g --save-dev
  * sudo npm install -g --save-dev grunt-svgmin
  * sudo npm install grunt-ng-annotate -g --save-dev
  * sudo npm install -g --save-dev grunt-wiredep
  * sudo npm install grunt-angular-templates -g --save-dev
  * sudo npm install grunt-sync -g --save-dev
  * sudo npm install grunt-requirejs -g --save-dev
  * sudo npm install grunt-webfont -g --save-dev

## Initialize Bower in the command-line
Now copy/paste this command into your command-line program:
  * bower init

When you issue the `bower init` command, the command-line program will ask you a couple questions.  Either answer `y` or press `enter/return` depending on what the command-line program is asking you to do.

## Create a Github Repository for your new project
1. As mentioned at the top of this document, please make sure you have a personal Github account before continuing with the instructions below.
2. Login to your personal Github account and create a new repository.
You do this by clicking on the + dropdown menu that is to the right of your Github username at the top of the screen when you are logged in to Github.
3. Click on the dropdown menu and select "New Repository"
4. You will be redirected to a page that looks like this:
  * Owner                               Repository Name
  * your-github-username      blank input box for entering the name of the project (i.e. your-project-name)
  * Description (optional)
  * blank input box for adding a description for the project
  * Public (unless you have a paid Github account, you have to select public which is the default anyway)
  * Private
  * Check the "Initalize this repository with a README" checkbox
  * Click the green "Create repository" button
5. This will redirect you to the main page of your Git repository.  You will see the Description you entered for this project, and the README.md file will be displayed (for example, if you entered your-project-name as the name of the project, you will see your-project-name in the middle of the page in bold text)
6. This URL will look something like this:

https://github.com/your-github-username/your-project-name
7. Download the new-project-framework files using the link below:

[Click Here to Download new-project-framework-folder](https://github.com/jason-hoppedupdesigns/new-project-framework)
8. Rename the new-project-framework-master folder to the name of the current project (i.e. if the project is for ABC Widget, name the folder abc-widget-project or something like that)
9. Now you need to create a link to this project Git repository in one of these ways:
  * Open a command-line window (i.e. Terminal or Cygwin window) and go into the root directory for the project
  `cd path-to-project-root-directory`
  * You could also use a Git program such as Github for Mac/Windows or SourceTree if you know how. Download these programs by using the links below:

[Github for Mac](https://mac.github.com/)

[Github for Windows](https://windows.github.com/)

[SourceTree](http://www.sourcetreeapp.com/)

10. For the sake of the instructions presented here, I am going to assume you will be using the command-line.
11. Once you are in the root of the new project folder in your command-line program (i.e. the command-line is pointing to path/to/your/new-project/root-directory) issue the following commands one at a time:
  * git init
  * git add --all
  * git commit -m "first commit"
12. You will now need to link this project folder to the Github repository that you create in step #4 above.
13. You will go this by issusing this command in the command-line (remember stay in the root directory for your project when entering all of the commands that I mention in these instructions):
  * git remote add origin https://github.com/your-github-username/your-project-name
14. Next, you will need to "pull" files from the Githb repository by issusing this command:
  * git pull https://github.com/your-github-username/your-project-name
15. Now you are going to "push" your project files to the Github repository by issusing this command:
  * git push -u origin master
16. That's it!  You Git repository is ready to go and you can now "push" any changes you make by repeating the steps listed in #11 and #15.  In other words, issue these commands anytime you want to save your changes to the Git repo:
* git init
* git add --all
* git commit -m "brief description of changes made"
* git push -u origin master
**NOTE:** In the step git commit -m "brief description of changes made", replace the text "brief description of changes made" with an actual brief description of the changes you made/saved in the project folder.  This is **ALWAYS** a good idea to do because if you ever need to "rollback" to an earlier version of the project files, this brief description will help you find the version of the project files you need.
17. To "checkout" a previous version of your Git repository, go to the URL of the project that you created (i.e. https://github.com/your-github-username/your-project-name)
18. You will see a tab on the left of the main project screen that says "3 Commits" (the number 3 will be different depending on how many times you have "pushed" to the Git repository)
19. If you click on this "3 Commits" tab, you will be taken to a page that shows you all the "commits" you have made for this project.
20. The first "commit" listed will be named:
  * initial commit"
and every other "commit" you have made will be listed below this "initial commit"
21. For example, let's say that the second "commit" you made had a description that says 
  * "updated the index.html file", then below  "initial commit" you will see "updated the index.html file"
22. If you want to see the status of the project at the time that you made this "commit", you can click on the name of the "commit" you want to see (for example, you could click on the "commit" named updated the index.html file and you will go to a page that will show you everything contained in the project at the time you made this "commit").
23. This is useful because let's say you made a change to the index.html file in the previous "commit", you then messed up the index.html file but you don't have a saved version of the index.html file that you saved in the "updated the index.html file" commit.  From the main page of the "commit" you clicked on, you can now click on the index.html file and copy the code and paste this code into the index.html file that you are currently working on so that the index.html file now works!
24. This is a brief introduction of the world of Git.  If you need more help, see the `git-commands.txt' file located in the "helpfiles" folder.

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

# Optional Dependencies that may might want to install

## AngularJS
Add AngularJS to your project by following these steps:

### Fork the AngularJS repository
1. While logged in to your Github account, go to this link:

[AngularJS Git Repository](https://github.com/angular/angular.js)

2. Click on the "Fork" link at the top right of this page.
3. You will see a page that says something like "Forking this repository please wait"
4. Once this step has been completed, continue with the steps below.

### Clone your Github repository that you just created

  * git clone "git@github.com:<github username>/angular.js.git"

### Go to the AngularJS directory (which is now in your root directory for the project):
  * cd angular.js

### Add the main AngularJS repository as an upstream remote to your repository:
  * git remote add upstream https://github.com/angular/angular.js.git"

### Install node.js dependencies:
  * npm install

### Install bower components:
  * bower install

### Getting help with AngularJS
For more info on working with AngularJS, go to the following links:

[AngularJS Git Repository](https://github.com/angular/angular.js)

[AngularJS Homepage](https://angularjs.org/)

## EmberJS
1. While logged into your Github account, go to the following link:

[EmberJS Git Repository](https://github.com/emberjs/ember.js)

2. Fork this repository in the same way as mentioned in the AngularJS section above.
3. Download the files from this repository into the root directory of your project folder using the "Download Zip" button in the middle right of the EmberJS Git Repository page.
4. Go to the root directory of your project and unzip the "ember-js-master.zip" folder
5. Go into the directory of this folder that you just unzipped by issusing this command:
  * cd ember.js-master
6. Issusing the following commands one at a time:
  * sudo npm install
  * sudo npm run build
7. The builds will be placed in the dist/ directory of this folder
8. You may also need to download the starter kit from the EmberJS homepage:

[EmberJS Homepage](http://emberjs.com/)

8. For help on using EmberJS, go to the following pages:

[EmberJS Git Repository](https://github.com/emberjs/ember.js)

[EmberJS Homepage](http://emberjs.com/)

## Scaffolding
-------------------

### Development
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
│       ├── jquery.js
│       ├── modernizr.js
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
├── src
│   ├── js
│       ├── scripts.js
│   ├── scss
│       ├── 0-toolbox
│       ├── 1-base
│       ├── 2-content
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