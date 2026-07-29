<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
        echo "<h3> Soal No 1</h3>";
        /* 
            SOAL NO 1
            Tunjukan dengan menggunakan echo berapa panjang dari string yang diberikan berikut! Tunjukkan juga jumlah kata di dalam kalimat tersebut! 
            Contoh: 
            $string = "PHP is never old";
            Output:
            Panjang string: 16, 
            Jumlah kata: 4 
        */

        $first_sentence = "Hello PHP!" ; // Panjang string 10, jumlah kata: 2
        $second_sentence = "I'm ready for the challenges"; // Panjang string: 28,  jumlah kata: 5

$panjang_first_sentence = strlen ($first_sentence);
$jumlah_kata_f = str_word_count ($first_sentence);

$panjang_second_sentence = strlen ($second_sentence);
$jumlah_kata_s = str_word_count ($second_sentence);

echo "Panjang String: " . $panjang_first_sentence;
echo ", Jumlah Kata: " . $jumlah_kata_f;

echo "<b> Dari kata Hello PHP!</b>" . "<br>";

echo " Panjang String: " . $panjang_second_sentence;
echo ", Jumlah Kata: " . $jumlah_kata_s;

echo "<b> Dari kata I'm ready for the challenges</b>";
        
        echo "<h3> Soal No 2</h3>";
        /* 
            SOAL NO 2
            Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. 
        */
        
        $string2 = "I love PHP";
        
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ; 
        echo "Kata kedua: " . substr ($string2, 2, 4) . "<br>";
        echo " Kata Ketiga: " . substr ($string2, 6, 4) . "<br>";


        echo "<h3> Soal No 3 </h3>";
        /*
            SOAL NO 3
            Mengubah karakter atau kata yang ada di dalam sebuah string.
        */
        $string3 = "PHP is old but Good!";
echo "String: \"$string3\" <br>"; 

$output = str_replace("Good!", "awesome", $string3);

echo $output;
        
    ?>
</body>
</html>
