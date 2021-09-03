# Title: Order form

## The Mission
You need to make a form for a webshop, and add validation to the form.
The customer can order various sandwiches, and then both the restaurant owner and the customer receive an e-mail with the details of the order.

You will add a counter at the bottom of the page that shows the total amount of money that has been spent on this page for this user.
This counter should keep going up even when the user closes his browser.

You can start modifying index.php and form-view.php, they already contain some code to help you on your way.
## Required features
### Step 1: Validation
- Validate that the field e-mail is filled in and a valid e-mail address
- Make sure that the street, street number, city and zipcode is a required field.
- Make sure that street number and zipcode are only numbers.
- After sending the form, when you have errors show them in a nice error box above the form, you can use the [bootstrap alerts](https://getbootstrap.com/docs/4.0/components/alerts/) for inspiration.
    - You do not need to show each error with it's matching field, showing all errors on top of the form is enough for now. You can always come back it later and make it nicer.
- If the form is invalid make sure all the values the user entered are still displayed in the form, so he doesn't need to fill them all in again!
- If the form is valid (for now) just show the user a message above the form that his order has been sent

### Step 2: Make sure the address is saved
Save all the address information as long as the user doesn't close the browser. When he closes the browser it is oké to lose his information.

Prefill the address fields with the saved address.
Should you use a COOKIE or a SESSION variable for this?

### Step 3: Switch between drinks and food
There are 2 different $product arrays, one with drinks, the other with food. Depending on which link at the top of the page you click, you should be able to order food or drinks (never both).
The food items should be the default.

### Step 4: Calculate the delivery time
Calculate the expected delivery time for the product. For normal delivery all orders are fulfilled in 2 hours, for express delivery it is only 45 minutes.
Add this expected time to the confirmation message.
If you are wondering: they deliver with drones.

### Step 5: Total revenue counter
Add a counter at the bottom of the page that shows the total amount of money that has been spent on this page from this browser. 
Should you use a COOKIE or a SESSION variable for this?

### Step 6: Send the e-mail
Use the `mail()` function in PHP to send an e-mail with a summary of the order.
The e-mail should contain all information filled in by the user + the total price of all ordered items.
Display the expected delivery time.
Make sure to not forget the extra cost for express delivery!
Sent this e-mail to the user + [a predefined](https://www.php.net/define) e-mail of the restaurant owner.



### Need to be done these 2 steps. (May 27 2021)

- Step 5: Total revenue counter
- Step 6: Send the e-mail