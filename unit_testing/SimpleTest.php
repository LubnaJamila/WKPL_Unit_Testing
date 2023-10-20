<?php
    //Menggunakan PHPUnit
    use PHPUnit\Framework\TestCase;

    //Membutuhkan class wordcount.php untuk mengisi data / kata
    require_once "wordcount.php";

    class SimpleTest extends Testcase{

        // Membuat Class yang akan di test
        public function testCountWords(){
            

            // Deklarasi Class
            $WC = new wordcount();

            //Input kalimat yanag akan dihitung tiap kata
            $katatesting = "Halo Namaku Lubna Jamila"; // 4 kata juga

            // Menghitung Kata dari variable $katatesting
            $WordCount = $WC -> countWords($katatesting);

            // jika kata == 4, Berarti Benar
            $this ->assertEquals(4, $WordCount);

        }

    }
?>


