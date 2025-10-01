<?php
$inventory = [
    'apple' => 50,
    'banana' => 30,
    'orange' => 0
];

function checkInventory($item, $inventory) {
    if (isset($inventory[$item])) {
        return $inventory[$item] > 0 ? "In stock: {$inventory[$item]}" : "Out of stock";
    } else {
        return "Item not found in inventory.";
    }
}

echo checkInventory('banana', $inventory); 
echo "\n";
echo checkInventory('orange', $inventory);  
echo "\n";
echo checkInventory('grape', $inventory);   
?>
