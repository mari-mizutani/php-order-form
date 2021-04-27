/* becode/javascript
 *
 * /05-arrays/02-manipulate-array/script.js - 5.2: manipulation de tableau
 *
 * coded by leny@BeCode
 * started at 26/10/2018
 */

// NOTE: don't focus on the existing code structure for now.
// You will have time to focus on it later.

(function() {

    var fruits = [
        "pomme",
        "poire",
        "fraise",
        "tomate",
        "orange",
        "mandarine",
        "durian",
        "pêche",
        "raisin",
        "cerise",
    ];

    // your code here
    fruits.shift();  // Removes the first element from an array and returns only that element.
    fruits.pop();    // Removes the last element from an array and returns only that element. 

    fruits.unshift("banana");//Add new items to the beginning of an array
    fruits.push("kiwi");//Adds new elements to the end of an array, and returns the new length
    console.log(fruits);

})();
