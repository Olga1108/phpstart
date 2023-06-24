<html>
<head>
    <title>Photogallery</title>
</head>
<body>
<?php
$files = scandir(__DIR__ . '/assets');
$links = [];
foreach ($files as $fileName) {
    if ($fileName === '.' || $fileName === '..') {
        continue;
    }
    $links[] = './assets/' . $fileName;
    // $links[] = 'http://localhost/photogallery/assets/' . $fileName;
}

foreach ($links as $link):?>
    <a href="<?= $link ?>"><img src="<?= $link ?>" height="80px"></a>
<?php endforeach; ?>
</body>
</html>
<!-- <form action="./result.php" class="calc-form">
    <input type="text" name="x1">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
    </select>
    <input type="text" name="x2">
    <input type="submit" value="Count">
</form> -->
        
