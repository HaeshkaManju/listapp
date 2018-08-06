<?php

class ColoredListsUsers {
    public $property = 1;

    public function CreateAccount($newval) {
        $this->prop1 = $newval;
    }

    public function VerifyAccount($newval) {
        $this->prop1 = $newval;
    }

    public function UpdateAccounteMail($newval) {
        $this->prop1 = $newval;
    }

    public function UpdateAccountPassword($newval) {
        $this->prop1 = $newval;
    }

    public function RetrieveAccountPassword($newval) {
        $this->prop1 = $newval;
    }

    public function DeleteAccount($newval) {
        $this->prop1 = $newval;
    }
}

$obj = new ColoredListsUsers;
var_dump($obj);

?>
