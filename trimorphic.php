<?php
require_once("includes/functions.php");

$res = "";
if (isset($_POST['result']) && isset($_POST['num']) && $_POST['num'] !== '') {
    $num = (int)$_POST['num'];
    $ans = trimorphic($num);
    $res = ($ans == $num) ? "$num is a Trimorphic number." : "$num is not a Trimorphic number.";
}

include("includes/header.php");
?>

<div class="showtop">
    <div class="showtop-header">
        <p>Trimorphic Number</p>
        <span class="number-tag">N<sup>3</sup> ends in N</span>
    </div>
    <div class="showtop-desc">
        A Trimorphic number is a number whose cube ends in the same digits as the number itself. For example, 24³ = 13,824 (ends in 24).
    </div>
</div>

<?php 
include("includes/input.php");
include("includes/footer.php"); 
?>
