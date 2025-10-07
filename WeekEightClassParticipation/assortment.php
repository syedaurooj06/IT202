<?php

include "form.html";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $values = $_POST['values'];

    // Original array

    echo "<br><strong>Original array:</strong><br>";

    foreach($values as $v) {
        echo "$v<br>";
    }

    // Original array with indexes
    echo "<br><strong>Original array with indexes:</strong><br>";

    echo "Array ( ";
    foreach($values as $key => $value) {
        echo "[$key] => $value ";
    }
    echo ")<br>";

    // Delete two elements from the array
    unset($values[2]);
    unset($values[4]);

    echo "<br><strong>Array after 2 elements deleted:</strong><br>";

    for($i=0; $i < 8; $i++) {
        echo "$values[$i] <br>";
    }

    // Array after 2 elements deleted with indexes
    echo "<br><strong>Array after 2 elements deleted with indexes:</strong><br>";

    echo "Array ( ";
    foreach($values as $key => $value) {
        echo "[$key] => $value ";
    }
    echo ")<br>";

    // Remove gaps from the array
    $values = array_values($values);

    echo "<br><strong>Array after gaps removed:</strong><br>";

    foreach($values as $v) {
        echo "$v<br>";
    }

    // Array after gaps removed with indexes
    echo "<br><strong>Array after gaps removed with indexes:</strong><br>";

    echo "Array ( ";
    foreach($values as $key => $value) {
        echo "[$key] => $value ";
    }
    echo ")<br>";

    // Sort the array in ascending order
    sort($values);

    echo "<br><strong>Array after sort ascending order:</strong><br>";

    foreach($values as $v) {
        echo "$v<br>";
    }

    // Array sorted in ascending order with indexes
    echo "<br><strong>Array after sort ascending order with indexes:</strong><br>";

    echo "Array ( ";
    foreach($values as $key => $value) {
        echo "[$key] => $value ";
    }
    echo ")<br>";

    // Sort the array in descending order
    rsort($values);

    echo "<br><strong>Array after sort descending order:</strong><br>";

    foreach($values as $v) {
        echo "$v<br>";
    }

    // Array sorted in descending order with indexes
    echo "<br><strong>Array after sort descending order with indexes:</strong><br>";

    echo "Array ( ";
    foreach($values as $key => $value) {
        echo "[$key] => $value ";
    }
    echo ")<br>";

    // Sort the array in ascending order according to values, keeping keys
    asort($values);
    $values = array_values($values);

    echo "<br><strong>Array after sort ascending order according to values while keeping keys:</strong><br>";

    foreach($values as $v) {
        echo "$v<br>";
    }

    // Array sorted in ascending order according to values while keeping keys with indexes
    echo "<br><strong>Array after sort ascending order according to values while keeping keys with indexes:</strong><br>";

    echo "Array ( ";
    foreach($values as $key => $value) {
        echo "[$key] => $value ";
    }
    echo ")<br>";

    // Sort the array in ascending order according to keys
    ksort($values);

    echo "<br><strong>Array after sort ascending order according to keys:</strong><br>";

    foreach($values as $v) {
        echo "$v<br>";
    }

    // Array sorted in ascending order according to keys with indexes
    echo "<br><strong>Array after sort ascending order according to keys with indexes:</strong><br>";

    echo "Array ( ";
    foreach($values as $key => $value) {
        echo "[$key] => $value ";
    }
    echo ")";

}

?>