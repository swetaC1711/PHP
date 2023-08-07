<?php
// Numeric array
$numbers = array(1, 2, 3, 4, 5);

echo "Numeric array:<br>";
foreach ($numbers as $number) {
  echo $number . "<br>";
}

// Associative array
$person = array(
  "name" => "John",
  "age" => 30,
  "email" => "john@example.com"
);

echo "<br>Associative array:<br>";
foreach ($person as $key => $value) {
  echo $key . ": " . $value . "<br>";
}

// Multidimensional array
$students = array(
  array("name" => "John ", "age" => 20, " grade" => 85),
  array("name" => "Jane ", "age" => 22, " grade" => 95),
  array("name" => "Bob ", "age" => 21, " grade" => 75)
);

echo "<br>Multidimensional array:<br>";
foreach ($students as $student) {
  foreach ($student as $key => $value) {
    echo $key . ": " . $value . " ";
  }
  echo "<br>";
}
?>
