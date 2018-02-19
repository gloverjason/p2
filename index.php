<?php
require 'p2_logic.php';
?>


<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" />
    <title>The Ultimate Bill Splitter</title>
    <link rel='stylesheet' href='css/p2_styles.css' />
</head>

<body>
<div id='formbox'>
<h1>The Ultimate Bill Splitter</h1><br/>
<form method="GET" action="index.php">
    <label>How many ways would you like to split the bill? &nbsp
        <input type='number' name='splitWays' value='' />
    </label>
    <br/><br/>
    <label>What was the total cost of your meal? &nbsp
        <input type='number' name='totalCost' value='' />
    </label>
    <br/><br/>
    <label>How was the service? &nbsp
        <select>
            <option>Horrible (no tip)</option>
            <option>Bad (5%)</option>
            <option>Fair (10%)</option>
            <option selected='selected'>Average (15%)</option>
            <option>Good (20%)</option>
            <option>Excellent (25%)</option>
        </select>
     <label/>
     <br/><br/>
     <label>Round up?
        <input type='checkbox' name='' value='Yes' />
            &nbsp <span id='checkboxYes'>Yes</span>
     </label>
     <br/><br/><br/>
     <input type='submit' value='Calculate' name='calculate' id='submit'>
</form>
</div>
<?php
echo "<p> Cost per person = $costPerPerson</p>"

?>



<footer>

</footer>

</body>


</html>