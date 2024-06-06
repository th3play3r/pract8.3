<!DOCTYPE html>
<html>
<head>
    <title>Результати розрахунків</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Результати розрахунків</h2>
    <?php
    // Отримуємо значення змінних $c та $d з форми методом POST
    $c = isset($_POST['c']) ? (int)$_POST['c'] : 0;
    $d = isset($_POST['d']) ? (int)$_POST['d'] : 0;

    // Виконуємо математичні операції
    $sum = $c + $d;
    $product = $c * $d;
    $difference = $c - $d;
    $quotient = $d != 0 ? $c / $d : "Ділення на нуль";

    // Виводимо результати
    echo "Сума: " . $sum . "<br>";
    echo "Добуток: " . $product . "<br>";
    echo "Різниця: " . $difference . "<br>";
    echo "Частка: " . $quotient . "<br>";
    ?>
</body>
</html>