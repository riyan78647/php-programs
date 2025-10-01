<?php
// Step 1: Store users and passwords (in real apps, use hashed passwords and DB)
$users = [
    "alice" => "pass123",
    "bob" => "secure456",
    "charlie" => "mypassword"
];

// Step 2: Check if username exists
function is_valid_username($username, $users) {
    return array_key_exists($username, $users);
}

// Step 3: Check if password matches username
function is_valid_password($username, $password, $users) {
    if (is_valid_username($username, $users)) {
        return $users[$username] === $password;
    }
    return false;
}

// Step 4: Authenticate user
function authenticate($username, $password, $users) {
    if (!is_valid_username($username, $users)) {
        return [false, "Error: Username does not exist."];
    }
    if (!is_valid_password($username, $password, $users)) {
        return [false, "Error: Incorrect password."];
    }
    return [true, "Welcome, $username!"];
}

// Step 5: Example usage (simulate form input)
$username = readline("Enter username: ");
$password = readline("Enter password: ");

list($success, $message) = authenticate($username, $password, $users);
echo $message . PHP_EOL;
?>
