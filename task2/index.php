<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $someArr = [36, 2, 87, 96, 168, 4, -8, 66];

    function sorting($arr)
    {
        do {
            $swapped = false;
            for ($i = 0; $i < count($arr); $i++) {
                $j = $i + 1;
                if ($arr[$i] < $arr[$j]) {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
                    $swapped = true;
                }
            }
        } while ($swapped);
        var_dump($arr);
    }

    sorting($someArr);

    ?>

    <script type="module" src="index.js"></script>

</body>

</html>