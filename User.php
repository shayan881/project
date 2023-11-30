<?php


$users = [
    new stdClass(['name' => 'shayan', 'lname' => 'heydari', 'age' => 20]),
    new stdClass(['name' => 'hossein', 'lname' => 'mohammadZade', 'age' => 22]),
];
foreach ($users as $user) {
    echo $user->name . ' ' . $user->lname;
}
