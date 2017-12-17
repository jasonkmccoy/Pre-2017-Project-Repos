Vita Database Software Project(Domco Technologies) Instructions:

1. The git repository for this project is: https: //github.com/jason-hoppedupdesigns/vita-database-software-project

2. Once you have downloaded and unzipped the git repository:
    Double - click the grunt.dev.command file.
    If you are using a Mac, you may have to right - click on the grunt.dev.command file and then choose "Open" from the drop - down menu that comes up.

3. Sass instructions:
    A. Sass files are found in the "src" folder at the root of the project.
    B. The main Sass file is src - > scss - > style.scss.This is the file
        that you will use to import any additional Sass files that are used
        for the project(i.e._reset.scss, _logo.scss, etc)
    C. Import the necessary Sass files into style.scss like this: 
        @import "reset";
        @import "logo";
        @import "sprites";
        @import "login-form";
  NOTE: You don 't include the "_" when importing the Sass files and you don't have to add the.scss file extension although you can and it won 't hurt anything but why not just save yourself from the additional keystrokes? :)
    D. You can have folders for your Sass files(such as Mixins, Modules, etc). In this case you would import Sass files from these folders like this:
      @import "mixins/mixins";
    E.The ONLY Sass file that does not have a "_" before the name is the style.scss file. All other Sass files MUST be named like this:
     _reset.scss, _layout.scss, etc. This is the only way that the CSS will be compiled correctly from the Sass files in the project.

4. The compiled CSS that you will add as your external stylesheet is found here:
    app->assets->css->style.min.css
Just add this to all your pages as you normally add external stylesheet: < link href = "assets/css/style.min.css" rel = "stylesheet">
This is the only stylesheet you will need unless you need to add a custom webfont such as a Google Webfont link.

5. All.html or.php files are found  in the "app" folder:
    app->index.html, login.html, etc

6. DO NOT DELETE any files or folders found at the root level of the project.These files are important
for all the "magic" to work in the background of the project (saves, compiles, etc).

7. As long as your command-line program is "watching" your project, all the "magic" will be done for you once you save your files.This includes auto-refreshing the browser for you when you save.

8. If you close out the command-line program, just go back to your project and click on the grunt-dev.command file again as outlined in step 2 above.

9. One little handy (and cool: ) tool you can use from this project is Uncss.  Uncss will remove all unused CSS rules from your style.min.css file.This is very useful and I highly recommend taking advantage of this tool as it will decrease the size of your CSS file and therefore speed up page loads.
To use this awesome tool:
    A.Stop "watching" your project files on your command-line program by issusing the "Ctrl+C" command from the command-line.
    B.Now "cd" back into the root of your project directory (if anyone is not familiar with command-line work, just tell me and I will help you out).
    C.Once you are at the root of your project directory, issue the following command:
        grunt uncss
    D.That 's all that you need to do! You will see a success message on your command-line program if everything worked right.

10. If you run into any problems, don 't hesitate to ask for help.  
We are all here to work as a team and to help each other out.
