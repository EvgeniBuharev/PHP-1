<html>
    <head>
		<title>PHP-1</title>
    </head>
		<body>
		<h1>PHP</h1>
		<p>1 Урок</p>
		Задание 3.
		<p>1.  var_dump( 3 / 1) =  <?php var_dump( 3 / 1)?>  // Целое число 3; </p> 
		<p>2.  var_dump( 1 / 3) =  <?php var_dump( 1 / 3)?> // Число с плавающей точкой 0.33333333333333; </p>
		<p>3.  var_dump( '20cats' + 40 ) =  <?php var_dump( '20cats' + 40 ) ?> // Строка приводится в числовой тип с числом 20. Результат Целое число 60; </p>
		<p>4.  var_dump( 18 % 4) =  <?php var_dump( 18 % 4)?> //Деление по модулю. Результат целочисленный остаток от деления 2 целое число. </p>
		
		Задание 4.
		<p>1. echo($a = 2) =  <?php echo($a = 2)?> //Переменной $a присвоено значение 2; </p>
		<p>2. $x = ($y = 12) - 8; echo $x = <?php $x = ($y = 12) - 8; echo $x ?> //Переменной $x присвоен результат выражения 4;</p>
		<p> Значением выражения присваивания является - присвоенное значение.</p>
		
		Задание 5.
		<p>1. 1 == 1.0 =  <?php var_dump( 1 == 1.0)?> // true. Сравниваются без учета типа; </p>
		<p>2. 1 === 1.0 = <?php var_dump( 1 === 1.0)?> // false. Числа не равны по типу int и float;</p>
		<p>3. '02' == 2 = <?php var_dump( '02' == 2)?> //  true. Строка преобразуется по типу к числовому значению числа равны;</p>
		<p>4. '02' === 2 = <?php var_dump( '02' === 2)?> // false.  Неравенство  из-за типа данных;</p>
		<p>5. '02' == '2' = <?php var_dump( '02' == '2')?> // true. Строки приводятся к числовому типу, сравниваются без учёта типа.</p>
		
		
		Задание 6.
		<p>  $x = `true` xor true; var_dump($x) =<?php $x = true xor true; var_dump($x); ?> // Переменной $x присваивается значение true. Функция var_dump($x) отображает информацию о переменной $x.</p>
		
		</body>		
</html>
