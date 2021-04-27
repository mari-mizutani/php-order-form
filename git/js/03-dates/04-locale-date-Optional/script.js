/* becode/javascript
 *
 * /04-dates/04-locale-date/script.js - 4.4: date textuelle
 *
 * coded by leny@BeCode
 * started at 26/10/2018
 */

// NOTE: don't focus on the existing code structure for now.
// You will have time to focus on it later.

(function() {

    // to change the content of a tag: document.getElementById("element-id").innerHTML = "new-value"

    // your code here

    var d = new Date();   
    var day = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    var date = d.getDate();
    var month =["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var year = d.getFullYear();  
    var hour = d.getHours();
    var min = d.getMinutes();
    
    document.getElementById("target").innerHTML = day[d.getDay()] + " " + date + " " + month[d.getMonth()] + " " + year + " " + hour + "h" + min;


})();
