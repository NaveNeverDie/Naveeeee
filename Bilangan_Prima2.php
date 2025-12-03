<!DOCTYPE html>
<html>
<head>
    <title>Cek Prima</title>
</head>
<body>
    <h2>Cek Bilangan Prima dan Ganjil/Genap</h2>
    
    <form method="POST">
        Masukkan angka: <input type="number" name="angka" required>
        <button type="submit">Cek</button>
    </form>

        //form,ini adalah awal dari formulir, lembar kertas yang bisa di isi. method post yaitu cara mengirim data ke komputer lain -server-//
        //input type number, digunakan sebagai input khusus number//
        //required adalah dimana user harus melakukan input//
    <br>
    
    <?php
    if(isset($_POST['angka'])) {
        $angka = $_POST['angka'];

            //(if). Artinya: "Periksa apakah ada data yang dikirim dari form website dengan nama 'angka
            //$_POST adalah seperti kotak surat khusus untuk data yang dikirim dari form (misalnya, ketika kamu klik tombol "Kirim" di website).
            //isset berarti "apakah ada" atau "apakah sudah diatur". Jadi, ini seperti bertanya: "Apakah ada surat bernama 'angka' di kotak surat?"
            //Jika ada (misalnya, pengguna mengetik angka 42 di form dan kirim), maka lanjut ke langkah berikutnya. Jika tidak ada, kode ini tidak melakukan apa-apa.
        
        // cek ganjil atau genap
        if($angka % 2 == 0) {
            echo "Angka $angka adalah <b>GENAP</b><br>";
        } else {
            echo "Angka $angka adalah <b>GANJIL</b><br>";
        }
            
        // fungsi cek prima
        function cekPrima($n) {
            if($n < 2) return false;
            if($n == 2) return true;
            if($n % 2 == 0) return false;

            //$n adalah variable n=number
            
            for($i = 3; $i <= sqrt($n); $i += 2) {
                if($n % $i == 0) return false;
            }
            return true;
        }
            //NDUKUR MU BINAKNO KONTOLLLLLL
        // cek prima
        if(cekPrima($angka)) {
            echo "Angka $angka adalah <b>PRIMA</b><br><br>";
            echo "<b>Cara ngeceknya:</b><br>";
            echo "1. Bilangan prima itu cuma bisa dibagi 1 dan dirinya sendiri<br>";
            echo "2. Kita cek dari angka 2 sampai akar $angka<br>";
            echo "3. Karena gak ada yang bisa bagi $angka, jadi DIA PRIMA!<br>";
        } else {
            echo "Angka $angka adalah <b>BUKAN PRIMA</b><br><br>";
            echo "<b>Cara ngeceknya:</b><br>";
            
            if($angka < 2) {
                echo "Bilangan prima harus lebih dari 1, jadi $angka bukan prima<br>";
            } else if($angka % 2 == 0) {
                echo "$angka bisa dibagi 2, jadi bukan prima<br>";
            } else {
                for($i = 3; $i <= sqrt($angka); $i += 2) {
                    if($angka % $i == 0) {
                        echo "$angka bisa dibagi $i, jadi bukan prima<br>";
                        break;
                    }
                }
            }
        }
    }
    ?>
    
</body>
</html>