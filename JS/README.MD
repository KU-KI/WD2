# JAVASCRIPT
JavaScript code can be located in different places:
- In your HTML code between <script> and </script> tag
- In local files, usually ending with the .js suffix (i.e: in a script.js file), and included using, for example, a syntax such as: <script src="style.js"></script> tag
- In external files located on the Web, using their URLs, also using the `<script src="http://www.aserver.com/..../js/script.js"></script>` tag

```
<body>
    <h1>Kód v HTML</h1>
    <script>
        //kód v jazyku JavaScript
    </script>
</body>
```


## DATA TYPES
- What we call "primitive data types": for example a number, a string, etc. ex:
    var x = 3; var name = "Buffa";playing cards
- Objects (everything that is not a  "primitive data type" is an object):
    var michel = {firstName:'Michel', lastName:'Buffa'};
There is a set of "predefined objects" in JavaScript (arrays, functions, etc).

JavaScript has a small set of primitive data types:
    number: 1,2,105,3.14,-16 ...
    string: 'a', "one", 'two' , 'World Wide Web' ...
    boolean: true / false
    undefined: absent or unknown value
    null: special keyword, meaning no value or empty. The difference from undefined is that when a variable is null, it is still defined.

- typeof - operator, that is useful for knowing the type of a variable depending in its value (possible values: number, string, boolean, undefined, object, or function)

Number operators:
The following arithmetic operators are binary:
    +, - , /, *, % (modulo)

And there are also unary operators:
    ++, --, - (the opposite of a number)
    ++ and -- operators increment or decrement the value of a variable. They can be both prefixed or suffixed, which have different effects:
    Suffixed ++ adds one to the value of the variable, then returns the old value.
    Prefixed ++ also adds one to the value, but returns the new value. Both of these must be used with variables.

String operators:
    var s1 = 'Hello';
    s1 = s1 + ' World' + ' JavaScript';
    var s2 = 'Hello';
    s2+= ' World' + ' JavaScript';
    var s3 = 'Hello';
    s3.concat(' World' , ' JavaScript' );
    //s1,s2 and s3 return 'Hello World JavaScript'

How to convert a Number into a String:
    var n = 1;
    typeof n;
    // returns "number"
    n = "" + n;
    // returns "1"
    typeof n;
    // returns "string"

Special character: the "\":
    var s = 'I don\'t know';
    var s = "I don\'t know"; // here the \ is useless
    var s = "I don't know";  // same result as previous line
    var s = '"Hello", he said.'; // ok, double quotes inside single one will be displayed
    var s = "\"Hello\", he said."; // double quotes inside double quotes need to be escaped

Escaping the escape! Use a double "\":
    var s = "1\\2"; s;
    // returns "1\2"

Special characters starting with "\"
    "\n" for "next line":
        var s = '\n1\n2\n3\n';
        s
        // returns "
        1
        2
        3
        "
    "\t" for "insert a tabulation":
        var s = "1\t2"
        // s is equal to
        "1  2"

Logical operators: 
&& (AND)  
    usage example : if ((x  > 0) && (x < 10)) {
                     console.log('x is strictly positive and less than 10');
                 }
|| (OR)
    usage  example : if ((x  > 0) || (x == -5)) { 
                     console.log('x is positive or equal to -5'); 
                 }
! (NOT)
    usage example : if (!(x  > 0)) { 
                     console.log('x is not positive (x is less or equal to 0'); 
                 }

Comparison Operators:
    Equal ==
    Not equal !=
    Greater than >
    Greater than or equal >=
    Less than <
    Less than or equal to <=
    Strict equal ===
    Strict not equal !==

What is the difference between == and === in JavaScript?
Equal (==)
    Returns true if the operands are strictly equal with type conversion.
        1 == '1';
        //true :

Strict equal (===)
    Returns true if the operands are strictly equal with no type conversion.
        1 === '1';
        //false


## OBJECTS
```javascript
var student1 = {
    fullName:'John Doe',
    age: 23,
    city: 'New York',
    ssn: "11-22-33-44" // no comma at the end of the last property
}                      // declaration

    > student1.ssn
    "11-22-33-44"
    > student1.age
    23
    > student1
    [object Object] {
        age: 23,
        city: "New York",
        fullName: "John Doe",
        ssn: "11-22-33-44"
    }
```

