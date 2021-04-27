/* becode/javascript
 *
 * /04-dates/05-get-spooky-fridays/script.js - 4.5: calcul des vendredi 13
 *
 * coded by leny@BeCode
 * started at 26/10/2018
 */

// NOTE: don't focus on the existing code structure for now.
// You will have time to focus on it later.

(function() {

    // your code here
    //document.getElementById("year").addEventListener("click", function()
    
    
    // not completed yet. still working on!!
    function numberOfFridaythe13thsIn(jahr) 
    {
        var counter = 0;
        for (i = 1; i <= 12; i++) {
            var d = new Date(i + "/13/" + jahr);                          
            if (d.getDay() == 5) {
                counter++;
            }
        }
        return counter;

    }
})();
