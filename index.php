<?php
function add($a, $b) {
    return $a + $b;
}

$result = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'] ?? null;
    $num2 = $_POST['num2'] ?? null;

    if (is_numeric($num1) && is_numeric($num2)) {
        $sum = add($num1, $num2);
        $result = "<h2>Result: $num1 + $num2 = $sum</h2>";
    } else {
        $result = "<h2>Please enter valid numbers.</h2>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Two Numbers</title>
</head>
<body>
    <h2>Add Two Numbers</h2>
    <form method="POST" action="">
        <label>Number 1:</label>
        <input type="number" name="num1" required value="<?php echo htmlspecialchars($_POST['num1'] ?? ''); ?>"><br><br>

        <label>Number 2:</label>
        <input type="number" name="num2" required value="<?php echo htmlspecialchars($_POST['num2'] ?? ''); ?>"><br><br>

        <input type="submit" value="Add">
    </form>

    <?php
    // Display result if exists
    echo $result;
    ?>
</body>
</html>

