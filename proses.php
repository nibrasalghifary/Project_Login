<?php
// Memanggil file class
require_once 'user.php';

// Inisialisasi variabel kosong agar form tidak error saat pertama kali dibuka
$resultHTML = "";
$fName = $lName = $pNumber = $addr = "";

// Mengecek apakah ada data yang dikirim (tombol submit ditekan)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menangkap inputan
    $fName = $_POST['firstname'];
    $lName = $_POST['lastname'];
    $pNumber = $_POST['phone'];
    $addr = $_POST['address'];

    // Menginstansiasi Object dari Class UserData
    $user = new UserData($fName, $lName, $pNumber, $addr);
    
    // Memanggil method untuk mencetak hasil dan menyimpannya di variabel
    $resultHTML = $user->printResult();
}
?>