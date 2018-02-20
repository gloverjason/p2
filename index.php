<?php
require 'helpers.php';
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
        <input type='number' name='splitWays' value='<?=sanitize($splitWays)?>' />
    </label>
    <br/><br/>
    <label>What was the total cost of your meal? &nbsp
        <input type='number' name='totalCost' value='<?=sanitize($totalCost)?>' />
    </label>
    <br/><br/>
    <label>How was the service? &nbsp
        <select name='service' selected='<?=sanitize($service)?>' >
            <option value='choose' selected='selected'>Select One</option>
            <option value='horrible'<?php if ($service =='horrible') echo 'selected'?>>Horrible (no tip)</option>
            <option value='bad'<?php if ($service =='bad') echo 'selected'?>>Bad (5%)</option>
            <option value='fair'<?php if ($service =='fair') echo 'selected'?>>Average (15%)</option>
            <option value='good'<?php if ($service =='good') echo 'selected'?>>Good (20%)</option>
            <option value='excellent'<?php if ($service =='excellent') echo 'selected'?>>Excellent (25%)</option>
        </select>
     </label>
     <br/><br/>
     <label>Round up?
        <input type='checkbox' name='roundUp' value='1' <?=($roundUp) ? 'checked' : ''?> />
            &nbsp <span id='checkboxYes'>Yes</span>
     </label>
     <br/><br/><br/>
     <input type='submit' value='Calculate' name='calculate' id='submit'>
     <br/><br/>
</form>
</div>
<?php
echo "<p> Cost per person = $displayCostPerPerson</p>"

?>



<footer>

</footer>

</body>


</html>