<?php
if (empty($_GET)) {
    return 'Ничего не выбрано!';
}

elseif (empty($_GET['operation'])) {
    return 'Не выбрана операция';
}

elseif (!isset($_GET['x1']) || !isset($_GET['x2'])) {
    return 'Нет данных для вычисления';
}
elseif (!is_numeric($_GET['x1']) || !is_numeric($_GET['x2'])) {
    return 'Нет данных для вычисления';
}
$x1 = $_GET['x1'];
$x2 = $_GET['x2'];

$expression = $x1 . ' ' . $_GET['operation'] . ' ' . $x2 . ' = ';

switch ($_GET['operation']) {
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
    case '*':
        $result = $x1 * $x2;
        break;
    case '/':
        if ($_GET['x2']==0) {
            return 'На ноль делить нельзя';
        }
        $result = $x1 / $x2;
        break;
    default:
        return 'Операция не поддерживается';
}

return $expression . $result;
?>

