## How to show variable names when console logging?
It is easy for variable names to get jumbled-up when you have tons of output to the console. Wrap your variables in braces {} to make them an object, or brackets [] to make them an array, then use console.table to make them pretty.

    💩console.log(bar, foo);

    // Wait, which variable is named foo? 

    😐 console.log({ foo, bar });

    // Better, but it's kinda hard to read...

    😍console.table({ foo, bar });

    // Noice!

console-table.png

## How to group console logs?
You might not care about every line outputted into the console. Remove the clutter by grouping logs into a collapsible section with group or groupCollapsed.

    console.group();

    console.log(1);
    console.log(2);
    console.log(3);

    console.groupEnd();

## How to conditionally console log?
Sometimes you want to log ONLY when a condition is falsey - this is known as an assertion. It will keep your code concise by eliminating the need for if statements.

    // verbose 💩
    if (loggedIn) {
        console.error('user is logged in assertion failed');
    }

    // much better 😍 
    console.assert(loggedIn, 'user is logged in');

console-assert.png

## How to increment a counter in the console?
Keeping a counter running in your source code means managing mutable state - you probably don’t want that extra complexity. Instead, use count to tell the browser to increment a counter for you.

    console.count();
    console.count();
    console.count();

    console.countReset(); // reset to zero

console-count.png

## How to set a timer with the console?
You can start a timer with the console by calling time, then call timeLog to measure the elapsed time. It provides a simple solution for measuring performance.

    console.time();

    // do stuff

    console.timeLog('did stuff');


    // do more stuff

    console.timeLog('did more stuff');

    console.timeEnd()

## How to add custom CSS styles to the console output?
Use the special %c character to add some custom CSS flavor to the console. This is a surefire way to impress other developers, especially if you maintain an open source library.

    console.log('%c YOUR_MESSAGE', 'YOUR_CSS')

console-style.png

