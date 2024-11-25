<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"content="Лабораторная работа, Майборода">
    <meta name="author" content="Майборода Дмитрий">
    <meta name="description" content="Веб-сайт для лабораторных работ">
    <title>Лабораторная работа №3</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
 
    <?php 
        include 'header.php'   
    ?>
    
    <main>
        <section>
            <h2>Описание задач</h2>
            <p>1. Даны два ненулевых числа. Найти сумму, разность, произведение и частное их модулей.</p>
            <p>2. Дано трехзначное число. Найти сумму и произведение его цифр.</p>
        </section>
        <br>
        <section>
            <h2>Задача 1</h2>
            <p><?php
                // Ввод двух ненулевых чисел
                $number1 = 8; // Замените на ваше значение
                $number2 = -2; // Замените на ваше значение

                // Проверка на ненулевые значения
                if ($number1 == 0 || $number2 == 0) {
                    die("Числа не должны быть нулевыми.");
                }

                // Вычисление модулей
                $absNumber1 = abs($number1);
                $absNumber2 = abs($number2);

                // Вычисление суммы, разности, произведения и частного
                $sum = $absNumber1 + $absNumber2;
                $difference = $absNumber1 - $absNumber2;
                $product = $absNumber1 * $absNumber2;
                $quotient = $absNumber2 != 0 ? $absNumber1 / $absNumber2 : "Деление на ноль";

                // Вывод результатов
                echo "<p>Первое число: $number1, второе число: $number2</p>";
                echo "<p>Сумма модулей: $sum</p>";
                echo "<p>Разность модулей: $difference</p>";
                echo "<p>Произведение модулей: $product</p>";
                echo "<p>Частное модулей: $quotient</p>";
                ?>
            </p>
        </section>
        <br>
        <section>
            <h2>Задача 2</h2>
            <p><?php
                // Задаем трехзначное число
                $number = 456; // Измените это число на любое другое трехзначное

                // Проверяем, что число трехзначное
                if ($number < 100 || $number > 999) {
                    echo "Пожалуйста, введите трехзначное число.";
                } else {
                    // Находим каждую цифру
                    $hundreds = (int)($number / 100); // Сотни
                    $tens = (int)(($number % 100) / 10); // Десятки
                    $units = $number % 10; // Единицы

                    // Считаем сумму и произведение
                    $sum = $hundreds + $tens + $units;
                    $product = $hundreds * $tens * $units;

                    // Выводим результат
                    echo "<p>Введеное число: $number</p>";
                    echo "<p>Сумма цифр: $sum</p>";
                    echo "<p>Произведение цифр: $product</p>";
                }
                ?>
            </p>
        </section>
    </main>

    <?php
        include 'footer.php'
    ?>

</body>
</html>