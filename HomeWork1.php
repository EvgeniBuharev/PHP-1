<html>
<head>
    <title>PHP-1</title>
</head>
<body>
<h1>PHP</h1>
<p>1 Урок</p>
<p>Задание 3.</p>
<?php
var_dump( 3 / 1); // Итог целое число 3
var_dump( 1 / 3); // Итог число с плавающей точкой 0.33333333333333
var_dump( '20cats' + 40 ); // Итог целое число 60
var_dump( 18 % 4); // Итог 2 целое число
?>
<p>Задание 4.</p>
<?php echo ($a = 2); // Переменной $a присвоено значение 2 ?> <br>
<?php $x = ($y = 12) - 8; echo $x; // Переменная $x присвоенное значение 4 ?>
<p> Значением выражения присваивания является - присвоенное значение.</p>
<p>Задание 5.</p>
<?php
var_dump( 1 == 1.0); // Итог  true. Сравниваются без учета типа
var_dump( 1 === 1.0); // Итог false. Числа не равны по типу int и float
var_dump( '02' == 2); // Итог true. Строка приводится по типу к числовому значению, числа равны
var_dump( '02' === 2); // Итог false.  Неравенство  из-за типа данных
var_dump( '02' == '2'); // Итог true. Строки приводятся к числовому значению, сравниваются без учёта типа
?>
<p>Задание 6.</p>
<?php $x = true xor true; var_dump($x); // Итог true. Переменной $x присвоено значение true. Функция var_dump($x) отображает информацию о переменной $x ?>
</body>
</html>