/* becode/javascript
 *
 * /04-dates/03-age-by-select/script.js - 4.3: calculateur d'âge
 *
 * coded by leny@BeCode
 * started at 26/10/2018
 */

// NOTE: don't focus on the existing code structure for now.
// You will have time to focus on it later.

(function() {

    // your code here
    document.getElementById("run").addEventListener("click", function()
    {
        var birth_day = document.getElementById("dob-day").value;
        var birth_month = document.getElementById("dob-month").value;
        var birth_year = document.getElementById("dob-year").value;   

        var dob = new Date(birth_year,birth_month,birth_day);
        
        //calculate month difference from current date in time
        var month_diff = Date.now() - dob.getTime();
        
        //convert the calculated difference in date format
        var age_dt = new Date(month_diff); 
        
        //extract year from date    
        var year = age_dt.getFullYear();
        
        //now calculate the age of the user
        var age = Math.abs(year - 1970);
        

        //display the calculated age
        alert("Age is " + age + " years. ");
           
    })


})();
