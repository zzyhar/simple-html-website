Hosting: https://zzyhar-simple-html.herokuapp.com/

Rules:

1. You are writing comments for each tag that you are using
2. Before using the tag you search tag name and read what does it do and what parameters it accepts
3. If code does not work you are not continue watching and following tutorial, you start figuring out what is wrong and why it does not work
4. After each 4 minutes of watched and repeated actions of code you check if your website works fine and create commit

Plugins to install:

1. Better Comments // to see my notes in colors
2. Bracket Pair Colorizer 2 // to better see your code
3. HTMLHint // when you install it there is problems tab that will display any issues with your project that you have to fix
4. Live Server // To run project as live
5. Work only in Chrome tab with opened "Developer tools tab"
6. Prettier for proper project formatting => find out how to format on save to have proper code styling

// ---------- Git Flow ---------- //
// Before the first step
// Download latest commit from remote branch, so local wil be up to date
[git pull]

// First Step: Check all changes that has been applied to project
[git status]

// Second Step: Include new changes to commit that will be send to repository
[git add file.filename] // to add single file to commit
[git add .] // add all changes

// Third Step: Check added files to commit
[git status ]
// Red color => Not added files
// Gree color => Added files

// Fourth Step: Creating commit with added changes & give it a name
[git commit -m "Title for the commit that explains what did I do there"]

//Fifth Step: Send new commit with chages to the branch in repository
[git push]
