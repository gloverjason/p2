
<?php

// on submit do below

// variables from form for
    // bill split
    // total cost

// if/else for each  tip amount
    // assign to variable

// calculate (total cost / split ways) * (1 + tip amount)

// if else for rounding
/*if (isset($_GET['totalCost'])) {
    $totalCost = $_GET['totalCost'];
} /*else {
    $totalCost = 0;
}*/
// If the form does not have empty values
if (!empty($_GET['splitWays']) && !empty($_GET['splitWays'])) {
    // Do the following
    $totalCost = $_GET['totalCost'];
    $splitWays = $_GET['splitWays'];
    $costPerPerson = $totalCost / $splitWays;
} else {
    $costPerPerson = 'Make sure to fill out all options';
}


//$costPerPerson = $totalCost / $splitWays;



