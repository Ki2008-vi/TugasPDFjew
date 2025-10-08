<!DOCTYPE html>
<html>
<head>
    <title>BMI</title>
</head>
<body>
    <h2>BMI</h2>

    <form method="post">
        Berat (kg): <input type="number" name="berat" required><br><br>
        Tinggi (cm): <input type="number" name="tinggi" required><br><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $berat = $_POST["berat"];
        $tinggi = $_POST["tinggi"] / 100;
        $bmi = $berat / ($tinggi * $tinggi);

        if ($bmi < 18.5) {
            $kategori = "Kurus";
        } elseif ($bmi < 25) {
            $kategori = "Normal";
        } elseif ($bmi < 30) {
            $kategori = "Gemuk";
        } else {
            $kategori = "Obesitas";
        }

        echo "<br>BMI Anda: " . number_format($bmi, 2) . "<br>";
        echo "Kategori: $kategori";
    }
    ?>
</body>
</html>
