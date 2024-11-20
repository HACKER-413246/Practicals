<?php
$filename = "sample_file.txt";
$initialContent = "This is the initial content of the file.\n";

$file = fopen($filename, "w");

fwrite($file, $initialContent);

fclose($file);

echo "<h3>Initial File Content:</h3>";
echo nl2br(file_get_contents($filename));

$additionalContent = "This is the appended content.\n";


$file = fopen($filename, "a");


fwrite($file, $additionalContent);


fclose($file);


echo "<h3>Updated File Content (After Appending):</h3>";
echo nl2br(file_get_contents($filename));
?>
