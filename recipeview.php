<?php
$title = "DeDe Pos Cafe Recipe";
$page = "";
$keyword = "";
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $file = 'recipe/' . $page . '.html';
    if (file_exists($file)) {
        $content = file_get_contents($file);
        $content = str_replace("\n", "<br/>", $content);
        $contentkeyword = strip_tags($content);
        $content = str_replace('สั่งอาหาร', '<span>สั่งอาหาร</span>', $content);
        $content = str_replace('โปรแกรม', '<span>โปรแกรม</span>', $content);
        $content = str_replace('ร้านอาหาร', '<span>ร้านอาหาร</span>', $content);         
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
        // length > 10
        if (strlen($word) > 10) {
            $contentkeyword = str_replace($word, '|' . $word , $contentkeyword);
        }
    }
    $contentkeyword = str_replace('<br/>', '|' , $contentkeyword);
    $contentkeyword = str_replace('(', '|' , $contentkeyword);
    $contentkeyword = str_replace(')', '|' , $contentkeyword);
    $contentkeyword = str_replace(' ', '|' , $contentkeyword);
    $contentkeyword = str_replace(' ', '|' , $contentkeyword);
    $contentkeyword = str_replace('.', '|' , $contentkeyword);
    $contentkeyword = str_replace(',', '|' , $contentkeyword);
    $contentkeyword = str_replace('||', '|' , $contentkeyword);
    $contentkeyword = str_replace('||', '|' , $contentkeyword);
    // to array
    $contentkeyword = explode('|', $contentkeyword);
    // remove if length < 15
    foreach ($contentkeyword as $key => $word) {
        if (strlen($word) < 20) {
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
include('header.php');
?>

<body>
    <?php include('menu.php'); ?>
    <div class="container" style="margin-top: 100px;font-size: 12px;">
        <?php
        echo "<h1>$page</h1><br/>";                
        echo "<div style='font-size: 24px;'>";
        echo $content;
        echo "</div>";
        echo "<br/><br/>";
        $files = scandir('recipe');
        foreach ($files as $file) {
            if ($file == '.' || $file == '..') continue;
            $file = str_replace('.html', '', $file);
            echo '<a href="recipeview?page=' . $file . '">' . $file . '</a> : ';
        }
        ?>
    </div>
    <?php include_once('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>

</html>
