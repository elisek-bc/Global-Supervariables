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
This is just a reading exercise zo there were no real difficulties here.

### Exercise 4: Manipulation

<b>STRING MANIPULATION</b>
#### What?

1. Create a nickname.php, on it create a form, with the title Cool NickName Generator.
This form should have one text input and a button, which can only be pressed if more than one character is filled into the field. When you fill in the field and submit the form, take the filled in username and go through a series of steps dictated below:
- Turn the name around
- Capitalize it
- Turn the name back around
- Add -- to the front and back of the name
- Add x to the front of the name
- Add two to four random characters (A-Z, a-z, 0-9) in front of the name
- Wrap those random characters with blocked parentheses []
- Capitalize one more random character in the name (if the character is already capitalized, it should be de-capitalized)

2. Bonus objective

Give the nickname a gradient by wrapping each letter in a span with a different color style attribute to it


#### Contributors
I, Elise, am the only contributor to this project.

#### Timing
This exercise is a part of a series of PHP exercises with a 2-3 week deadline. I've worked on this exercise part 'string manipulation' on 17th of May 2019. 

#### Difficulties
The exercise was do-able but I did not manage to do the bonus objective.

