<?php
require_once("includes/functions.php");

$res = "";
if (isset($_POST['result']) && isset($_POST['num']) && $_POST['num'] !== '') {
    $num = (int)$_POST['num'];
    $ans = perfect($num);
    $res = ($ans == $num && $num > 0) ? "$num is a Perfect number." : "$num is not a Perfect number.";
}

include("includes/header.php");
?>

<div class="showtop">
    <div class="showtop-header">
        <p>Perfect Number</p>
        <span class="number-tag">Sum(Divisors) = N</span>
    </div>
    <div class="showtop-desc">
        A Perfect Number is a positive integer that is equal to the sum of its positive proper divisors (excluding the number itself). For example, 6 = 1 + 2 + 3.
    </div>
</div>

<?php 
include("includes/input.php");
include("includes/footer.php"); 
?>