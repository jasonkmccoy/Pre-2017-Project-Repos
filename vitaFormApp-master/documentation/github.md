## Create a Github Repository for your project
-------------------------------------------------------------
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

## Downloading the project files
------------------------------------------

1. Unless instructed otherwise, all of the command-line commands will be issued in the root directory of your project.
2. The project files zip file that you will download using the link below is pretty big but you will not use most of these files when you are ready for production.
3. Do download a clean install of the project files, go to the link below:

  [New Project Framework Download Link](https://github.com/jason-hoppedupdesigns/new-project-framework)