<?php
// Variabel yang berisi JSON
$json_data = '[
    {
        "name": "Vincent",
        "age": 40,
        "occupation": "Pemetik sawit"
    },
    {
        "name": "Budiono",
        "age": 12,
        "occupation": "Kapal laut"
    },
    {
        "name": "Gambot",
        "age": 55,
        "occupation": "Satpam"
    }
]';

// Decode JSON ke dalam PHP Object
$php_object = json_decode($json_data);

// Akses dan tampilkan nilai dari PHP Object
foreach ($php_object as $person) {
    echo $person->name . " - " . $person->age . " - " . $person->occupation . "\n";
}

// Decode JSON ke dalam PHP Array
$php_array = json_decode($json_data, true);

// Akses dan tampilkan nilai dari PHP Array
foreach ($php_array as $person) {
    echo $person['name'] . " - " . $person['age'] . " - " . $person['occupation'] . "\n";
}
?>
