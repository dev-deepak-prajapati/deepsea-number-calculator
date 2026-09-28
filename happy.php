<?php
require_once("includes/functions.php");

$res = "";
if (isset($_POST['result']) && isset($_POST['num']) && $_POST['num'] !== '') {
    $num = (int)$_POST['num'];
    $ans = happy($num);
    $res = ($ans == 1) ? "$num is a Happy number." : "$num is not a Happy number.";
}

include("includes/header.php");
?>

<div class="showtop">
    <div class="showtop-header">
        <p>Happy Number</p>
        <span class="number-tag">Iterative Digit Squares → 1</span>
    </div>
    <div class="showtop-desc">
        A Happy number is a number which eventually reaches 1 when replaced by the sum of the square of each digit repeatedly. For example, 19 → 82 → 68 → 100 → 1.
    </div>
</div>

<?php 
include("includes/input.php");
include("includes/footer.php"); 
?>
