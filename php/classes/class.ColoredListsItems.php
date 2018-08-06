<?php

class ColoredListsItems {
    public $property = 1;

    public function CreateListItem($newval) {
        $this->prop1 = $newval;
    }

    public function UpdateListItem($newval) {
        $this->prop1 = $newval;
    }

    public function DeleteListItem($newval) {
        $this->prop1 = $newval;
    }

    public function MoveListItem($newval) {
        $this->prop1 = $newval;
    }

    public function ModifyListItemColor($newval) {
        $this->prop1 = $newval;
    }

}

$obj = new ColoredListsItems;
var_dump($obj);

?>
