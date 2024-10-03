<?php
// Membuat array
$user_info = [
    [
        "name" => "Vincent",
        "age" => 40,
        "occupation" => "pemetik sawit"
    ],
    [
        "name" => "Budiono",
        "age" => 12,
        "occupation" => "Kapal laut"
    ],
    [
        "name" => "Gambot",
        "age" => 55,
        "occupation" => "Satpam"
    ]
];

// Encode array ke format JSON
$json_data = json_encode($user_info, JSON_PRETTY_PRINT);

// Tampilkan hasilnya
echo $json_data;
?>
