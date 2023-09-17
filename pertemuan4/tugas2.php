<!DOCTYPE html>
<html>
<head>
    <title>Nurul Hikmah</title>
</head>
<body>
    <h1>Kalkulator Luas Kerucut</h1>
    
    <form method="post" action="">
        <label for="radius">Jari-jari Alas (r):</label>
        <input type="text" name="radius" required><br><br>
        
        <label for="height">Tinggi Kerucut (h):</label>
        <input type="text" name="height" required><br><br>
        
        <input type="submit" name="calculate" value="Hitung">
    </form>
    
    <h2>Hasil:</h2>
    <?php
    if(isset($_POST['calculate'])){
        $radius = $_POST['radius'];
        $height = $_POST['height'];

        // Hitung luas alas kerucut
        $luasAlas = 3.14 * pow($radius, 2);

        // Hitung luas permukaan kerucut
        $s = sqrt(pow($radius, 2) + pow($height, 2));
        $luasPermukaan = 3.14 * $radius * ($radius + $s);

        echo "<p>Luas Alas Kerucut: " . number_format($luasAlas, 2) . "</p>";
        echo "<p>Luas Permukaan Kerucut: " . number_format($luasPermukaan, 2) . "</p>";
    }
    ?>
</body>
</html>
