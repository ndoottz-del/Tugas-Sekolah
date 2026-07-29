<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>

<body>
<h1>Berlatih Function PHP</h1>
<?php

echo "<h3> Soal No 1 Greetings </h3>";
/* 
Soal No 1
Greetings
Buatlah sebuah function greetings() yang menerima satu parameter berupa string. 

contoh: greetings("abduh");
Output: "Halo Abduh, Selamat Datang di Jabar Coding Camp!"
*/

// Code function di sini

function greetings($nama) {

    $nama_kapital = ucfirst($nama);

    echo "Halo " . $nama_kapital . ", Selamat Datang di Jabar Coding Camp!<br>";
}

 greetings("Bagas");
 greetings("Wahyu");
 greetings("Abdul");

echo "<br>";

echo "<h3>Soal No 2 Reverse String</h3>";
/* 
Soal No 2
Reverse String
Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
Function reverseString menerima satu parameter berupa string.
NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING!

reverseString("abdul");
Output: ludba

*/

// Code function di sini 

function reverseString($str) {

    $panjang = strlen($str);
    
    $hasil_terbalik = "";
    
    for ($i = $panjang - 1; $i >= 0; $i--) {
        
        $hasil_terbalik .= $str[$i];
    }
    
    echo $hasil_terbalik . "<br>";
}

 reverseString("abduh");
 reverseString("Bootcamp");
 reverseString("We Are JCC Developers");
echo "<br>";

echo "<h3>Soal No 3 Palindrome </h3>";
/* 
Soal No 3 
Palindrome
Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. 
Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic.
Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
NB: 
Contoh: 
palindrome("katak") => output : "true"
palindrome("jambu") => output : "false"
NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2!

*/

// Code function di sini

function reverseString2($str) {
    $panjang = strlen($str);
    $hasil_terbalik = "";
    
    for ($i = $panjang - 1; $i >= 0; $i--) {
        $hasil_terbalik .= $str[$i];
    }
    
    return $hasil_terbalik;
}


function palindrome($kata) {
    
    $kata_terbalik = reverseString2($kata);
    
    
    if ($kata == $kata_terbalik) {
        return "true";
    } else {
        return "false";
    }
}

echo 'palindrome("civic") => output : "' . palindrome("civic") . '"<br>';
echo 'palindrome("nababan") => output : "' . palindrome("nababan") . '"<br>';
echo 'palindrome("jambaban") => output : "' . palindrome("jambaban") . '"<br>';
echo 'palindrome("racecar") => output : "' . palindrome("racecar") . '"<br>';

echo "<h3>Soal No 4 Tentukan Nilai </h3>";
/*
Soal 4
buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter 
berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” 
Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar 
sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang”
*/

// Code function di sini

function tentukan_nilai($nilai) {
    
    if ($nilai >= 85 && $nilai <= 100) {
        return "Sangat Baik";
    } 
    
    elseif ($nilai >= 70 && $nilai < 85) {
        return "Baik";
    } 
    
    elseif ($nilai >= 60 && $nilai < 70) {
        return "Cukup";
    } 
    
    else {
        return "Kurang";
    }
}

 echo tentukan_nilai(98); //Sangat Baik
 echo "<br>";
 echo tentukan_nilai(76); //Baik
 echo "<br>";
 echo tentukan_nilai(67); //Cukup
 echo "<br>";
 echo tentukan_nilai(43); //Kurang


?>

</body>

</html>
