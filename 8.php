<?php
$inventory = [
    "apple" => 10,
    "banana" => 5,
    "orange" => 0
];

function check_inventory($item, $inventory) {
    if (isset($inventory[$item])) {
        return $inventory[$item] > 0 ? "In stock" : "Out of stock";
    }
    return "Item not found";
}

echo check_inventory("banana", $inventory);
?>
