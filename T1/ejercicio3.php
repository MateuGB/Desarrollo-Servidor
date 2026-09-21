<?php
$num1 = 3;
$num2 = 5;
$num3 = 8;
$num1 *= 4;                                        // $num1 = 3 * 4 = 12
echo $num1, "<br>";                                // 12
echo $num1 <= $num2, "<br>";                       // 12 <= 5 → false → (nada)
echo $num3 > $num1 and $num3 > $num2; echo "<br>"; // false and true → false → (nada)
echo $num3 > $num1 or $num3 > $num2; echo "<br>";  // false or true → true → 1
echo $num1 > $num2 xor $num1 > $num3; echo "<br>"; // true xor true → false → (nada)
$num3--;                                           // $num3 = 7
echo $num3, "<br>";                                // 7
$num3 += $num1;                                    // 7 + 12 = 19
echo $num3, "<br>";                                // 19
?>