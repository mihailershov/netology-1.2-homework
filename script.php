<?php

error_reporting(E_ALL);

function fibonacci($x) {
    $first = $second = 1;
    do {
        $third = $first;
        $first += $second;
        $second = $third;
        if (($first == $x) || ($x == 1)) {
            return true;
        } elseif ($first > $x) {
            return false;
        }
    } while ($first < $x);
}

if (isset($_GET['number'])) {
    $num = $_GET['number'];
    $inNumberRow = "задуманное число " . $num . " входит в числовой ряд фибоначчи";
    $notInNumberRow = "задуманное число " . $num . " не входит в числовой ряд фибоначчи";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ershov</title>
    <style>
        * {
            font-size: 1.5rem;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<form action="script.php">
    <input type="value" placeholder="Введите число" name="number" required>
    <input type="submit">
</form>

<?php if (isset($num)) : ?>
    <p><?php echo (fibonacci($num) ? $inNumberRow : $notInNumberRow); ?></p>
<?php endif; ?>

</body>
</html>