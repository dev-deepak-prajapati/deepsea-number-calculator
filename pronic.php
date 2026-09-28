<?php
require_once("includes/functions.php");

$res = "";
if (isset($_POST['result']) && isset($_POST['num']) && $_POST['num'] !== '') {
    $num = (int)$_POST['num'];
    $ans = pronic($num);
    $res = $ans ? "$num is a Pronic number." : "$num is not a Pronic number.";
}

include("includes/header.php");
?>

<div class="showtop">
    <div class="showtop-header">
        <p>Pronic Number</p>
        <span class="number-tag">N = k &times; (k + 1)</span>
    </div>
    <div class="showtop-desc">
        A Pronic number (or oblong number) is a number which is the product of two consecutive integers, i.e., N = k(k + 1). For example, 12 = 3 × 4.
    </div>
</div>

<?php 
include("includes/input.php");
include("includes/footer.php"); 
?>
