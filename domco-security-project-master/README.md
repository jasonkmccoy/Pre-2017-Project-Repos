# Domco Security Project

**Please contact Jason ASAP if you need help installing anything or coding (such as working with Sass or the command-line)**

**Jason's contact info is at the bottom of this page**

## Hardware/Software Requirements
1. Computer (duh :)

2. Text-editor such as Sublime Text, Notepad++, Aptana, Netbeans etc.  Do NOT use Notepad, TextEdit, Microsoft Word or Dreamweaver.

3. Team Viewer

4. Screencast-O-Matic

5. Inkscape

## Project setup (Required Programs)
This project utilises open source components running on the Terminal/command-line for it's workflow, you'll need to install Node and Grunt. Here's a walkthrough of how to get a project up and running in minutes. Once Node and Grunt are installed all future projects running Grunt are instant.  If you need help on how to use the command-line or Sass, talk to Jason (See his contact info at the bottom of the page).

1. Install [Node.js](http://nodejs.org/download)

2. Install [Sass](http://sass-lang.com/tutorial.html)

3. Install [Git](http://git-scm.com) on your machine. 

4. If you're a Windows user you'll also need to install [Ruby](http://rubyinstaller.org/downloads).

5. [Install Grunt](http://gruntjs.com/getting-started) using `sudo npm install -g grunt-cli`. You may need to use `sudo` in front of the Grunt install command to give it permissions. For Windows tips with Grunt checkout their [FAQs](http://gruntjs.com/frequently-asked-questions).

## Grunt Dependencies installation
1. Copy/Paste the following command into the command-line program you are using (just the part that starts with `sudo` and ends with `-g`)
    * `sudo npm install matchdep -g`

2. You will need to enter your system password in order to continue (this password is the same as the password you use to login to your computer.  You will NOT get any feedback on the command-line regarding your password.  In other words, you will not see Password: ********* you will just see Password: *  So make sure you type in your password correctly and then press return/enter).

3. Copy the code block below the following lines into your command-line program (the code block that starts with sudo npm install connect-livereload -g; and ends with sudo npm install time-grunt -g)
  * Copy/Paste the entire code block at once into your command-line window.
  * Do NOT press return/enter after pasting this code into your command-line program.
  * This process may take a little time.
  * Be patient and let the entire process finish completely before clicking on anything.  You will know it is done when your command prompt looks like it did before you pasted the code in.

```sudo npm install connect-livereload -g;
sudo npm install grunt-bump -g;
sudo npm install grunt-concurrent -g;
sudo npm install grunt-contrib-jshint -g;
sudo npm install grunt-contrib-sass -g;
sudo npm install grunt-contrib-uglify -g;
sudo npm install grunt-contrib-watch -g;
sudo npm install grunt-dev-update -g;
sudo npm install grunt-notify -g;
sudo npm install grunt-open -g;
sudo npm install grunt-uncss -g;
sudo npm install load-grunt-tasks -g;
sudo npm install time-grunt -g```

## Download the Project Files
1. Download the Git reposoitory [Project Files](https://github.com/jason-hoppedupdesigns/domco-security-project) files onto your machine, unzip the folder and change the folder name to whatever the project is going to be called (In the case of the first project we are working on, the folder should be named "domco-security").

2.  Do NOT delete any files from this folder and keep the file structure the same.  See the "Scaffolding" section below to see the file/folder structure for the project.

## Starting the Project
1. Navigate to the `grunt-dev.command` file in the root of your project folder and double-click it. This will open the Terminal (or whatever command-line program you are using) and install the necessary `node_modules` folder, which are the project's Grunt dependencies. The `grunt-dev.command` file includes a `sudo` prefix so you'll need to enter your password to install.

2. The `grunt-dev.command` should install all the Grunt dependencies, which you can check back to see in your folder (there will be a new folder that was just created called `node_modules` do NOT delete this folder). We you click the `grunt-dev.command` file, a browser window will automatically open the project's index.html page (the project server is running on `localhost:8005`).

3. To navigate to a file other than the index.html file, type the address http://localhost:8005/your-file-name.html (for example: http://localhost:8005/login.html)

4. From now on, just double-click the `grunt-dev.command` file to automatically run the project's Grunt tasks, it's setup using the following script to automatically `cd` you into the correct directory and run the necessary commands.

5. Do NOT close the command-line window that is opened when you click on the `grunt-dev.command` file while you are editing project pages/files.
If you do close it, just double-click the `grunt-dev.command` file again

## Scaffolding

````
├── app
│   ├── apple-touch-icon-precomposed.png
│   ├── assets
│   │   ├── css
│   │   ├── fonts
│   │   ├── img
│   │   └── js
│   ├── favicon.ico
│   └── index.html
├── src
│   ├── js
│   │   └── scripts.js
│   └── scss
│       ├── bourbon
│       ├── components
│       ├── content
│       ├── toolbox
│       └── style.scss
├── docs
├── grunt-build.command
├── grunt-build.bat
├── grunt-dev.command
├── grunt-dev.bat
├── package.json
├── README.md
├── .editorconfig
├── .gitignore
├── .jshintrc
└── .travis.yml
````
## How Grunt Automates Tasks
Once running, the project Gruntfile.js does the following tasks for you:

1. Mounts the `app` folder onto a local server (http://localhost:8005)
2. Listens for changes inside the `src` directory, and compiles the necessary files into the `app` directory, which will then automaticaly livereload or inject changes. CSS changes are injected, all other changes force a page reload.

## Developing/Starting Your Project
Double-click the `grunt-dev.command` file and get developing, Grunt will report any errors with your code back to you on the command-line, even the line number. All CSS and JavaScript is uncompressed in development.

## Compiling/Saving Files
The project folder ships with a preconfigured build task for Grunt, just fire up the `grunt-build.command` file and your `src` directory files will be compiled into the `app` folder, but this time they're minified and ready to push onto a server environment.

## Livereloading
Grunt's Livereload will inject the following script into your HTML for you (not included when you deploy):

````html
<!-- livereload script -->
<script type="text/javascript">document.write('<script src="http://'
 + (location.host || 'localhost').split(':')[0]
 + ':35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
</script>
````

You can navigate to the `watch` portion of the Grunt configuration and specify which files you'd like to livereload once they're changed.

## Extending Grunt tasks
If you're including more Grunt tasks in your project, remember to use the `npm install <grunt package> --save-dev` inside your Terminal so that it gets added to your `package.json` file for future dependencies.

Add new tasks to either the default `grunt` task or `grunt build` task at the end of the `Gruntfile.js`:

````js
/**
 * Default task
 * Run `grunt` on the command line
 */
grunt.registerTask('default', [
  'sass:dev',
  'cssmin:dev',
  'bower:dev',
  'autoprefixer:dev',
  'jshint',
  'concat:dev',
  'connect:livereload',
  'open',
  'watch'
]);
````

## JavaScript
The project folder comes with a single `scripts.js` to get you started, of course if you're building an AngularJS project or other type you're going to need to customize the structure, but this gets you started. The generic scripts file ships with an immediately-invoked function expression (IIFE):

````js
(function ($, window, document, undefined) {
  'use strict';
  // FireShell
})(jQuery, window, document);
````

This helps with all your minification and not polluting with global variables, for instance before minification you've got very readable code and variable names (including the `document` and `window` objects):

````js
(function ($, window, document, undefined) {
  'use strict';
  var test = document.createElement('script');
})(jQuery, window, document);
````

When minified will be as follows, reducing many instances of the :

````js
(function (a,b,c,d) {
  'use strict';
  // Also not global
  var test = a.createElement('script');
})(jQuery,window,document);
````

Thus saving many bytes and reducing file size and performance, as well as keeping the global namespace clean. Passing in the `jQuery` object and giving it the dollar alias also makes it play nicely if you're including other frameworks that use the `$` namespace.

## Why just style.min.css and scripts.min.js?
Including only two of your custom CSS and JavaScript files in your HTML aligns with best practices in modern web development, minifying your code and limiting HTTP requests is a huge performance enhancer.

## Sass/SCSS setup
FireShell comes with a `.scss` file setup and existing `@import` declarations to the very common web components. FireShell hopes to help those out who aren't sure about structuring a CSS project confidently as well as getting them setup with using a CSS PreProcessor. The basic idea:

* `mixins` holds all Sass/SCSS mixins, FireShell ships with a few helpers
* `module` holds modules, more Object-Orientated components and a generic `app.scss` for everything else, all file names should be modular/OO.
* `partials` holds the blueprints for the project, the header, footer, sidebar and so on.
* `vendor` holds any files that are third party, such as the font awesome icons CSS
* `style.scss` imports all the necessary files from the above folders, when adding new files be sure to add it inside this file.

## Hidden files explained

It's a good idea to expose hidden files so you can configure your `.editorconfig`, `.jshintrc`, `.gitignore` files. On the command line, enter:

````
defaults write com.apple.Finder AppleShowAllFiles YES
````

To hide hidden files enter:

````
defaults write com.apple.Finder AppleShowAllFiles NO
````

### .editorconfig
EditorConfig helps developers define and maintain consistent coding styles between different editors and IDEs. The `.editorconfig` file consists of a format for defining coding styles and a collection of text editor plugins that enable editors to read the file format and adhere to defined styles.

### .gitignore
Ignores minified and generated files, this is best for working in teams to avoid constant conflict, only the source files are needed.

### .travis.yml
This is used on [travis-ci.org](http://travis-ci.org) for continuous integration tests, which monitor the FireShell build.

## Platform support

The project files run on both Mac OS X, Linux and Windows. Automated command-line scripts are only supported on Mac OS X and Windows.

## Jason's Contact Info
    * Jason McCoy
    * jason@hoppedupdesigns.com
    * (828) 545-6007
