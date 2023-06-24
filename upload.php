<?php

require __DIR__ . '/auth.php';
$login = getUserLogin();

if ($login !== null && !empty($_FILES['attachment'])) {
    $file = $_FILES['attachment'];
    $srcFileName = $file['name'];
    $newFilePath = __DIR__ . '/assets/' . $srcFileName;
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'jif', 'pdf'];
    $extensions = pathinfo($srcFileName, PATHINFO_EXTENSION);
    if (!in_array($extensions, $allowedExtensions)) {
        $error = '';
    } elseif ($file['error'] !== UPLOAD_ERR_OK) {
        $error = '';
    } elseif (file_exists($newFilePath)) {
        $error = '';
    } elseif (!move_uploaded_file($file['tmp_name'], $newFilePath)) {
        $error = 'File upload error';
    } else {
        // $result = 'http://localhost/photogallery/assets/' . $srcFileName;
        $result = './assets/' . $srcFileName;
    }

    $files = scandir(__DIR__ . '/assets');
    $links = [];
    foreach ($files as $fileName) {
        if ($fileName === '.' || $fileName === '..') {
            continue;
        }
        $links[] = './assets/' . $fileName;
    }
    var_dump($links);
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload files</title>
</head>
<body>
<?php if ($login === null): ?>
    <a href="./login.php">Login</a>
<?php else: ?>
    Welcome, <?= $login ?>
    <a href="./logout.php">Logout</a>
    <br>
    <?php if (!empty($error)): ?>
        <?= $error ?>
    <?php elseif (!empty($result)): ?>
        <?= $result ?>
    <?php endif; ?>
    <br>
    <form action="./upload.php" method="post" enctype="multypart/form-data">
        <input type="file" name="attachment">
        <input type="submit">
    </form>
<?php endif; ?>
</body>
</html>