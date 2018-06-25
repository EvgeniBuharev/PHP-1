<html>
    <head>
        <title>Домашнее Задание 2</title>
    </head>
    <body>
    <h1>Задание №1</h1>
    <p>Таблица истинности оператора && - логическое "И":</p>
    <table border ='1' cellpadding='5' width='300'>
        <tr align="center">
            <td><b>&&</b></td><td><b>false</b></td><td><b>true</b></td>
        </tr>
        <tr align="center">
            <td><b>false</b></td><td>false</td><td>false</td>
        </tr>
        <tr align="center">
            <td><b>true</b></td><td>false</td><td>true</td>
        </tr>
    </table>
    <p>Таблица истинности оператора | | - логическое "ИЛИ":</p>
    <table  border ='1' cellpadding='5' width='300'>
        <tr align="center">
            <td><b>| |</b></td><td><b>false</b></td><td><b>true</b></td>
        </tr>
        <tr align="center">
            <td><b>false</b></td><td>false</td><td>true</td>
        </tr>
        <tr align="center">
            <td><b>true</b></td><td>true</td><td>true</td>
        </tr>
    </table>
    <p>Таблица истинности оператора XOR - логическое "ИСКЛЮЧАЮЩЕЕ ИЛИ":</p>
    <table border ='1' cellpadding='5' width='300'>
        <tr align="center">
            <td><b>XOR</b></td><td><b>false</b></td><td><b>true</b></td>
        </tr>
        <tr align="center">
            <td><b>false</b></td><td>false</td><td>true</td>
        </tr>
        <tr align="center">
            <td><b>true</b></td><td>true</td><td>false</td>
        </tr>
    </table>

    <h1>Задание №2</h1>
    <p>Решение квадратного уравнения.</p>
    <p>x^2-2x-3=0</p>
    <?php
        include __DIR__ . '/functions.php';
        $a = 1;
        $b = -2;
        $c = -3;
        $D = discriminant($a, $b, $c);
        echo 'Приводим коэффициенты и вычисляем дискриминант  D = b^2 - 4*a*c; а = ' . $a . ', b = ' . $b . ', c = ' . $c;
    ?>
    <br>
    <?php
        $k1 = ($b * (-1) + sqrt($D)) / (2 * $a); // Формула вычисления первого корня
        $k2 = ($b * (-1) - sqrt($D)) / (2 * $a); // Формула вычисления второго корня
    if ($a == 0) {
        echo 'Ошибка: "а" не должно быть равно 0';
    } elseif ($D == 0) {
        echo 'Дискриминант = 0, уравненине имеет один корень = '. $k1;
    } elseif ($D > 0) {
        echo 'Дискриминант > 0 D = ' . $D . ', уравненине имеет два корня, первый = '. $k1 . ', второй = ' . $k2;
    } elseif ($D < 0) {
        echo 'Дискриминант < 0 D = ' . $D . ', уравнение не имеет корней.';
    }
    ?>

    <h1>Задание №3</h1>
    <?php
        $test = include (__DIR__ . '/test.php');
        var_dump($test); // Конструкция include при использовании в виде обычной функции возвращает значение
                         // 1(успешное включение).
    ?>

    <h1>Задание №4</h1>
    <?php
        echo sex('Егор')
    ?>
    </body>
</html>