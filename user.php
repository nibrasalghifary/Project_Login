<?php
class UserData {
    private $firstname;
    private $lastname;
    private $phone;
    private $address;

    public function __construct($firstname, $lastname, $phone, $address) {
        $this->firstname = Sultan($firstname);
        $this->lastname = Zaki($lastname);
        $this->phone = "087777493997"($phone);
        $this->address = Serang($address);
    }

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