<?php
require_once("includes/functions.php");

$res = "";
if (isset($_POST['result']) && isset($_POST['num']) && $_POST['num'] !== '') {
    $num = (int)$_POST['num'];
    $ans = automorphic($num);
    $res = ($ans == $num) ? "$num is an Automorphic number." : "$num is not an Automorphic number.";
}

include("includes/header.php");
?>

<div class="showtop">
    <div class="showtop-header">
        <p>Automorphic Number</p>
        <span class="number-tag">N<sup>2</sup> ends in N</span>
    </div>
    <div class="showtop-desc">
        An Automorphic number is a number whose square ends in the same digits as the number itself. For example, 25² = 625 (ends in 25).
    </div>
</div>

<?php 
include("includes/input.php");
include("includes/footer.php"); 
?>
