<?php
/* Jason Glover; Project 2; Spring 2018 */

require('Form.php');

use DWA\Form;

// Create new object from class
$form = new Form($_GET);

// Get data from form for use with class (Form class, replaces 4 commented lines several lines below);
$splitWays = $form->get('splitWays', '');
$totalCost = $form->get('totalCost', '');
$service = $form->get('service', '');
$roundUp = $form->has('roundUp');

// This if/else alternate syntax allows index.php to access variables on page load
// Commented out because Form class used instead
//$splitWays = isset($_GET['splitWays']) ? $_GET['splitWays'] : '';
//$totalCost = isset($_GET['totalCost']) ? $_GET['totalCost'] : '';
//$service = isset($_GET['service']) ? $_GET['service'] : '';
//$roundUp = isset($_GET['roundUp']) ? true: false;

// If form submission occurs, validate using form class; errors returned as an array;
if ($form->isSubmitted()) {
    $errors = $form->validate(
        [
            'splitWays' => 'required|numeric',
            'totalCost' => 'required|numeric',
            'service' => 'required',
        ]
    );
}

// If the form is submitted and does not have errors
if ($form->isSubmitted() && !$form->hasErrors) {
    if ($service == 'horrible') {
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

    if (isset($_GET['roundUp'])) {
        $costPerPerson = ceil($totalCost / $splitWays * (1 + $tipPercent));
    } else {
        $cPerPerson = $totalCost / $splitWays * (1 + $tipPercent);

        $costPerPerson = round($cPerPerson, 2);
    }

    $displayCostPerPerson = $costPerPerson;
}



