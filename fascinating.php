<?php
require_once("includes/functions.php");

$res = "";
if (isset($_POST['result']) && isset($_POST['num']) && $_POST['num'] !== '') {
    $num = (int)$_POST['num'];
    $ans = fascinating($num);
    $res = $ans ? "$num is a Fascinating number." : "$num is not a Fascinating number.";
}

include("includes/header.php");
?>

<div class="showtop">
    <div class="showtop-header">
        <p>Fascinating Number</p>
        <span class="number-tag">Concat(N, 2N, 3N) = 1..9</span>
    </div>
    <div class="showtop-desc">
        A 3+ digit number is Fascinating if concatenating the number with its product of 2 and 3 results in a sequence containing all digits from 1 to 9 exactly once. For example, 192 → 192 384 576.
    </div>
</div>

<?php 
include("includes/input.php");
include("includes/footer.php"); 
?>
