Vita Database Software Project (Domco Technologies) Instructions:

**You will need grunt installed on your system in order to use these files.  If you need to install Node.js, Grunt and the Grunt plugins, you MUST install them BEFORE clicking on the grunt-dev.command file as mentioned in the directions below.  Instructions for installing Grunt and the necessary Grunt plugins can be found below after the Vita Database Software Project instructions.**

1. The git repository for this project can be found here: [Git Repository](https://github.com/jason-hoppedupdesigns/vita-database-software-project)

2. Once you have downloaded and unzipped the git repository:
    Double-click the grunt.dev.command file.
    If you are using a Mac, you may have to right - click on the grunt.dev.command file and then choose "Open" from the drop - down menu that comes up.
    This won't take long to long but don't interrupt the process.  Once it is finished loading the necessary files and dependencies, the index.html file will open up in your browser window.

3. Sass instructions:
    * A.   Sass files are found in the "src" folder at the root of the project.
    * B.   The main Sass file is src - > scss - > style.scss.This is the file
        that you will use to import any additional Sass files that are used
        for the project(i.e._reset.scss, _logo.scss, etc)
    * C.   Import the necessary Sass files into style.scss like this: 
        * @import "reset";
        * @import "logo";
        * @import "sprites";
        * @import "login-form";
    * D.   You can have folders for your Sass files(such as Mixins, Modules, etc). In this case you would import Sass files from these folders like this:
      * @import "mixins/mixin-sassfile";
      * @import "modules/module-sassfile";
   * E.  The **ONLY** Sass file that does not have a "_" before the name is the style.scss file. All other Sass files **MUST** be named like this:
     _reset.scss, _layout.scss, etc. This is the only way that the CSS will be compiled correctly from the Sass files in the project.
**NOTE:** You don't include the "_" when importing the Sass files and you don't have to add the.scss file extension although you can and it won 't hurt anything but why not just save yourself from the additional keystrokes? :)

4. The compiled CSS that you will add as your external stylesheet is found here:
    app->assets->css->style.min.css
Just add this to all your pages as you normally add external stylesheet: < link href = "assets/css/style.min.css" rel = "stylesheet">
This is the only stylesheet you will need unless you need to add a custom webfont such as a Google Webfont link.

5. All.html or.php files are found  in the "app" folder:
    * app->index.html, login.html, etc

6. **DO NOT DELETE** any files or folders found at the root level of the project.These files are important for all the "magic" to work in the background of the project (saves, compiles, etc).

7. As long as your command-line program is "watching" your project, all the "magic" will be done for you once you save your files.This includes auto-refreshing the browser for you when you save.

8. If you close out the command-line program, just go back to your project and click on the grunt-dev.command file again as outlined in step 2 above.

9. If you run into any problems, don't hesitate to ask for help.  
We are all here to work as a team and to help each other out.

**IMPORTANT NOTE**:  When adding HTML and/or PHP pages to the project, some of the settings in the Gruntfile.js file may need to be changed.  If you need help with this, just ask.

** Installing Grunt and the necessary Grunt plugins **

1. Install [Node.js](http://nodejs.org/download), [Sass](http://sass-lang.com/tutorial.html) and [Git](http://git-scm.com) on your machine. If you're a Windows user you'll also need to install [Ruby](http://rubyinstaller.org/downloads).

2. [Install Grunt](http://gruntjs.com/getting-started) using `npm install -g grunt-cli`. You may need to use `sudo` in front of the Grunt install command to give it permissions. For Windows tips with Grunt checkout their [FAQs](http://gruntjs.com/frequently-asked-questions).

3. To install the necessary Grunt plugins, type the following commands in your command-line program (one command at a time). Make sure you are running these commands in the root of your
project folder:
    * sudo npm install grunt -g --save-dev
    * sudo npm install -g grunt-cli
    * sudo npm install -g bower
    * sudo npm install grunt-bump --save-dev
    * sudo npm install --save-dev grunt-concurrent
    * sudo npm install grunt-contrib-concat --save-dev
    * sudo npm install grunt-contrib-jshint --save-dev
    * sudo npm install grunt-contrib-sass --save-dev
    * sudo npm install grunt-contrib-uglify --save-dev
    * sudo npm install grunt-contrib-watch --save-dev
    * sudo npm install grunt-contrib-clean --save-dev
    * sudo npm install --save-dev grunt-dev-update
    * sudo npm install grunt-notify --save-dev
    * sudo npm install --save-dev grunt-open
    * sudo npm install grunt-processhtml --save-dev
    * sudo npm install grunt-uncss --save-dev
    * sudo npm install --save-dev load-grunt-tasks
    * sudo npm install matchdep --save-dev
    * sudo npm install grunt-autoprefixer --save-dev
    * sudo npm install grunt-contrib-cssmin --save-dev
    * sudo npm install grunt-bower-task --save-dev
    * sudo npm install --save-dev load-grunt-tasks
    * sudo npm install grunt-contrib-coffee --save-dev
    * sudo npm install --save-dev time-grunt
