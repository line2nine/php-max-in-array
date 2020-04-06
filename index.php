<?php
include "function.php";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $rows = $_REQUEST["rows"];
    $columns = $_REQUEST["columns"];
    $array = $_REQUEST["item"];
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find Max In Array</title>
</head>
<body>
<form method="get">
    <div>
        Input Rows:
        <br>
        <input type="text" name="rows">
        <br>
        <br>
        Input Columns:
        <br>
        <input type="text" name="columns">
        <br>
        <br>
        <button type="submit">Create Array</button>
    </div>
    <br>
    <div>
        <table>
            <?php for ($i = 0; $i < $rows; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < $columns; $j++): ?>
                        <td><input type="text" name="item[]"></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
        <button type="submit">Find Max</button>
        <?php echo findMax($array); ?>
    </div>
</form>
</body>
</html>
