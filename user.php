<?php
class UserData {
    private $firstname;
    private $lastname;
    private $phone;
    private $address;

    // Constructor untuk inisialisasi object
    public function __construct($firstname, $lastname, $phone, $address) {
        $this->firstname = htmlspecialchars($firstname);
        $this->lastname = htmlspecialchars($lastname);
        $this->phone = htmlspecialchars($phone);
        $this->address = htmlspecialchars($address);
    }

    // Method untuk menampilkan hasil teks
    public function printResult() {
        return "
            <div class='result-container'>
                <p>Hi, my name is " . $this->firstname . " " . $this->lastname . "</p>
                <p>Phone Number : " . $this->phone . "</p>
                <p>Address : " . $this->address . "</p>
                <a href='form2.php' class='reset-link'>Reset</a>
            </div>
        ";
    }
}
?>