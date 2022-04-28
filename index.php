<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Eindproject</title>
</head>
<body>
        
</body>
</html>
<?php
spl_autoload_register(function ($class) {
    include 'Classes/' . $class . '.php';
});

$data = array(
    "ProductName" => "Queen",
    "AmountOfStock" => "10",
    "MinStock" => "5",
    "Price" => "5",
    "Active" => "true"
);
echo "<div style='display: flex;gap: 20px;flex-wrap: wrap;'>";
$data = new Product($data);
echo $data;
$data->addStock(69);
echo $data;


$data = array(
    "ProductName" => "ABBA",
    "AmountOfStock" => "10",
    "MinStock" => "25",
    "Price" => "10",
    "Active" => "true"
);
$data = new Product($data);
echo $data;

$data = array(
    "ProductName" => "Moon Kight",
    "AmountOfStock" => "50",
    "MinStock" => "10",
    "Price" => "29.99",
    "Active" => "true",
    "LengthInMinutes" => "420",
    "ReleaseYear" => "2022",
    "MovieStudio" => "Disney"
);
$data = new DVD($data);
echo $data;
$data->removeStock(50);
echo $data;
$data->removeStock(40);
echo $data;


$data = array(
    "ProductName" => "Avengers Age of Ultron",
    "AmountOfStock" => "130",
    "MinStock" => "50",
    "Price" => "15.99",
    "Active" => "true",
    "LengthInMinutes" => "150",
    "ReleaseYear" => "2018",
    "MovieStudio" => "Disney"
);
$data = new DVD($data);
echo $data;

$data = array(
    "ProductName" => "Bullet",
    "AmountOfStock" => "50",
    "MinStock" => "0",
    "Price" => "15.99",
    "Active" => "false",
    "Artist" => "Joe",
    "AmountOfSongs" => "10",
    "Label" => "None"
);
$data = new CD($data);
echo $data;
$data->addStock(69);

echo "</div>";

$reader = new FileReader('Classes\bestand.csv');
$fileData = $reader->parse();
echo "$reader";

?>