<?php
require_once("includes/functions.php");

$res = "";
if (isset($_POST['result']) && isset($_POST['num']) && $_POST['num'] !== '') {
    $num = (int)$_POST['num'];
    $ans = strong($num);
    $res = ($ans == $num && $num > 0) ? "$num is a Strong number." : "$num is not a Strong number.";
}

include("includes/header.php");
?>

<div class="showtop">
    <div class="showtop-header">
        <p>Strong Number</p>
        <span class="number-tag">Sum(d<sub>i</sub>!) = N</span>
    </div>
    <div class="showtop-desc">
        A Strong number (or Factorion) is a special number whose sum of the factorial of its digits equals the number itself. For example, 145 = 1! + 4! + 5! = 1 + 24 + 120.
    </div>
</div>

<?php 
include("includes/input.php");
include("includes/footer.php"); 
?>
