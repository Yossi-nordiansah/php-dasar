<?php
//pengulangan
//for
for ($i = 1; $i <= 10; $i++) {
    echo "hello world $i <br>";
};

//while
$i = 0;
while ($i <= 5) {
    echo "pengulangan dengan while $i <br>";
    $i++;
}

//do.. while
do {
    echo "pengulangan dengan do while $i <br>";
    $i++;
} while ($i <= 5);

//foreach
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="1">
        <?php
        for ($i = 1; $i <= 3; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 5; $j++) {
                echo "<td> $i, $j </td>";
            }
            echo "</tr>";
        };
        ?>
    </table>

    <table border="1" cellpadding="10" cellspacing="1">
        <?php
        for ($i = 1; $i <= 3; $i++) :
        ?>
            <tr>
                <?php
                for ($j = 1; $j <= 5; $j++) :
                ?>
                    <td>
                        <?= "$i, $j"; ?>
                    </td>
                <?php
                endfor;
                ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>