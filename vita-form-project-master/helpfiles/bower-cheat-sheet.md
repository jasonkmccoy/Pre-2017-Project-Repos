Bower Cheat Sheet
=======================

##Installing Bower
* node.js: [download](http://nodejs.org/download/)
* Requires Git
  * Mac: installed
  * Windows: mysysgit [download](http://msysgit.github.io/)
* ```npm install bower -g```


##Installing Packages
####Basic Installation Steps
1. Go to the project folder (using a Terminal program: e.g. ```cd ~/Documents/my_project/```
2. Install the package <br>
   ```bower install <package-name>``` <br>
   For example: ```bower install jquery``` 

####More Installation Options
```bower install <package-name>#<version>``` <br>
Install particular version of package. For example: ```bower install jquery#1.11```

```bower install <package1-name> <package2-name> <package3-name> <package4-name>``` <br>
Install multiple packages at once. For example: ```bower install jquery angular bootstrap```

####Specifying Where Bower Installs Packages
Normally, bower install packages in your project's root directory in a folder named ```bowser_components```. If you want to change where the packages are installed -- for example, in a ```js``` or ```js/libs``` folder, you need to create a file named ```.bowerrc``` in the project directory. That file should have a simple JSON string formatted like this:

```javascript
{
     "directory" : "js/lib"
}
``` 

The path to the directory is relative to the project directory (and where the ```.bowerrc``` file is located.)

Bower can only install into one location, so if you want separate installations within one project -- for example ```js/libs``` (for production libraries) and ```test/libs``` (for testing libraries) -- you need to create a separate ```.bowerrc``` file in the second directory and install bower components from inside that directory (PITA).

####Bower.json file####
Bower.json file contains information about your project and, most importantly, a list of dependencies for the project -- what bower packages the project needs. ([Basic format for bower.json file](#basic-structure-of-bowerjson-file)))

```bower init``` <br>
Create new ```bower.json``` file in the current directory. This is interative -- asks questions about project and builds ```bower.json``` file for you. 

```bower install <package-name> --save``` <br>
Install bower package AND add to list of dependencies in ```bower.json```


##Updating and Removing Packages
```bower list``` <br>
List local packages for project and possible updates

```bower update``` <br>
Updates all installed packages in project directory to version specified in bower.json.
 
```bower update <package-name>``` <br>
Updates package to version specified in bower.json.

```bower install <package-name>``` <br>
Updates listed package(s) to latest version.

```bower uninstall <package-name>``` <br>
Remove bower package files from project

```bower uninstall <package-name> --save``` <br>
Remove bower package files from project and from list of dependencies in bower.json file.

##Basic Structure of bower.json File
```javascript
{
  "name": "My Project",
  "version": "0.0.1",
  "authors": [
    "Dave McFarland <dave@sawmac.com>"
  ],
  "license": "MIT",
  "ignore": [
    "**/.*",
    "node_modules",
    "bower_components",
    "test",
    "tests"
  ],
  "dependencies": {
    "jquery": "~2.1.1",
    "jqueryui": "~1.11.0"
  },
   "install" : {
    "path" : {
      "css": "src/css",
      "js": "src/js"
    } 
  }
}
```
