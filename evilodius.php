<?php
require_once("includes/functions.php");

$res = "";
if (isset($_POST['result']) && isset($_POST['num']) && $_POST['num'] !== '') {
    $num = (int)$_POST['num'];
    $ans = evilOdious($num);
    $res = $ans ? "$num is an Evil number." : "$num is an Odious number.";
}

include("includes/header.php");
?>

<div class="showtop">
    <div class="showtop-header">
        <p>Evil-Odious Number</p>
        <span class="number-tag">Binary 1s Parity</span>
    </div>
    <div class="showtop-desc">
        A number is Evil if its binary representation contains an EVEN number of 1s (e.g. 3 = 11₂). It is Odious if its binary representation contains an ODD number of 1s (e.g. 7 = 111₂).
    </div>
</div>

<?php 
include("includes/input.php");
include("includes/footer.php"); 
?>
