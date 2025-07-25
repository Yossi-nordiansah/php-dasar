<?php
// pengkondisian / percabangan
// if else
$x = 11;
if ($x < 11) {
    echo "True";
} else if ($x == 11) {
    echo "Tepat";
} else {
    echo "Salah";
};

// if else if else

// ternary
$umur = 20;
$status = ($umur >= 18) ? "Dewasa" : "Anak-anak";
echo $status;
$nama = $_GET["nama"] ?? "Guest"; // PHP 7+

// switch
$hari = "Senin";

switch ($hari) {
    case "Senin":
        echo "Hari kerja";
        break;
    case "Sabtu":
    case "Minggu":
        echo "Akhir pekan";
        break;
    default:
        echo "Hari tidak dikenali";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .color {
            background-color: slategray;
        }
    </style>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="1">
        <?php
        for ($i = 1; $i <= 3; $i++) :
        ?>
            <tr>
                <?php
                for ($j = 1; $j <= 5; $j++) :
                ?> <?php if ($j % 2 == 1) : ?>
                        <td class="color">
                        <?php else: ?>
                        <td>
                        <?php endif; ?>
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