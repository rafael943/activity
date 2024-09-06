<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$filename = 'rafael.txt';

if (file_exists($filename)) {
    echo "The file '$filename' exists.\n";

    $fileContents = file_get_contents($filename);
    echo "Contents of '$filename':\n$fileContents\n";
} else {
    echo "The file '$filename' does not exist.\n";
    
    $initialContent = "Hello, this is a new file created for demonstration purposes.\n";
    file_put_contents($filename, $initialContent);
    echo "Created '$filename' with initial content.\n";

    $fileContents = file_get_contents($filename);
    echo "Contents of '$filename' after creation:\n$fileContents\n";
}

$fileArray = file($filename);
echo "File contents as an array:\n";
print_r($fileArray);
?>
</body>
</html>