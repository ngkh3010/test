<?php

$cars = ["Type" => "Saloon",
        "Brand" => ["Audi", "BMW", "Ferrari", "Mercedes"],
        "Price" => [200, 300, 500, 300]
];

echo json_encode($cars);

?>