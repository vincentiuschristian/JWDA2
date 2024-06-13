<?php
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];

    if (is_numeric($angka1) && is_numeric($angka2)) {
        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    $hasil = "Error: Tidak bisa dibagi 0";
                }
                break;
            default:
                $hasil = "Invalid operator";
                break;
        }
    } else {
        $hasil = "Input yang dimasukan invalid";
    }

    echo "<h2>Hasil: $hasil</h2>";
?>