## ARRAYS
```javascript
var daysOfWeek = [];
var daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
var gradesInMaths = [12, 7, 14, 18, 9, 11];

    > typeof daysOfWeek;
    "object"
    > daysOfWeek[0]
    "Monday"
    > daysOfWeek[1]
    "Tuesday"
    > daysOfWeek[2]
    "Wednesday"
    > daysOfWeek.length
    7

    > var daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    undefined
    > daysOfWeek.length
    6
    > daysOfWeek.push('Sunday');
    7
    > daysOfWeek
    ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]
    > daysOfWeek.length
    7
```
### Arrays and Strings
Strings are arrays of characters! 
```javascript
    > var s = 'one';
    > s[0]
    "o"
    > s[1];
    "n"
    > s[2];
    "e"
    > s.length;
    3
```

## TERNARY OPERATOR
This ternary operator is a shortcut version of if...then...else:
```javascript
    var max;
    var min;
    max = (min < 10)? min+10 : min;
```

## SWITCH
```javascript
var gear = '';
 
switch (cloudColor) {
    case 'green':
        gear = 'spacesuit';
        break;
 
    case 'black':
        gear = 'boots';
        break;
 
    case 'grey':
        gear = 'umbrella';
        break;
 
    case 'white':
        gear = 'jacket';
        break;
 
    default:
        gear = 'watch';
        break; // useless if in the last case
}
```

## LOOPS
while:
```javascript
    var i = 1, j = 1;
 
    while ( i < 4 ) {
        j += i;
        i += 1; 
    }
    ...
```

do-while:
```javascript
    var i = 0;
 
    do {
        console.log('i = ' + i);
        i++;
    } while(i < 20);
 
    console.log('Value of i after the do-while statement: ' + i);
```

for:
```javascript
    for (var i = 0; i <= 10; i++) {
       console.log('i = ' + i);
    }
    for (var i = 1, j = 1; i <= 10; i++, j+=2) {
        console.log('i = ' + i + ' j = ' + j);
    }
```

for-in:
```javascript
    var michel = {              // michel is an object
        familyName:'Buffa',     // familyName, givenName, age
                                // are its properties
        givenName: 'Michel',
        age: 51
    }
 
    for(var property in michel) {   // the for-in will
                                    // enumerate properties
        console.log(property);      // will print "familyName",
                                    // "givenName",
                                    // "age"
        console.log(michel[property]);  // michel['givenName'] same 
                                        // as michel.givenName
    }
```

## OTHER STATEMENTS
continue:
    for(var i = 1, k = 0; i < 5; i++) {
        if (i === 3) {
            continue;
        }
 
        k += 2*i;
        console.log('k += ' + (2*i));
    }
    console.log('Final k value:' + k)

break:
    var tab = ['michel', 'john', 'donald', 'paul']; // johh at index = 1
 
    function isNameInTheArray(name, theArray) {
        console.log("Number of elements in the array : " + theArray.length);
        for(var i=0; i < theArray.length; i++) {
            console.log('comparing with element in the array at pos ' + i);
 
            if(theArray[i] === name) {
               console.log('the name ' + name +
                           ' is in the array at pos: ' + i);
               break;
            } else {
               console.log(name + ' is not at pos ' + i);
            }
        }
    }
 
    // Execute the function
    isNameInTheArray('john', tab);


## EVENT
    <body>

        <div>
            echo '<a href="index.php?id_user='.$data[$i]['id'].'" onclick="showConfirm()">Vymazať záznam</a>';
        </div>

        <script>
            function showConfirm(){
                var answer = confirm("Naozaj chcete vymazať daný záznam?");

                if(answer){
                    //vykonanie, ak používateľ potvrdí confirm okno - odkaz sa vykoná
                    return true;
                }else{
                    //vykonanie, ak používateľ zruší confirm okno - odkaz sa nevykoná
                    return false;
                }
            }
        </script>

    </body>


### KEY EVENTS
    keydown	    The event occurs when the user is pressing a key
    keyup	    The event occurs when the user releases a key
    keyCode	    Returns the Unicode character code of the key that triggered the onkeypress ,onkeydown or onkeyup event
    shiftKey	Returns whether the "shift" key was pressed when the key event was triggered
    ctrlKey	    Returns whether the "ctrl" key was pressed when the key event was triggered
    altKey	    Returns whether the "alt" key was pressed when the key event was triggered

    window.addEventListener('keydown', function(event) {
       if (event.keyCode === 37) {
         //left arrow was pressed
       }
    });


