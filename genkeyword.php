<?php
header('Content-Type: text/html; charset=UTF-8');
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $header = $_GET['name'];
    $file = $dir . '/' . $page . '.html';
    if (file_exists($file)) {
        $content = file_get_contents($file);
        $content = str_replace("\n", "<br/>", $content);
        $contentkeyword = strip_tags($content);
    }
}

$filename = 'dictionary.txt';

$dictionary = array();

if (file_exists($filename)) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $dictionary[] = $line;
    }
    foreach ($dictionary as $word) {
        $word = trim($word);
        $contentkeyword = str_replace($word, '|' . $word . '|' , $contentkeyword);
    }
    $contentkeyword = str_replace('<br/>', '|' , $contentkeyword);
    $contentkeyword = str_replace('"', '|' , $contentkeyword);
    $contentkeyword = str_replace('(', '|' , $contentkeyword);
    $contentkeyword = str_replace(':', '|' , $contentkeyword);
    $contentkeyword = str_replace(')', '|' , $contentkeyword);
    $contentkeyword = str_replace('ๆ', '|' , $contentkeyword);
    $contentkeyword = str_replace('และ', '|' , $contentkeyword);
    $contentkeyword = str_replace('เช่น', '|' , $contentkeyword);
    $contentkeyword = str_replace('หรือ', '|' , $contentkeyword);
    $contentkeyword = str_replace(' ', '|' , $contentkeyword);
    $contentkeyword = str_replace(' ', '|' , $contentkeyword);
    $contentkeyword = str_replace('.', '|' , $contentkeyword);
    $contentkeyword = str_replace(',', '|' , $contentkeyword);
    $contentkeyword = str_replace('||', '|' , $contentkeyword);
    $contentkeyword = str_replace('||', '|' , $contentkeyword);
    // to array
    $contentkeyword = explode('|', $contentkeyword);
    foreach ($contentkeyword as $key => $word) {
        if (strlen($word) < 3 || strlen($word) > 50) {
            unset($contentkeyword[$key]);
        }
        if (is_numeric(substr($word, 0, 1))) {
            unset($contentkeyword[$key]);
        }
    }
    // count keyword and sort
    $countkeyword = array();
    foreach ($contentkeyword as $word) {
        $word = trim($word);
        if (isset($countkeyword[$word])) {
            $countkeyword[$word] += 1;
        } else {
            $countkeyword[$word] = 1;
        }
    }
    arsort($countkeyword);
    // top ten
    $countkeyword = array_slice($countkeyword, 0, 10);
    $keyword = implode(',', array_keys($countkeyword));
}

?>

