<?php

function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';

    if (!is_readable($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;
    $result = ob_get_clean();
    return $result;
}


function parametr_sum(int $number_price):string
{
    $decimals = 0;
    $dec_point = ".";
    $thousands_sep = " ";

    $result = number_format(
        ceil($number_price),
        $decimals,
        $dec_points,
        $thousands_sep
    );

    return $result . ' <b class="rub"></b>';
}


function esc($str)
{
    return htmlspecialchars($str);
}

?>