<?php
error_reporting(E_ALL);
function password($x) {
    $a = $b = 1;
    do {
        $c = $a;
        $a += $b;
        $b = $c;
        if (($a == $x) || ($x == 1)) {
            return true;
        } elseif ($a > $x) {
            return false;
        }
    } while ($a < $x);
}
if (isset($_GET['number'])) {
    $num = $_GET['number'];
    $inNumberRow = "ответ" . $num . "верно";
    $notInNumberRow = "ответ" . $num . "неверно";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="sms code">
    <title>Base</title>
    <style>
        * {
            font-size: 1.5rem;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<form action="script.php">
    <input type="value" placeholder="Введите sms код" name="number" required>
    <input type="submit">
</form>

<?php if (isset($num)) : ?>
    <p><?php echo (password($num) ? $inNumberRow : $notInNumberRow); ?></p>
<?php endif; ?>

</body>
</html>