<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator sederhana</title>
</head>
<body>
    <h2>Aplikasi kalkulator sederhana</h2>

    <!--Form untuk input bilangan dan memilih operasi -->
    <form method="post">
        <label>Masukkan Bilangan Pertama:</label>
        <input type="number"name="num1" required><br><br>

        <label>Masukkan Bilangan kedua:</label>
        <input type="number"name="num2" required><br><br>

        <label>Pilih Operasi:</label><br>
        <input type="radio" name="opertion" value="tambah" required> Penjumlahan (+)<br>
        <input type="radio" name="operation" value="kurang"> Pengurangan (-)<br>
        <input type="radio" name="operation" value="kali"> Perkalian (*)<br>
        <input type="radio" name="operation" value="bagi"> Pembagian (/)<br><br>

        <input type="submit" name="submit" value="Hitung"></form>

        <!--Kolom untuk hasil perhitungan-->
        <div>
            <h3>Hasil Perhitungan:</h3>
            <p>
        <?php
        if 
        (isset($_POST['submit'])) {
            // Mengambil nilai dari form
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            //cek apakah 'operation' terdefinisi
            if (isset($_POST['operation'])) {
                $operation =
                $_POST['operation'];
                $hasil= 0;
            
            // Melakukan operasi aritmatika
            if ($operation == "tambah") {
                $hasil = $num1 + $num2;
                echo "$num1 + $num2 = $hasil";
            } elseif
             ($operation == "kurang") {
             $hasil = $num1 - $num2;
             echo "$num1 - $num2 = $hasil";
            } elseif
            ($operation == "kali") {
                $hasil = $num1 * $num2;
                echo "num1 * $num2 = $hasil";
            } elseif
             ($operation == "bagi") {
             if (num2 !=0) {
             $hasil = $num1 / $num2;
             echo
             "$sum1 / $sum2 = $hasil";
            } else {
             echo
           "Error: Pembagian dengan nol tidak di perbolehkan.";
                }
                } else {
                    echo
                 "Operasi tidak valid.";
             }
            } else { 
                echo "Error:
               Pilih operasi yang ingin dilakukan, ";
            }
        }
            ?>
            </p>
        </div>
</body>
</html>