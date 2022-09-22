<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $colors_arr = array("#FFFFFF", "#123456", "#000000");

    function FindBrightest(array $colors)
    {
        $int_color_array = array();
        $v_array = array();
        for ($i = 0; $i < count($colors); $i++) {
            $int_red = hexdec(substr($colors[$i], 1, 2));
            $int_color_array[] = $int_red;

            $int_green = hexdec(substr($colors[$i], 3, 2));
            $int_color_array[] = $int_green;

            $int_blue = hexdec(substr($colors[$i], 5, 2));
            $int_color_array[] = $int_blue;

            $max = max($int_color_array);

            $v = round(($max / 255) * 100, 0, PHP_ROUND_HALF_UP);
            $v_array[] = $v;
        }
        $lightest = max($v_array);
        $index = array_search($lightest, $v_array);
        return $colors[$index];
    }
    echo FindBrightest($colors_arr);
    ?>
</body>

</html>