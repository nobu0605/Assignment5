<?php
// Retrieve values from form or URL parameters
$a = $_GET['a'] ?? null;
$b = $_GET['b'] ?? null;
$c = $_GET['c'] ?? null;
$d = $_GET['d'] ?? null;
$e = $_GET['e'] ?? null;

$values = [$a, $b, $c, $d, $e];

// Validate all values are provided
if (in_array(null, $values)) {
    echo "<p>Error: Please provide all five values.</p>";
    exit;
}

// Call the Python script with the values as arguments
$command = escapeshellcmd("python3 data_management.py " . implode(" ", $values));
$output = shell_exec($command);

// Display the output with HTML formatting
echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Results</title></head><body>";
echo $output;
echo "</body></html>";
?>
