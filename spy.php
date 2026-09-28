<?php
require_once("includes/functions.php");

$res = "";
if (isset($_POST['result']) && isset($_POST['num']) && $_POST['num'] !== '') {
    $num = (int)$_POST['num'];
    $ans = spy($num);
    $res = $ans ? "$num is a Spy number." : "$num is not a Spy number.";
}

include("includes/header.php");
?>

<div class="showtop">
    <div class="showtop-header">
        <p>Spy Number</p>
        <span class="number-tag">Sum(Digits) = Prod(Digits)</span>
    </div>
    <div class="showtop-desc">
        A Spy number is a number where the sum of its digits equals the product of its digits. For example, 1124 → 1+1+2+4 = 8 and 1×1×2×4 = 8.
    </div>
</div>

<?php 
include("includes/input.php");
include("includes/footer.php"); 
?>
