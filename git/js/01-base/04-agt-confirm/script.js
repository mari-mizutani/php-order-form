/* becode/javascript
 *
 * /01-base/04-asv-confirm/script.js - 1.4: ASV avec confirmation
 *
 * coded by leny@BeCode
 * started at 26/10/2018
 */

// NOTE: don't focus on the existing code structure for now.
// You will have time to focus on it later.

(function() {

    // your code here
var result = false;  

    while(result == false){  
    let age = prompt ("Your age?");    
    let gender = prompt ("Your gender?");
    let town = prompt ("Your town?");
    let message = window.confirm ("Age:" + age + "\nGender:" + gender + "\nTown:" + town);

    if (message == true){
        alert('Thank you');
        result = true;
    }else{
        result = false;
    }
    } 
})();
