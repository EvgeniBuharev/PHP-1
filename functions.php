<?php
    assert(discriminant(1, 2, 3) === -8);
    function discriminant($a, $b, $c) {
        if ($a === 0) {
            return 'Значение $a не может быть равно 0';
        } else {
            return ($b**2)-4*$a*$c;
        }
    }
    ?>
<?php
    assert(sex('Федя') == null);
    assert(sex('Маша') == 'Маша = Женщина!');
    assert(sex('Пётр') == 'Пётр = Мужчина!');
    $name = '';
    function sex($name) {
        if (substr($name, -2) == 'а') {
            return $name . ' = Женщина!';
        } elseif (substr($name, -2) == 'б') {
            return $name . ' = Мужчина!';
        } elseif (substr($name, -2) == 'в') {
            return $name . ' = Мужчина!';
        } elseif (substr($name, -2) == 'г') {
            return $name . ' = Мужчина!';
        } elseif (substr($name, -2) == 'д') {
            return $name . ' = Мужчина!';
        } elseif (substr($name, -2) == 'й') {
            return $name . ' = Мужчина!';
        } elseif (substr($name, -2) == 'к') {
            return $name . ' = Мужчина!';
        } elseif (substr($name, -2) == 'л') {
            return $name . ' = Мужчина!';
        } elseif (substr($name, -2) == 'м') {
            return $name . ' = Мужчина!';
        } elseif (substr($name, -2) == 'н') {
            return $name . ' = Мужчина!';
        } elseif (substr($name, -2) == 'п') {
            return $name . ' = Мужчина!';
        } elseif (substr($name, -2) == 'р') {
            return $name . ' = Мужчина!';
        } elseif (substr($name, -2) == 'с') {
            return $name . ' = Мужчина!';
        } elseif (substr($name, -2) == 'т') {
            return $name . ' = Мужчина!';
        } elseif (substr($name, -2) == 'ф') {
            return $name . ' = Мужчина!';
        } else {
            return null;
        }
    }

?>