<?php
$title = "DeDe Pos Cafe Recipe";
$page = "";
$keyword = "";
include('header.php');
?>

<body>
    <?php include('menu.php'); ?>
    <div class="container" style="margin-top: 100px;font-size: 12px;">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $file = 'recipe/' . $page . '.html';
            if (file_exists($file)) {
                $content = file_get_contents($file);
                $content = str_replace("\n", "<br/>", $content);
                echo "<h1>$page</h1><br/>";                
                echo "<div style='font-size: 24px;'>";
                $content = str_replace('สั่งอาหาร', '<span>สั่งอาหาร</span>', $content);
                $content = str_replace('โปรแกรม', '<span>โปรแกรม</span>', $content);
                $content = str_replace('ร้านอาหาร', '<span>ร้านอาหาร</span>', $content);
                echo $content;
                echo "</div>";
            } else {
                echo 'File not found';
            }
        }
        echo "<br/><br/>";
        $files = scandir('recipe');
        foreach ($files as $file) {
            if ($file == '.' || $file == '..') continue;
            $file = str_replace('.html', '', $file);
            echo '<a href="recipeview?page=' . $file . '">' . $file . '</a> : ';
        }
        ?>
        <br />
    </div>
    <?php include_once('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>

</html>
