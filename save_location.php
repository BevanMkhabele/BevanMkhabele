<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    
    // File path where you want to save the location
    $file = 'user_location.txt';

    // Open the file to write
    $fp = fopen($file, 'w');

    // Write the coordinates to the file
    fwrite($fp, "Latitude: " . $latitude . ", Longitude: " . $longitude);

    // Close the file
    fclose($fp);

    echo "Location saved successfully.";
} else {
    echo "Invalid request.";
}
?>
