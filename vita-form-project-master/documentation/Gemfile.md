# Gemfile Install Instructions
======================
**NOTE:** These instructions are only if you wish to install a new directory of bourbon and/or neat for your project.  If you are using the new-project-framework files, you will not need to follow these instructions as these dependencies are already installed for you.
**NOTE:** Some of these commands below you will not need to enter if you have already installed these dependencies (such as Sass and Bower).  I am just including the install commands just in case you somehow got to this point without installing Bower, Sass, etc.
1. In the root of your project folder type the following commands:
  * sudo gem install sass
  * sudo npm install -g bower
  * bower install sass --save
  * bower install bourbon --save
  * bower install neat --save
2. Now that you are in the main directory for your Sass files type the following commands:
  * sudo gem update --system
  * sudo gem install bundler
  * sudo apachectl restart
  * bundle init
  * sudo nano Gemfile
3. Once you enter the `sudo nano Gemfile` command, you will see a file that looks like this:
  * # A sample Gemfile
  * source "https://rubygems.org"
  * # gem "rails"
4. Under the line that says `gem "rails"` enter the following lines into this file:
  * gem "sass"
  * gem "bourbon"
  * gem "neat"
5. Press `control (CTRL) + x`
6. You will be asked in you want to save the file, enter y
7. Next you will be asked if the file you are saving should be called `Gemfile`.  Do not change the name of the file just press enter (return) to exit back to the command-line
8. While you are still in the root of your project type the following command to get to the root of your Sass (scss) directory:
  * cd src/scss
9. Now that you are in the scss directory for your project, type the following commands:
  * bower install bourbon
  * bower install neat

