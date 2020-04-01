# Fire AJAX Request on Regular Interval:
Use `setInterval()` when you want to send AJAX request at a particular interval every time and don’t want to depend on the previous request is completed or not.
But if you want to execute the AJAX when the previous one is completed then use the `setTimeout()` function.


## 1. Using setInterval()
**`Syntax: setInterval(function, milliseconds);`**

Example:
```javascript
    var doStuff = function () {
      // Do stuff
    };
    setInterval(doStuff, 1000);
```

## 2. Using setTimeout()
**`Syntax: setTimeout(function, milliseconds);`**

Example:
```javascript
    // A basic setTimeout loop, mimicking setInterval
    var doStuff = function () {
      // Do stuff
      setTimeout(doStuff, 1000);
    };
    setTimeout(doStuff, 1000);


    // If you want the first execution of the function to happen immediately,
    // you can change that to
    var doStuff = function () {
      // Do stuff
      setTimeout(doStuff, 1000);
    };
    doStuff();


    // ... or, which is the cooler way, use an immediately executed function:
    (function doStuff() {
      // Do stuff
      setTimeout(doStuff, 1000);
    }());
```
