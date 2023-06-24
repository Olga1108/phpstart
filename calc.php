<?php 
if (empty($_GET)) {
    return 'Nothing has been submitted!';
}

if (empty($_GET['operation'])) {
    return 'Operation not submitted!';
}


$x1 = $_GET['x1'] ?? null;
$x2 = $_GET['x2'] ?? null;

if ($x1 === null || $x2 === null) {
    return 'Arguments 1 or 2 were not passed';
}

if (!is_numeric($x1) || !is_numeric($x2)) {
    return 'Enter number';
}

$x1 = (float)$x1;
$x2 = (float)$x2;

$expression = $x1 . ' ' . $_GET['operation'] . ' ' . $x2 . ' = ';
$operations = $_GET['operation'];

switch ($operations) {
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
    case '/':
        $result = $x2 !== 0 ? ($x1 / $x2) : 'Forbidden devide by zero';
        break;
    case '*':
        $result = $x1 * $x2;
        break;
    default:
        return 'Operation is not supported!';
}

return $expression . $result;

?>