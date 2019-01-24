## WordYoga
WordYoga is a PHP based word game, where you're supposed to guess a 4 letter word based on some hints provided to you.

**Try it out** - You can always [try out the game here](http://wordyoga.herokuapp.com).

![enter image description here](https://raw.githubusercontent.com/brahmnoor/WordYoga/master/docs/screen.png)

**Motive:** To guess the 4 letter word assigned to you by Mr. Robot. All the letters will be unique in the word.

**How to guess?** Mr. Robot is generous, he gives you 10 chances to enter any 4 letter word. Then after you input the word, he gives you a hint.

**Example:** Say the word Mr. Robot assigned is OVEN. Now you, being the clever person you are, input BEST, Mr. Robot will tell you "0 letter at right position, 1 letter at wrong position." As clearly, the letter E is in the Mr. Robot's word (OVEN), but at wrong position.  
As you are the best, you now enter the word, OATH. Mr. Robot, will give you the hint "1 letter at right position, 0 letters at wrong position".  
You get a brainwave, and enter, OVEN. Mr. Robot concedes defeat, and you win! Go scream and shout!

## Technology

 - PHP sessions used to store the word being guessed and to store the progress towards guessing.
 - HTML/CSS/JS for the front-end stuff.
