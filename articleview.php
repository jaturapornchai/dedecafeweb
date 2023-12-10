<?php
$title = "DeDe Pos Cafe Article";
$page = "";
$keyword = "";
$dir = "article";
include('genkeyword.php');
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
        $files = scandir($dir);
        foreach ($files as $file) {
            if ($file == '.' || $file == '..') continue;
            $file = str_replace('.html', '', $file);
            echo '<a href="articleview?page=' . $file . '">' . $file . '</a> : ';
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

<?php include('footer-script.php'); ?>
