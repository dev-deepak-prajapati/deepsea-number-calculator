<?php
require_once("includes/functions.php");

$res = "";
if (isset($_POST['result']) && isset($_POST['num']) && $_POST['num'] !== '') {
    $num = (int)$_POST['num'];
    $ans = armstrong($num);
    $res = ($ans == $num) ? "$num is an Armstrong number." : "$num is not an Armstrong number.";
}

include("includes/header.php");
?>

<div class="showtop">
    <div class="showtop-header">
        <p>Armstrong Number</p>
        <span class="number-tag">Sum(Digits<sup>len</sup>) = N</span>
    </div>
    <div class="showtop-desc">
        An Armstrong number (or Narcissistic number) is a number that is the sum of its own digits each raised to the power of the number of digits. For example, 153 = 1³ + 5³ + 3³.
    </div>
</div>

<?php 
include("includes/input.php");
include("includes/footer.php"); 
?>