### MOUSE EVENT
    click	    The event occurs when the user clicks on an element (presses a button and releases it)
    dblclick	The event occurs when the user double-clicks on an element
    mousedown	The event occurs when the user presses a mouse button
    mouseup	    The event occurs when a user releases a mouse button over an element
    mousemove	The event occurs when the pointer is moving while it is over an element
    mouseenter	The event occurs when the pointer is moved onto an element
    mouseleave	The event occurs when the pointer is moved out of an element
    mouseover	The event occurs when the pointer is moved onto an element, or onto one of its children
    contextmenu	The event occurs when the user right-clicks on an element to open a context menu

    canvas.addEventListener('mousedown', function (evt) {
       // do something with the mousedown event
    });

MouseEvent properties
    button	            Returns which mouse button was pressed when the mouse event was triggered
    clientX and clientY	Returns the coordinates of the mouse pointer, relative to the element coordinate system that triggered the event
    pageX and pageY	    Returns the coordinates of the mouse pointer, relative to the document, when the mouse event was triggered
    screenX and screenY	Returns the coordinates of the mouse pointer, relative to the screen, when an event was triggered
    altKey, ctrlKey, shiftKey	Returns whether the "alt, ctrl and shift" key was pressed when an event was triggered
    detail	            Returns a number that indicates how many times the mouse was clicked


## Form and input fields events
    input	The event occurs when an element gets user input (e.g., a key is typed on an input field, a slider is moved, etc.)
    change	The event occurs when the content of a form element, the selection, or the checked state have changed (for <input>,     <select>, and <textarea>). A change event listener on a slider will generate an event when the drag/move ends, while input events will be useful to do something as the slider is being moved.
    focus	The event occurs when an element gets focus (e.g., the user clicks in an input field)
    blur	The event occurs when an element loses focus (e.g., the user clicks on another element)
    select	The event occurs after the user selects some text (for <input> and <textarea>)
    submit	The event occurs when a form is submitted


## LISTEN TO EVENTS
Method 1: declare an event handler in the HTML code
    <div id="someDiv" onclick="alert('clicked!')"> content of the div </div>
Method 2: attach an event handler to an HTML element in JavaScript
    document.getElementById('someDiv').onclick = function() {
       alert('clicked!');
    }
Method 3: register a callback to the event listener with the addEventListener method (preferred  method)
    document.getElementById('someDiv').addEventListener('click', function() {
       alert('clicked!');
    }, false);


## PRESMEROVANIE
…
if($result){
    echo '<p class="success">Položka bola úspešne uložená.</p>';
    ?>

    <script>
    window.location.href = "/MyProject Coding/5-Projekt2/index.php";
    </script>

    <?php
}else{
    echo '<p class="error">Pri ukladaní dát do databázy sa vyskytla chyba!</p>';
}
...


## GETELEMENT
<script>
    function showNumber(id){
        alert(id);
        //document.getElementById('numbers_'+id).style.display = 'block';
    }
</script>


## FUNCTIONS
Declaring a function:
    function sum(a, b) {
        var c = a + b;
        return c;
    }

Calling a function:
    var result = sum(1, 2);
    //result is equal to 3
    console.log(result)
    > 3

Functions with a variable number of parameters:
An array named "arguments" is created automatically in each function, it contains all the call parameters of the function:

    function f() {
       return arguments;
    }
    ...
    f();
    // returns []
    ...
    f( 1, 2, 3, 4, true, 'Michel Buffa');
    // returns [1, 2, 3, 4, true, "Michel Buffa"]

Example of the sum with a variable number of arguments:
    function newSum() {
        var i, res = 0;
        var numberOfParameters = arguments.length;
        for (i = 0; i < numberOfParameters; i++) {
           res += arguments[i];
        }
        return res;
    }
    ...
    >>> newSum(1, 1, 1);
    3
    >>> newSum(1, 2, 3, 4);
    10


## The Web Storage API (localStorage, sessionStorage)
With localStorage the data will remain until it is deleted, whereas with sessionStorage the data is erased when the tab/browser is closed.
localStorage is a simple key-value store, in which the keys and values are strings. There is only one store per domain. This functionality is exposed through the globally available localStorage object. The same applies to sessionStorage.

    // Using localStorage
        // store data
        localStorage.lastName = "Bunny";
        localStorage.firstName = "Bugs";
        localStorage.location = "Earth";
        // retrieve data
        var lastName = localStorage.lastName;
        var firstName = localStorage.firstName;
        var location = localStorage.location;

