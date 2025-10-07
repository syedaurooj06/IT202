<?php

$breedsArray = array(
    "Beagles",
    "Dachshunds",
    "Rottweilers",
    "Boxers",
    "Shih Tzus",
    "Siberian Huskies"
);

$dog = isset($_GET["dogBreed"]) ? trim($_GET["dogBreed"]) : '';
$result = "Dog Breed not found";

if ($dog !== '') {
    $dogLower = strtolower($dog);
    $len = strlen($dogLower);
    foreach ($breedsArray as $breed) {
        if (stristr(substr($breed, 0, $len), $dogLower)) {
            $result = $breed;
            break;
        }
    }
}

echo $result;
?>
