Vita Database Software Starting Framework
========================================

## Date of Last Revision: Decemeber 30, 2014
------------------------------

## Version 1.0.0
----------------------

## TABLE OF CONTENTS
====================
1. Important things to note before getting started
2. System Requirements
3. Update Ruby
4. Starting the project (i.e. opening up the index.html page and begin coding :)
5. Scaffolding

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

## Starting the project (i.e. opening up the index.html page and begin coding :)
--------------------------------------------------------------------------------------------------------
type this command in the command-line program of your choice:
`npm start`

## Scaffolding
-------------------
````
├── .sass-cache
├── bower_components
│   ├── angular
│   ├── angular-animate
│   ├── angular-touch
│   ├── fastclick
│   ├── foundation-apps
│   ├── hammerjs
│   ├── tether
│   ├── ui-router
│   ├── viewport-units-buggyfill
├── build
│       ├── css
│           ├── styles.css
│       ├── img
│           ├── chat
│           ├── favicons
│           ├── login
│           ├── logos
│           ├── navigation
│           ├── sprites
│       ├── js
│           ├── vendor
│               ├── jquery.js
│               ├── modernizr.js
│           ├── scripts.min.js
│       ├── 404.html
│       ├── apple-touch-icon-precomposed.png
│       ├── apple-touch-icon.png
│       ├── blank-template.html
│       ├── browserconfig.xml
│       ├── crossdomain.xml
│       ├── favicon.ico
│       ├── humans.txt
│       ├── index.html
│       ├── robots.txt
│       ├── tile-wide.png
│       ├── tile.png
├── documentation
│   ├── *** look here for documentation of the technology/syntax used
├── checklists
│   ├── *** look here for checklists that will help you start and finish your project
├── client
│   ├── assets
│       ├── components
│           ├── bootstrap
│           ├── bootstrap-sass
│           ├── css
│               ├── 404.css
│               ├── append.css
│               ├── create_page.css
│               ├── design_template.css
│               ├── form_design.css
│               ├── jquery-ui.css
│               ├── main.css
│               ├── main.min.css
│               ├── widget.css
│           ├── fontawesome
│           ├── fonts
│           ├── foundation
│           ├── jquery-ui
│           ├── snippets
│               ├── chat
│                   ├── chat-tab.html
│                   ├── chat-widget.html
│                   ├── chatbox.html
│                   ├── customer-chat.html
│                   ├── default-loader.html
│               ├── other
│                   ├── domco-technology-topbar.html
│               ├── scss
│                   ├── chat
│                       ├── _chat-tab.scss
│                       ├── _chat-widget.scss
│                       ├── _chatbox.scss
│                       ├── _customer-chat.scss
│                   ├── other
│                       ├── _filters-panel-tabs.scss
│                       ├── _home-page-login.scss
│                       ├── _logo-domco.scss
│                       ├── _nav-home-topbar.scss
│                       ├── _sprite-vita_sm.scss
│                       ├── _vita-topbar-logo.scss
│                   ├── _columns-section.scss
│                   ├── _current-filters.scss
│                   ├── _error-report-header.scss
│                   ├── _filter-name.scss
│                   ├── _filter-operation.scss
│                   ├── _filter-panel.scss
│                   ├── _filters-section.scss
│                   ├── _footer.scss
│                   ├── _layout-section.scss
│                   ├── _filter-operation.scss
│                   ├── _nav-info.scss
│                   ├── _navbar.scss
│                   ├── _page-sidebar.scss
│                   ├── _provide-criteria.scss
│                   ├── _query-container.scss
│                   ├── _query-tabs.scss
│                   ├── _save-clear-buttons.scss
│                   ├── _saved-filters.scss
│                   ├── _select-column-line.scss
│                   ├── _select-container.scss
│                   ├── _select-operation.scss
│                   ├── _usbButton.scss
│               ├── columns-section.html
│               ├── current-filters.html
│               ├── error-report-header.html
│               ├── filter-name.html
│               ├── filter-operation.html
│               ├── filter-panel.html
│               ├── filters-section.html
│               ├── footer.html
│               ├── head.html
│               ├── layout-section.html
│               ├── filter-operation.html
│               ├── nav-info.html
│               ├── navbar.html
│               ├── page-sidebar.html
│               ├── provide-criteria.html
│               ├── query-container.html
│               ├── query-tabs.html
│               ├── save-clear-buttons.html
│               ├── saved-filters.html
│               ├── select-column-line.html
│               ├── select-container.html
│               ├── select-operation.html
│               ├── usbButton.html
│           ├── templates
│               ├── home.html
│       ├── css
│           ├── styles.css
│       ├── img
│           ├── Attachments
│               ├── SASS Framework.png
│               ├── SASS Framework.svg
│               ├── Table Columns&Filters.png
│               ├── Table Columns&Filters.svg
│           ├── chat
│               ├── chat_sprites_small.svg
│               ├── avatar.png
│               ├── chat-tab.svg
│               ├── default-loader.gif
│           ├── favicons
│               ├── apple-touch-icon.png
│               ├── apple-touch-icon-57x57.png
│               ├── apple-touch-icon-60x60.png
│               ├── apple-touch-icon-72x72.png
│               ├── apple-touch-icon-76x76.png
│               ├── apple-touch-icon-114x114.png
│               ├── apple-touch-icon-120x120.png
│               ├── apple-touch-icon-144x144.png
│               ├── apple-touch-icon-152x152.png
│               ├── apple-touch-icon-180x180.png
│               ├── apple-touch-icon-precomposed.png
│               ├── browserconfig.xml
│               ├── chrome-touch-icon-192x192.png
│               ├── favicon.ico
│               ├── favicon-16x16.png
│               ├── favicon-32x32.png
│               ├── favicon-96x96.png
│               ├── favicon-160x160.png
│               ├── favicon-192x192.png
│               ├── ms-touch-icon-144x144-precomposed.png
│               ├── mstile-70x70.png
│               ├── mstile-144x144.png
│               ├── mstile-150x150.png
│               ├── mstile-310x150.png
│               ├── mstile-310x310.png
│           ├── login
│               ├── login_bg.png
│           ├── logos
│               ├── domco-logo.png
│               ├── small-vita-logo.png
│               ├── vita-logo.png
│           ├── navigation
│               ├── menu_icon.gif
│           ├── sprites
│               ├── logo_sprites.svg
│               ├── sprites_reg_2.svg
│       ├── js
│           ├── chat
│               ├── chat-widget.js
│               ├── chatbox.js
│               ├── widget.js
│           ├── other
│               ├── filters-panel-tabs.js
│               ├── main.js
│               ├── plugins.js
│           ├── vendor
│               ├── bootstrap.min.js
│               ├── jquery.js
│               ├── modernizr.js
│           ├── scripts.min.js
│       ├── scss
│           ├── components
│           ├── toolbox
│                   ├── _base.scss
│                   ├── _layout.scss
│                   ├── _mixins.scss
│                   ├── _variables.scss
│           ├── vendor
│               ├── _normalize.scss
│               ├── foundation
│                   ├── components
│                       ├── _accordion.scss
│                       ├── _action-sheet.scss
│                       ├── _block-list.scss
│                       ├── _button-group.scss
│                       ├── _button.scss
│                       ├── _card.scss
│                       ├── _extras.scss
│                       ├── _forms.scss
│                       ├── _grid.scss
│                       ├── _iconic.scss
│                       ├── _label.scss
│                       ├── _list.scss
│                       ├── _menu-bar.scss
│                       ├── _modal.scss
│                       ├── _motion.scss
│                       ├── _notification.scss
│                       ├── _off-canvas.scss
│                       ├── _panel.scss
│                       ├── _popup.scss
│                       ├── _switch.scss
│                       ├── _tabs.scss
│                       ├── _title-bar.scss
│                       ├── _typography.scss
│                       ├── _utilities.scss
│                   ├── helpers
│                       ├── _breakpoints.scss
│                       ├── _functions.scss
│                       ├── _images.scss
│                       ├── _mixins.scss
│                   ├── foundation.scss
│                   ├── _global.scss
│                   ├── _settings.scss
│           ├── styles.scss
│       ├── 404.html
│       ├── apple-touch-icon-precomposed.png
│       ├── apple-touch-icon.png
│       ├── blank-template.html
│       ├── browserconfig.xml
│       ├── crossdomain.xml
│       ├── favicon.ico
│       ├── humans.txt
│       ├── index.html
│       ├── robots.txt
│       ├── tile-wide.png
│       ├── tile.png
├── helpfiles
│   ├── *** look here for cheatsheets, useful-links, commands, etc
├── node_modules
│   ├── .bin
│   ├── connect-modrewrite
│   ├── front-matter
│   ├── gulp
│   ├── gulp-autoprefixer
│   ├── gulp-concat
│   ├── gulp-front-matter
│   ├── gulp-ruby-sass
│   ├── gulp-uglify
│   ├── gulp-uncss
│   ├── gulp-util
│   ├── rimraf
│   ├── run-sequence
│   ├── through2
├── .bowerrc
├── .gitignore
├── bower.json
├── Gemfile
├── Gemfile.lock
├── gulpfile.js
├── package.json
└── README.md
````

