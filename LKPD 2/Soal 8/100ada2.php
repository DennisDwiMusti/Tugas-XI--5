<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>100 ada 2 | HTML | PHP</title>

</head>
<body>
    <?php
    $data = [80, 90, 75, 100, 85, 100, 66];
    $cari = 100;
    //Variabel untuk menghitung jumlah kemunculan
    $jumlah_100 = 0;
    //Loop setiap elemen dalam array
    //menggunakan loop foreach untuk mengakses data variabel data
    foreach ($data as $nilai) {
        //Jika nilai sama dengan angka yang dicari, tambahkan 1 ke jumlah angka
        if ($nilai == $cari) {
            $jumlah_100++;
        }
    }
    //Tampilkan hasil
    echo "Jumlah angka 100 = " . $jumlah_100;
    ?>
</body>
</html>