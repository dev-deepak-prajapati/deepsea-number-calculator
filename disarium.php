<?php
require_once("includes/functions.php");

$res = "";
if (isset($_POST['result']) && isset($_POST['num']) && $_POST['num'] !== '') {
    $num = (int)$_POST['num'];
    $ans = disarium($num);
    $res = ($ans == $num) ? "$num is a Disarium number." : "$num is not a Disarium number.";
}

include("includes/header.php");
?>

<div class="showtop">
    <div class="showtop-header">
        <p>Disarium Number</p>
        <span class="number-tag">Sum(d<sub>i</sub><sup>i</sup>) = N</span>
    </div>
    <div class="showtop-desc">
        A Disarium number is a number in which the sum of its digits powered with their respective positions (1-indexed from left to right) equals the number itself. For example, 175 = 1¹ + 7² + 5³.
    </div>
</div>

<?php 
include("includes/input.php");
include("includes/footer.php"); 
?>
