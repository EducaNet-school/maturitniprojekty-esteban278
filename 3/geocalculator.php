<?php
class Calculator {
    public function calculate() {
        $shape = isset($_POST['geometricShape']) ? $_POST['geometricShape'] : NULL;
        $calculation = isset($_POST['calculationType']) ? $_POST['calculationType'] : NULL;

        switch($shape) {
            case 'triangle':
                if ($calculation == "area") {
                    $triangleForm = "<h3>Obsah trojúhelníku</h3><br>
                    <form method='POST'>
                    <input type='hidden' name='geometricShape' value='triangle'>
                    <input type='hidden' name='calculationType' value='area'>
                    <table>
                        <tr><td>Délka: <input type='text' name='base'></td></tr>
                        <tr><td>Výška: <input type='text' name='height'></td></tr>
                        <tr><td><input type='submit' value='calculate'></td></tr>
                    </table>
                    </form>";

                    $base = isset($_POST['base']) ? $_POST['base'] : NULL;
                    $height = isset($_POST['height']) ? $_POST['height'] : NULL;

                    echo $triangleForm;
                    $result = ($base * $height)/2;
                    echo $result;
                } elseif ($calculation == "circumference") {
                    $triangleCircumferenceForm = "<h3>Obvod trojúhelníku</h3><br>
                    <form method='POST'>
                    <input type='hidden' name='geometricShape' value='triangle'>
                    <input type='hidden' name='calculationType' value='circumference'>
                    <table>
                        <tr><td>a: <input type='text' name='sideA'></td></tr>
                        <tr><td>b: <input type='text' name='sideB'></td></tr>
                        <tr><td>c: <input type='text' name='sideC'></td></tr>
                        <tr><td><input type='submit' value='calculate'></td></tr>
                    </table>
                    </form>";
                    $sideA = isset($_POST['sideA']) ? $_POST['sideA'] : NULL;
                    $sideB = isset($_POST['sideB']) ? $_POST['sideB'] : NULL;
                    $sideC = isset($_POST['sideC']) ? $_POST['sideC'] : NULL;
                    echo $triangleCircumferenceForm;
                    $circumference = $sideA + $sideB + $sideC;
                    echo $circumference;
                }
                break;

            case 'rectangle':
                if ($calculation == "area") {
                    $rectangleForm = "<h3>Obsah obdelníku</h3><br>
                    <form method='POST'>
                    <input type='hidden' name='geometricShape' value='rectangle'>
                    <input type='hidden' name='calculationType' value='area'>
                    <table>
                        <tr><td>Délka: <input type='text' name='base'></td></tr>
                        <tr><td>Výška: <input type='text' name='height'></td></tr>
                        <tr><td><input type='submit' value='calculate'></td></tr>
                    </table>
                    </form>";

                    $base = isset($_POST['base']) ? $_POST['base'] : NULL;
                    $height = isset($_POST['height']) ? $_POST['height'] : NULL;

                    echo $rectangleForm;
                    $result = ($base * $height);
                    echo $result;
                } elseif ($calculation == "circumference") {
                    $rectangleForm = "<h3>Obvod obdelníku</h3><br>
                    <form method='POST'>
                    <input type='hidden' name='geometricShape' value='rectangle'>
                    <input type='hidden' name='calculationType' value='circumference'>
                    <table>
                        <tr><td>Délka: <input type='text' name='base'></td></tr>
                        <tr><td>Výška: <input type='text' name='height'></td></tr>
                        <tr><td><input type='submit' value='calculate'></td></tr>
                    </table>
                    </form>";
                                    $base = isset($_POST['base']) ? $_POST['base'] : NULL;
                $height = isset($_POST['height']) ? $_POST['height'] : NULL;

                echo $rectangleForm;
                $result = (2 * $base) + (2 * $height);
                echo $result;
            }
            break;
        case 'square':
            if ($calculation == "area") {
                $squareForm = "<h3>Obsah čtverce</h3><br>
                <form method='POST'>
                <input type='hidden' name='geometricShape' value='square'>
                <input type='hidden' name='calculationType' value='area'>
                <table>
                    <tr><td>Zadejte stranu čtverce: <input type='text' name='side'></td></tr>
                    <tr><td><input type='submit' value='calculate'></td></tr>
                </table>
                </form>";

                $side = isset($_POST['side']) ? $_POST['side'] : NULL;

                echo $squareForm;
                $result = ($side * $side);
                echo $result;
            } elseif ($calculation == "circumference") {
                $squareForm = "<h3>Obvod čtverce</h3><br>
                <form method='POST'>
                <input type='hidden' name='geometricShape' value='square'>
                <input type='hidden' name='calculationType' value='circumference'>
                <table>
                    <tr><td>Zadejte stranu čtverce: <input type='text' name='side'></td></tr>
                    <tr><td><input type='submit' value='calculate'></td></tr>
                </table>
                </form>";
                $side = isset($_POST['side']) ? $_POST['side'] : NULL;
                echo $squareForm;
                $result = 4*$side;
                echo $result;
            }
            break;
    }
}
}

$calculator = new Calculator();
$calculator->calculate();



?>
<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<form method="POST">
    <h3>Geometrická Kalkulačka</h3>
    <select name="geometricShape">
        <option value="na"></option>
        <option value="triangle">Trojúhelník</option>
        <option value="rectangle">Obdelník</option>
        <option value="square">Čtverec</option>
    </select>
    <select name="calculationType">
        <option value="na"></option>
        <option value="area">Obsah</option>
        <option value="circumference">Obvod</option>
    </select>
    <input type="submit" value="Submit">
</form>
</body>
</html>