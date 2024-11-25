<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Лабораторная работа, Майборода">
    <meta name="author" content="Майборода Дмитрий">
    <meta name="description" content="Веб-сайт для лабораторных работ">
    <title>Лабораторная работа №4</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php 
        include 'header.php'   
    ?>

    <main>
        
        <section>
            <h2>Описание задач</h2>
            <p>1. Даны два целых числа: A, B. Проверить истинность высказывания: «Числа A и B имеют одинаковую четность».</p>
            <p>2. Даны две переменные целого типа: A и B. Если их значения не равны, то присвоить каждой переменной большее из этих значений, а если равны, то присвоить переменным нулевые значения. Вывести новые значения переменных A и B.</p>  
            <p>3. Вычислить значение функции y=f(x) при произвольных значениях x.</p>     
            <div class="image-container">
                <img src="pictures/123.jpg" alt="Описание изображения 1">
            </div>  
            <p>4. Вычислить значение функции y=f(x) при произвольных значениях x. Для вычисления значения функции использовать оператор switch.</p>
            <div class="image-container">
                <img src="pictures/456.jpg" alt="Описание изображения 2">
            </div>
        </section>

        <br>

        <section>
            <h2>Задача 1</h2>
            <p>
                <?php
                    // Вводим два числа A и B
                    $A = 111; // Пример значения для A
                    $B = 111; // Пример значения для B
                    
                    if (($A % 2 === 0 && $B % 2 === 0) || ($A % 2 !== 0 && $B % 2 !== 0)) {
                        echo "Числа " . $A . " и " . $B . " имеют одинаковую четность.";
                    } else {
                        echo "Числа " . $A . " и " . $B . " имеют разную четность.";
                    }
                ?>
            </p>             
        </section>

        <br>

        <section>
            <h2>Задача 2</h2>
            <p>
                <?php
                    $A = 100; 
                    $B = 100; 

                    if ($A != $B) {

                        if ($A > $B) {
                            $A == $A; 
                            $B = $A; 
                        } else {
                            $A = $B; 
                            $B == $B; 
                        }
                    } else {
                        $A = 0;
                        $B = 0;
                    }
                    echo "<p>Новое значение A = $A</p>";
                    echo "<p>Новое значение B = $B</p>";
                ?>
            </p>
        </section>

        <br>

        <section>
            <h2>Задача 3</h2>
            <p>
                <?php 
                    $a=1.7;
                    $x1=-2.61;
                    $x2=5.56;
                    $x3=1.49;
                    $A= $x1**2 - $a*$x1;
                    $B=1/($x2**2+2);
                    $C=pow(($x3 + 1), 2 / 3);
                    echo "<p>y = " . $A . "</p>";
                    echo "<p>y = " . $B . "</p>";
                    echo "<p>y = " . $C . "</p>";             
                ?>
            </p>
        </section>
        
        <br>

        <section>
            <h2>Задача 4</h2>
            <p>
                <?php 
                    $a = 1.7;
                    $x1 = -2;
                    $x2 = 5;
                    $x3 = 3;

                    // Переменная для выбора функции
                    $function = 'D'; // Выберите 'A', 'B' или 'C'

                    switch ($function) {
                        case 'A':
                            $result = $x1 ** 2 - $a * $x1;
                            echo "<p>y (A) = " . $result . "</p>";
                            break;

                        case 'B':
                            $result = 1 / ($x2 ** 2 + 2);
                            echo "<p>y (B) = " . $result . "</p>";
                            break;

                        case 'C':
                            $result = pow(($x3 + 1), 2 / 3);
                            echo "<p>y (C) = " . $result . "</p>";
                            break;

                        default:
                            echo "<p>Неизвестная функция</p>";
                            break;
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
