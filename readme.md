# INTRODUCTION TO PHP

## SERIES OF EXERCISES
You can find all exercises in the folder 'src'.

### Exercise 1: Global Supervariables

#### What?
##### Scope

1. Create a file setup.php
2. Create a file result.php
3. Use $_POST and $_GET to send data* from setup.php to result.php
4. On result.php show this data* to the user:<br/>
    - Show what data is in which variable <br/>
    - Make it look decent (use css) -> Don't spend too much time either !

The data that needs to be sent, for $_POST: top 5 tv shows, top 5 movies, for $_GET: Favourite country,worst movie ever seen Data for any bonus objectives can be anything you want (maybe stick with the theme ;) )

##### Bonus objectives

    1. Use as many of the superglobal variables as you can
    2. Put each variable's values in a tab (bootstrap tabs for example) on the result page
    3. Loop through the data and post it in a table (as key => value)

##### Super bonus objectives

1. Save all data from each variable into an object with the variable name as object name and its keys => values as properties
2. Save all objects into a larger object called data_object
3. Save this data_object into the $_SESSION
4. Create a third page called superdata.php on which you display the data_object as an indented list of keys => values of the properties and child objects

#### Contributors
I, Elise, am the only contributor to this project.

#### Timing
This exercise started on 13th of May 2019; and is part of a series of exercises on PHP. All the exercises together have a 2-3 week deadline.

#### Difficulties
1. It's hard to get started with PHP like this... I first went through a whole other basic course with syntax before I started with this.
2. The link between documents, what to place where is confusing.
3. Objects in objects we're kinda hard to address.

### Exercise 2: Loops

#### What?
1. Create a file loop.php
2. At the top of the file, create an array like the one below (with at least 8 shows in it)
3. Loop through the array posting the rating and the tv show's name in a table row
4. Now make the tv-show name clickable and link it to a google search about that tv show
5. Lastly, instead of the number of the rating of this tv show, make a loop inside the current loop to give the number of stars instead of rating (use icons)

<b>EXTRA: LOTTERY EXERCISE</b>

1. Create a lottery machine. with 3 emoji's.
2. Create index.php and a lottery.php file
3. When the player wins congratulate him and ask him if he wants to play again.
4. Choose one emoji that wins and two that lose
5. Here are the emoji's: pizza-hamburger-fries

#### Contributors
I, Elise, am the only contributor to this project.

#### Timing
This exercise started on 15th of May 2019; and is part of a series of exercises on PHP. All the exercises together have a 2-3 week deadline.

#### Difficulties
1. This exercise wasn't that difficult. I managed to finish this quite quickly.
2. for the lottery machine I tried putting more effort in my CSS to make it look prettier, because the exercise itself was finished in 2 hours as well.

### Exercise 3: Debugging

#### What?
This is just a bunch of information to read through before continueing in the course.

#### Contributors
I, Elise, am the only contributor to this project.

#### Timing
This exercise started on 16th of May 2019; and is part of a series of exercises on PHP. All the exercises together have a 2-3 week deadline.

#### Difficulties

