<?php

$users = [
    'kp' => 'kp123',
    'riyu' => 'riyupass',
];

function authenticate($username, $password, $users) {
    if (isset($users[$username]) && $users[$username] === $password) {
        return true;
    }
    return false;
}

$username = 'kp';
$password = 'kp123';

if (authenticate($username, $password, $users)) {
    echo "Welcome, $username! Login successful."."<br>";
} else {
    echo "Invalid username or password.";
}

$username = 'riyu';
$password = 'riyupass';

if (authenticate($username, $password, $users)) {
    echo "Welcome, $username! Login successful.";
} else {
    echo "Invalid username or password.";
}
?>
