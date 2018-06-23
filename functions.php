<?php
    function discriminant ($a, $b, $c)
    {
        if ($a === 0) {
            return 'Ошибка: Значение $a не может быть равно 0';
        } else {
            return ($b**2)-4*$a*$c;
        }
    }
    assert((($b**2)-4*$a*$c < 0) === ($a < 0));
    assert((($b**2)-4*$a*$c < 0) === ($с < 0));
    assert((($b**2)-4*$a*$c < 0) === ($b**2) < (-4*$a*$c));