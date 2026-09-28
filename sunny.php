<?php
require_once("includes/functions.php");

$res = "";
if (isset($_POST['result']) && isset($_POST['num']) && $_POST['num'] !== '') {
    $num = (int)$_POST['num'];
    $ans = sunny($num);
    $res = $ans ? "$num is a Sunny number." : "$num is not a Sunny number.";
}

include("includes/header.php");
?>

<div class="showtop">
    <div class="showtop-header">
        <p>Sunny Number</p>
        <span class="number-tag">N + 1 = k<sup>2</sup></span>
    </div>
    <div class="showtop-desc">
        A Sunny number is a number where N + 1 is a perfect square. For example, 8 is a sunny number because 8 + 1 = 9, which is 3².
    </div>
</div>

<?php 
include("includes/input.php");
include("includes/footer.php"); 
?>
