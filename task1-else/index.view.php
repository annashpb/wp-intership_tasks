<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="" method="GET">
        <input type="text" name="name" placeholder="Enter your name" />
        <input type="number" name="birth-year" placeholder="Enter a year of your birth" />
        <button type="submit">Submit</button>
    </form>
    <p>
        <?php if ($age !== 2020) {
            echo ($age >= 21) ? $accepted : $denied;
        } ?>
    </p>
</body>

</html>