<?php
$teman = [
    [
        "nama" => "Epan",
        "umur" => 17,
        "hobi" => "Bermain bola"
    ],
    [
        "nama" => "Ganes",
        "umur" => 18,
        "hobi" => "Membaca buku"
    ],
    [
        "nama" => "Herina",
        "umur" => 17,
        "hobi" => "Menyanyi"
    ],
    [
        "nama" => "Fallen",
        "umur" => 16,
        "hobi" => "Menulis"
    ],
    [
        "nama" => "Dela",
        "umur" => 17,
        "hobi" => "Bermain game"
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Teman</title>
</head>
<body>
    <h2>Daftar Teman Saya</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Hobi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($teman as $t) {
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>{$t['nama']}</td>";
            echo "<td>{$t['umur']}</td>";
            echo "<td>{$t['hobi']}</td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>
