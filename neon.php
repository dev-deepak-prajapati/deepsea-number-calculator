<?php
require_once("includes/functions.php");

$res = "";
if (isset($_POST['result']) && isset($_POST['num']) && $_POST['num'] !== '') {
    $num = (int)$_POST['num'];
    $ans = neon($num);
    $res = ($ans == $num) ? "$num is a Neon number." : "$num is not a Neon number.";
}

include("includes/header.php");
?>

<div class="showtop">
    <div class="showtop-header">
        <p>Neon Number</p>
        <span class="number-tag">Sum(Digits(N<sup>2</sup>)) = N</span>
    </div>
    <div class="showtop-desc">
        A Neon number is a number where the sum of digits of the square of the number is equal to the number itself. For example, 9² = 81 and 8 + 1 = 9.
    </div>
</div>

<?php 
include("includes/input.php");
include("includes/footer.php"); 
?>
