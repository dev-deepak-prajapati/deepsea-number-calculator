<?php
/**
 * DeepSeaWorlds - Number Property Calculator Suite
 * Centralized Mathematical Logic Functions
 * Designed by Antigravity
 */

// 1. Armstrong Number: Sum of each digit raised to the power of total digits equals the number itself.
function armstrong($num) {
    $temp = abs((int)$num);
    $sum = 0;
    $len = strlen((string)$temp);
    while ($temp > 0) {
        $rem = $temp % 10;
        $sum += (int)pow($rem, $len);
        $temp = (int)($temp / 10);
    }
    return $sum;
}

// 2. Automorphic Number: A number whose square ends in the same digits as the number itself.
function automorphic($num) {
    $temp = abs((int)$num);
    $square = $temp * $temp;
    $len = strlen((string)$temp);
    $lastDigits = $square % (int)pow(10, $len);
    return $lastDigits;
}

// 3. Disarium Number: Sum of digits powered with their respective 1-based positions from left to right equals the number.
function disarium($num) {
    $temp = abs((int)$num);
    $str = (string)$temp;
    $len = strlen($str);
    $sum = 0;
    for ($i = 0; $i < $len; $i++) {
        $digit = (int)$str[$i];
        $sum += (int)pow($digit, $i + 1);
    }
    return $sum;
}

// 4. Evil-Odious Number: Evil if its binary form contains an EVEN number of 1s; Odious if ODD.
function evilOdious($num) {
    $temp = abs((int)$num);
    $count = 0;
    while ($temp > 0) {
        if ($temp % 2 == 1) {
            $count++;
        }
        $temp = (int)($temp / 2);
    }
    return ($count % 2 == 0);
}

// 5. Fascinating Number: Concatenation of (num, num*2, num*3) contains digits 1-9 exactly once. (Min 3 digits).
function fascinating($num) {
    $temp = abs((int)$num);
    if (strlen((string)$temp) < 3) {
        return false;
    }
    $concat = $temp . ($temp * 2) . ($temp * 3);
    if (strlen($concat) != 9) {
        return false;
    }
    for ($i = 1; $i <= 9; $i++) {
        if (substr_count($concat, (string)$i) != 1) {
            return false;
        }
    }
    return true;
}

// 6. Happy Number: Repeatedly replacing the number by the sum of square of digits leads to 1.
function happy($num) {
    $temp = abs((int)$num);
    if ($temp <= 0) {
        return 0;
    }
    while ($temp != 1 && $temp != 4) {
        $sum = 0;
        while ($temp > 0) {
            $rem = $temp % 10;
            $sum += $rem * $rem;
            $temp = (int)($temp / 10);
        }
        $temp = $sum;
    }
    return $temp;
}

// 7. Neon Number: Sum of digits of square of the number equals the number.
function neon($num) {
    $temp = abs((int)$num);
    $square = $temp * $temp;
    $sum = 0;
    while ($square > 0) {
        $sum += $square % 10;
        $square = (int)($square / 10);
    }
    return $sum;
}

// 8. Perfect Number: Sum of proper positive divisors equals the number.
function perfect($num) {
    $temp = (int)$num;
    if ($temp <= 1) {
        return 0;
    }
    $sum = 0;
    for ($i = 1; $i <= $temp / 2; $i++) {
        if ($temp % $i == 0) {
            $sum += $i;
        }
    }
    return $sum;
}

// 9. Pronic Number: Product of two consecutive integers (k * (k+1) = num).
function pronic($num) {
    $temp = (int)$num;
    if ($temp < 0) {
        return false;
    }
    for ($i = 0; $i * ($i + 1) <= $temp; $i++) {
        if ($i * ($i + 1) == $temp) {
            return true;
        }
    }
    return false;
}

// 10. Spy Number: Sum of digits equals the product of digits.
function spy($num) {
    $temp = abs((int)$num);
    $sum = 0;
    $product = 1;
    while ($temp > 0) {
        $rem = $temp % 10;
        $sum += $rem;
        $product *= $rem;
        $temp = (int)($temp / 10);
    }
    return ($sum == $product);
}

// Helper function: Factorial calculation
function factorial($n) {
    $fact = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fact *= $i;
    }
    return $fact;
}

// 11. Strong Number: Sum of factorials of digits equals the number.
function strong($num) {
    $temp = abs((int)$num);
    if ($temp == 0) {
        return 0;
    }
    $sum = 0;
    while ($temp > 0) {
        $rem = $temp % 10;
        $sum += factorial($rem);
        $temp = (int)($temp / 10);
    }
    return $sum;
}

// 12. Sunny Number: num + 1 is a perfect square.
function sunny($num) {
    $temp = (int)$num;
    if ($temp < -1) {
        return false;
    }
    $sqrt = (int)sqrt($temp + 1);
    return ($sqrt * $sqrt == $temp + 1);
}

// 13. Trimorphic Number: Cube of number ends with the number itself.
function trimorphic($num) {
    $temp = abs((int)$num);
    $cube = $temp * $temp * $temp;
    $len = strlen((string)$temp);
    return $cube % (int)pow(10, $len);
}
?>
