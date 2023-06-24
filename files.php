<?php
$file = fopen(__DIR__ . '/file.txt', 'r');
while (!feof($file)) {
    echo fgets($file);
    echo '<br>';
}
// for ($i = 0; $i < 5; $i++) {
//     echo fgets($file);
//     echo '<br>';
// }
fclose($file);

// $file2 = fopen(__DIR__ . '/file2.txt', 'w');
// for ($i = 1; $i < 100; $i++) {
//     fputs($file2, $i . PHP_EOL);
// }
// fclose($file2);

// $file3 = fopen(__DIR__ . '/file3.txt', 'a');
// fputs($file3, 'abc' . PHP_EOL);
// fclose($file3);

$data = file_get_contents(__DIR__ . '/file4.txt');
echo $data;

$fullData = 'abc' . PHP_EOL . 'def' . PHP_EOL;
file_put_contents(__DIR__ . 'file3.txt', $fullData, FILE_APPEND);
