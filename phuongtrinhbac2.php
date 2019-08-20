<h1 style="color: green">Giải phương trình bậc 2</h1>
<form method="post">
    <input type="number" name="a">x^2+
    <input type="number" name="b">x+
    <input type="number" name="c">
    <input type="submit" value="Calculator">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST['a'];
    $number2 = $_POST['b'];
    $number3 = $_POST['c'];
    $delta = pow($number2, 2) - (4 * $number1 * $number3);
    if ($number1 != 0) {
        if ($delta > 0) {
            $result1 = (-$number2 - sqrt($delta)) / (2 * $number1);
            $result2 = (-$number2 + sqrt($delta)) / (2 * $number1);
            echo "Phương trình có 2 nghiệm x1 = $result1 and x2 =$result2";
        }
        if ($delta < 0) {
            echo "phương trình vô nghiệm";
        } else {
            $result = -$number2 / (2 * $number1);
            echo "Nghiệm kép x1 = x2 = " . $result;
        }
    } else if ($number1 == 0 && $number2 == 0 && $number3 == 0) {
        echo "Phương trình có vô số nghiệm";
    } else if ($number1 == 0 && $number2 == 0){
        echo "Phương trình sai";
    }
    else {
        $result = -$number3 / $number2;
        echo "Nghiệm của phương trình là: $result";
    }
}
