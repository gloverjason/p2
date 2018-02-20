
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


/*if (isset($_GET['splitWays'])) {
    $splitWays = $_GET['splitWays'];
} else {
    $splitWays = '';
} */
// This method allows index to access variables on page load
$splitWays = isset($_GET['splitWays']) ? $_GET['splitWays'] : '';
$totalCost = isset($_GET['totalCost']) ? $_GET['totalCost'] : '';
$service = isset($_GET['service']) ? $_GET['service'] : '';

// true/false since checkbox
$roundUp = isset($_GET['roundUp']) ? true: false;

// If the form does not have empty values
if (!empty($_GET['splitWays']) && !empty($_GET['totalCost'])) {
    // Do the following
    $totalCost = $_GET['totalCost'];
    $splitWays = $_GET['splitWays'];
    $service = $_GET['service'];


    if ($service) {
        if ($service == 'choose') {
            $costPerPerson = 'Make sure to fill out all options';
        } else if ($service == 'horrible') {
            $tipPercent = 0.00;
        } else if ($service == 'bad') {
            $tipPercent = 0.05;
        } else if ($service == 'fair') {
            $tipPercent = 0.10;
        } else if ($service == 'average') {
            $tipPercent = 0.15;
        } else if ($service == 'good') {
            $tipPercent = 0.20;
        } else if ($service == 'excellent') {
            $tipPercent = 0.25;
        }
    }

    if (isset($_GET['roundUp'])) {
        $costPerPerson = ceil($totalCost / $splitWays * (1 + $tipPercent));
    } else {
        $costPerPerson = $totalCost / $splitWays * (1 + $tipPercent);
    }

} else {
    $costPerPerson = 'Make sure to fill out all options';
}


$displayCostPerPerson = $costPerPerson;



