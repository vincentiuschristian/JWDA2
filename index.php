<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hitung</title>
</head>
<body>
    <b>Kalkulaktor</b>
    <form action="proses.php" method="POST">
        <label for="angka1">Angka 1:</label>
        <input type="number" id="angka1" name="angka1" /><br /><br />

        <label for="angka2">Angka 2:</label>
        <input type="number" id="angka2" name="angka2" /><br /><br />

        <label for="operator">Operator:</label>
        <select name="operator">
            <option value="+">Penjumlahan</option>
            <option value="-">Pengurangan</option>
            <option value="*">Perkalian</option>
            <option value="/">Pembagian</option>
        </select><br /><br />

        <button type="submit">Hitung</button>
    </form>
</body>
</html>
