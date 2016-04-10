/********************************
 * Name: Suyash Lakhotia         *
 * Matric No.: U1423096J         *
 * Lab Group: TS1                *
 ********************************/

// Validate the 'Name' field.
function validName() {
    var nameValue = document.getElementById('name').value;

    // Check if the entered value is blank or contains any digit:
    if (nameValue == "" || nameValue.search(/[0-9]/) != -1) {
        alert("Please enter a valid name.");
        document.getElementById('name').focus();
        document.getElementById('name').select();
        return false;
    } else {
        return true;
    }
}

// Validate the 'Apples', 'Oranges' & 'Bananas' fields.
function validNum() {
    var applesValue = document.getElementById('apples').value;
    var orangesValue = document.getElementById('oranges').value;
    var bananasValue = document.getElementById('bananas').value;
    var flag = false;

    // Check if the entered value blank, null or not a number.
    if (isNaN(applesValue) || applesValue == "" || applesValue == null) {
        flag = "apples";
        alertUser(flag);
    }

    // Check if the entered value blank, null or not a number.
    if (isNaN(orangesValue) || orangesValue == "" || orangesValue == null) {
        flag = "oranges";
        alertUser(flag);
    }

    // Check if the entered value blank, null or not a number.
    if (isNaN(bananasValue) || bananasValue == "" || bananasValue == null) {
        flag = "bananas";
        alertUser(flag);
    }

    // Check if any of the three fields were invalid.
    if (flag) {
        return false;
    } else {
        var total = (applesValue * 0.69) + (orangesValue * 0.59) + (bananasValue * 0.39);
        total = total.toFixed(2); // round to two decimal places
        document.getElementById('totalCost').value = total;
        return true;
    }
}

// Alert the user if any of the numeric fields are invalid.
function alertUser(field) {
    alert("The number of " + field + " is invalid.");
    document.getElementById(field).focus();
    document.getElementById(field).select();
    document.getElementById('totalCost').value = "NaN"; // set totalCost to "NaN"
}

// Validate the 'Payment' field.
function validPay() {
    // Check at least one radio button is selected.
    if (document.getElementById("visa").checked || document.getElementById("mastercard").checked || document.getElementById("discover").checked) {
        return true;
    } else {
        alert("Please check one payment method.")
        return false;
    }
}